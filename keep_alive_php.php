<?php

// Fichier: index.php (serveur web)
$app = function($request) {
    return "Alive";
};

// Démarrer le serveur web dans un thread séparé
function run() {
    $socket = stream_socket_server("tcp://0.0.0.0:8080", $errno, $errstr);
    if (!$socket) {
        echo "Erreur: $errstr ($errno)\n";
        return;
    }
    
    while ($conn = stream_socket_accept($socket, -1)) {
        $request = fread($conn, 1024);
        
        // Réponse HTTP basique
        $response = "HTTP/1.1 200 OK\r\n";
        $response .= "Content-Type: text/plain\r\n";
        $response .= "Connection: close\r\n\r\n";
        $response .= "Alive";
        
        fwrite($conn, $response);
        fclose($conn);
    }
    
    fclose($socket);
}

function keep_alive() {
    $pid = pcntl_fork();
    if ($pid == -1) {
        die("Erreur: impossible de créer un processus");
    } elseif ($pid) {
        // Processus parent
        return $pid;
    } else {
        // Processus enfant (serveur web)
        run();
        exit();
    }
}

// Démarrer le serveur
$server_pid = keep_alive();
sleep(1); // Laisser le temps au serveur de démarrer

// Configuration des requêtes
$url = "http://127.0.0.1:8080";
$max_wait = 60;  // temps d'attente max entre tentatives
$wait_time = 1;  // temps d'attente initial en cas d'erreur

echo "Démarrage du monitoring...\n";

while (true) {
    try {
        $context = stream_context_create([
            'http' => [
                'timeout' => 5, // timeout de sécurité
                'ignore_errors' => true // pour récupérer les réponses même avec des codes d'erreur
            ]
        ]);
        
        $response = @file_get_contents($url, false, $context);
        
        if ($response !== false) {
            // Extraire le code de statut HTTP
            $status_code = 200;
            if (isset($http_response_header[0])) {
                preg_match('/HTTP\/\d\.\d\s+(\d+)/', $http_response_header[0], $matches);
                if (isset($matches[1])) {
                    $status_code = (int)$matches[1];
                }
            }
            
            echo "Statut de la requête HTTP: " . $status_code . "\n";
            
            if ($status_code == 200) {
                echo "✅ Requête envoyée avec succès!\n";
                echo "Contenu de la réponse :\n";
                echo $response . "\n";
                
                $wait_time = 1; // réinitialiser le délai après succès
            } else {
                echo "❌ La requête a échoué avec le code : " . $status_code . "\n";
            }
            
            sleep(1); // pause normale entre les requêtes
            
        } else {
            throw new Exception("Impossible de se connecter au serveur");
        }
        
    } catch (Exception $e) {
        echo "⚠️ Erreur détectée: " . $e->getMessage() . "\n";
        echo "⏳ Nouvelle tentative dans " . $wait_time . " seconde(s)...\n";
        
        sleep($wait_time);
        
        // Augmenter le délai progressivement en cas d'erreurs répétées
        $wait_time = min($wait_time * 2, $max_wait);
    }
}

// Nettoyer le processus serveur à la fin (ne sera jamais atteint dans cette boucle infinie)
// posix_kill($server_pid, SIGTERM);
?>
