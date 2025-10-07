<?php
// إعداد التقارير عن الأخطاء
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo '
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⡇⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⣿⣧⠀⠀⠀⠀⠀⠀⣠⣾⠟⣿⡟⠀⠀⠀⠀⠀⠀⣠⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡀⠀⠀⠀⣸⣿⠹⣿⡄⠀⠀⠀⢀⣼⡟⠁⠀⢾⡇⠀⠀⠀⣀⣴⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣇⠀⠀⢀⣿⡇⠀⢻⣿⡀⠀⢀⣿⡟⠀⠀⠀⣿⡇⠀⢀⣼⡿⢿⣿⠇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣆⠀⣸⣿⠀⠀⠀⠻⣷⣤⣾⠏⠀⠀⠀⠀⣿⣧⣶⡿⠋⠀⣼⡏⠀⠀⠀⠀⠀⠀⣠⡄⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⣿⣿⣶⣿⡏⠀⠀⠀⠀⠙⠿⠋⠀⠀⠀⠀⠀⠸⠟⠁⠀⠀⢀⣿⠃⠀⢀⣀⣤⣾⣿⡿⠁⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⡆⠙⠿⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⣿⣶⡶⠟⠋⠉⣼⡟⠁⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢾⣶⣶⣶⣶⣶⣶⣤⣾⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠀⠀⠀⢠⣾⠏⢀⣀⣠⡀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠛⢷⣦⡀⠀⠀⠉⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⣿⣿⣿⣿⠟⠋⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⢻⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣬⣿⣿⣯⣀⣀⡀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠰⣶⣶⣶⣶⣿⡿⠆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠉⠉⣩⣿⡿⠏⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠙⠻⢿⣷⣤⣤⣤⣤⣶⣶⠾⠿⠿⢿⣿⣿⣿⣿⣿⣷⣶⣶⣶⣤⣤⣤⣀⡀⠀⠀⠀⣠⣤⣶⠿⠛⠉⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢹⡟⠉⢡⣴⣶⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣟⣋⠉⠉⠉⠛⠻⠿⣿⣷⣶⣿⣿⣦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇⠀⢀⣠⣤⣭⣭⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⣄⣀⡀⠀⠀⠈⣿⡏⠙⠛⠗⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇⢰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⢠⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⢠⣿⣷⡘⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡍⠙⠻⢿⣿⣿⣿⣿⣿⣿⣿⣾⣿⣆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀ ⣴⣶⣄⠀  ⠀⠀⠀⠀⢀⡿⠀⣿⡿⣷⣿⣿⣿⡿⠿⠟⠛⠛⠿⠿⣷⣤⣤⣤⣤⣭⣾⣿⠿⠟⠻⣿⡟⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⣴⣶⣤⡀⠀⣿⠉⣿⡆⠀⠀⠀⠀⠀⠈⣿⠀⢸⡇⠀⠈⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠛⠛⠉⠁⠀⠀⠀⠀⠋⢠⣿  ⢀⣴⣿⣷⠀⠀⠀
⠀⣿⡇⠹⣿⣤⣿⡄⢸⣷⠀⠀⠀⠀⠀⠀⠹⢧⣼⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣰⡿⠃ ⠀⢸⣷⡀⠘⣿⡟⠀⠀⣰⣿⠁⠀⠀
⠀⠀⠀⠀⠀⠙⠻⠿⠿⠿⠟⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⢿⣶⣼⣤⣤⣾⠟⠁⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠉⠉⠉⠀⠀⠀⠀⠀⠀⠀
{3}
';

// الثوابت
define('TOKEN', '8237553046:AAFn-hpNYOALIjk8c002-0Be_jmbEzEeuMU');
define('ADMIN_ID', 1772564386);
define('YOUR_USERNAME', '@hgjvfgdtgd');

// المتغيرات العامة
$uploaded_files_dir = 'uploaded_bots';
$active_bots = []; // [user_id => [file_name => process_info]]
$user_files = [];
$active_users = [];
$admins_list = [ADMIN_ID];
$processing_files = []; // [user_id => [file1, file2, ...]]
$bot_locked = false;
$last_update_id = 0;

// إنشاء المجلد إذا لم يكن موجوداً
if (!file_exists($uploaded_files_dir)) {
    mkdir($uploaded_files_dir, 0777, true);
}

// تهيئة قاعدة البيانات
function init_db() {
    $conn = new SQLite3('bot_data.db');
    
    $conn->exec('CREATE TABLE IF NOT EXISTS user_files (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        user_id INTEGER, 
        file_name TEXT
    )');
    
    $conn->exec('CREATE TABLE IF NOT EXISTS active_users (
        user_id INTEGER PRIMARY KEY
    )');
    
    $conn->exec('CREATE TABLE IF NOT EXISTS admins (
        user_id INTEGER PRIMARY KEY
    )');
    
    $conn->exec('CREATE TABLE IF NOT EXISTS active_bots (
        user_id INTEGER,
        file_name TEXT,
        process_id INTEGER,
        start_time TEXT,
        PRIMARY KEY (user_id, file_name)
    )');
    
    $stmt = $conn->prepare('INSERT OR IGNORE INTO admins (user_id) VALUES (?)');
    $stmt->bindValue(1, ADMIN_ID, SQLITE3_INTEGER);
    $stmt->execute();
    
    $conn->close();
}

// تحميل البيانات من قاعدة البيانات
function load_data() {
    global $user_files, $active_users, $admins_list, $active_bots;
    
    $conn = new SQLite3('bot_data.db');
    
    // تحميل الملفات
    $result = $conn->query('SELECT user_id, file_name FROM user_files');
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $user_id = $row['user_id'];
        $file_name = $row['file_name'];
        if (!isset($user_files[$user_id])) {
            $user_files[$user_id] = [];
        }
        $user_files[$user_id][] = $file_name;
    }
    
    // تحميل المستخدمين النشطين
    $result = $conn->query('SELECT * FROM active_users');
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $active_users[] = $row['user_id'];
    }
    
    // تحميل الأدمنية
    $result = $conn->query('SELECT * FROM admins');
    $admins_list = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $admins_list[] = $row['user_id'];
    }
    
    // تحميل البوتات النشطة والتحقق من حالتها
    $result = $conn->query('SELECT * FROM active_bots');
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $user_id = $row['user_id'];
        $file_name = $row['file_name'];
        $process_id = $row['process_id'];
        $start_time = $row['start_time'];
        
        if (is_process_running($process_id)) {
            if (!isset($active_bots[$user_id])) {
                $active_bots[$user_id] = [];
            }
            $active_bots[$user_id][$file_name] = [
                'process_id' => $process_id,
                'start_time' => $start_time
            ];
        } else {
            $stmt = $conn->prepare('DELETE FROM active_bots WHERE user_id = ? AND file_name = ?');
            $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
            $stmt->bindValue(2, $file_name, SQLITE3_TEXT);
            $stmt->execute();
        }
    }
    
    $conn->close();
}

// التحقق من وجود العملية
function is_process_running($pid) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        $output = [];
        exec("tasklist /FI \"PID eq $pid\" 2>NUL", $output);
        return count($output) > 1;
    } else {
        return file_exists("/proc/$pid");
    }
}

// حفظ ملف المستخدم
function save_user_file($user_id, $file_name) {
    $conn = new SQLite3('bot_data.db');
    $stmt = $conn->prepare('INSERT INTO user_files (user_id, file_name) VALUES (?, ?)');
    $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
    $stmt->bindValue(2, $file_name, SQLITE3_TEXT);
    $stmt->execute();
    $conn->close();
}

function remove_user_file_db($user_id, $file_name) {
    $conn = new SQLite3('bot_data.db');
    $stmt = $conn->prepare('DELETE FROM user_files WHERE user_id = ? AND file_name = ?');
    $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
    $stmt->bindValue(2, $file_name, SQLITE3_TEXT);
    $stmt->execute();
    $conn->close();
}

function add_active_user($user_id) {
    $conn = new SQLite3('bot_data.db');
    $stmt = $conn->prepare('INSERT OR IGNORE INTO active_users (user_id) VALUES (?)');
    $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
    $stmt->execute();
    $conn->close();
}

function save_active_bot($user_id, $file_name, $process_id) {
    $conn = new SQLite3('bot_data.db');
    $stmt = $conn->prepare('INSERT OR REPLACE INTO active_bots (user_id, file_name, process_id, start_time) VALUES (?, ?, ?, ?)');
    $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
    $stmt->bindValue(2, $file_name, SQLITE3_TEXT);
    $stmt->bindValue(3, $process_id, SQLITE3_INTEGER);
    $stmt->bindValue(4, date('c'), SQLITE3_TEXT);
    $stmt->execute();
    $conn->close();
}

function remove_active_bot($user_id, $file_name) {
    $conn = new SQLite3('bot_data.db');
    $stmt = $conn->prepare('DELETE FROM active_bots WHERE user_id = ? AND file_name = ?');
    $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
    $stmt->bindValue(2, $file_name, SQLITE3_TEXT);
    $stmt->execute();
    $conn->close();
}

function is_admin($user_id) {
    global $admins_list;
    return in_array($user_id, $admins_list);
}

function is_bot_running($file_name, $user_id) {
    global $active_bots;
    if (isset($active_bots[$user_id][$file_name])) {
        $process_info = $active_bots[$user_id][$file_name];
        return is_process_running($process_info['process_id']);
    }
    return false;
}

function get_bot_status($file_name, $user_id) {
    return is_bot_running($file_name, $user_id) ? "🟢 نشط" : "🔴 متوقف";
}

function add_processing_file($user_id, $file_name) {
    global $processing_files;
    if (!isset($processing_files[$user_id])) {
        $processing_files[$user_id] = [];
    }
    $processing_files[$user_id][] = $file_name;
}

function remove_processing_file($user_id, $file_name) {
    global $processing_files;
    if (isset($processing_files[$user_id]) && in_array($file_name, $processing_files[$user_id])) {
        $key = array_search($file_name, $processing_files[$user_id]);
        unset($processing_files[$user_id][$key]);
        if (empty($processing_files[$user_id])) {
            unset($processing_files[$user_id]);
        }
    }
}

function is_processing_file($user_id, $file_name) {
    global $processing_files;
    return isset($processing_files[$user_id]) && in_array($file_name, $processing_files[$user_id]);
}

init_db();
load_data();

function create_main_menu($user_id) {
    $keyboard = [
        'inline_keyboard' => []
    ];
    
    $upload_button = ['text' => '📤 رفع ملف', 'callback_data' => 'upload'];
    $my_files_button = ['text' => '📁 ملفاتي', 'callback_data' => 'my_files'];
    $speed_button = ['text' => '⚡ سرعة البوت', 'callback_data' => 'speed'];
    $contact_button = ['text' => '📞 تواصل مع المالك', 'url' => 'https://t.me/' . substr(YOUR_USERNAME, 1)];
    
    if (is_admin($user_id)) {
        $lock_button = ['text' => '🔒 قفل البوت', 'callback_data' => 'lock_bot'];
        $unlock_button = ['text' => '🔓 فتح البوت', 'callback_data' => 'unlock_bot'];
        $broadcast_button = ['text' => '📢 إذاعة', 'callback_data' => 'broadcast'];
        $add_admin_button = ['text' => '👤 إضافة أدمن', 'callback_data' => 'add_admin'];
        
        $keyboard['inline_keyboard'][] = [$upload_button, $my_files_button];
        $keyboard['inline_keyboard'][] = [$speed_button];
        $keyboard['inline_keyboard'][] = [$lock_button, $unlock_button];
        $keyboard['inline_keyboard'][] = [$broadcast_button, $add_admin_button];
    } else {
        $keyboard['inline_keyboard'][] = [$upload_button, $my_files_button];
        $keyboard['inline_keyboard'][] = [$speed_button];
    }
    
    $keyboard['inline_keyboard'][] = [$contact_button];
    
    return json_encode($keyboard);
}

// إرسال رسالة
function send_message($chat_id, $text, $reply_markup = null) {
    $data = [
        'chat_id' => $chat_id,
        'text' => $text
    ];
    
    if ($reply_markup) {
        $data['reply_markup'] = $reply_markup;
    }
    
    return make_request('sendMessage', $data);
}

// إجراء طلب إلى API التيليجرام
function make_request($method, $data) {
    $url = "https://api.telegram.org/bot" . TOKEN . "/" . $method;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    
    $result = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    if (curl_error($ch)) {
        error_log("cURL Error: " . curl_error($ch));
    }
    
    curl_close($ch);
    
    return $result ? json_decode($result, true) : false;
}

// الحصول على التحديثات
function get_updates($offset = 0) {
    $url = "https://api.telegram.org/bot" . TOKEN . "/getUpdates?offset=" . $offset . "&timeout=30";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 35);
    
    $result = curl_exec($ch);
    
    if (curl_error($ch)) {
        error_log("cURL Error in getUpdates: " . curl_error($ch));
        curl_close($ch);
        return [];
    }
    
    curl_close($ch);
    
    $response = json_decode($result, true);
    
    if ($response && $response['ok']) {
        return $response['result'];
    }
    
    return [];
}

// معالجة أمر /start
function handle_start($message) {
    global $bot_locked, $active_users;
    
    $chat_id = $message['chat']['id'];
    $user_id = $message['from']['id'];
    $user_name = $message['from']['first_name'];
    $user_username = $message['from']['username'] ?? 'لا يوجد';
    
    if ($bot_locked && !is_admin($user_id)) {
        send_message($chat_id, "⚠️ البوت مقفل حالياً. الرجاء المحاولة لاحقًا.");
        return;
    }
    
    $user_bio = "لا يوجد بايو";
    
    if (!in_array($user_id, $active_users)) {
        $active_users[] = $user_id;
        add_active_user($user_id);
        
        if (is_admin(ADMIN_ID)) {
            $welcome_message = "🎉 انضم مستخدم جديد إلى البوت!\n\n";
            $welcome_message .= "👤 الاسم: " . $user_name . "\n";
            $welcome_message .= "📌 اليوزر: @" . $user_username . "\n";
            $welcome_message .= "🆔 الـ ID: " . $user_id . "\n";
            $welcome_message .= "📝 البايو: " . $user_bio . "\n";
            
            send_message(ADMIN_ID, $welcome_message);
        }
    }
    
    $welcome_message = "〽️┇اهلا بك: " . $user_name . "\n";
    $welcome_message .= "🆔┇ايديك: " . $user_id . "\n";
    $welcome_message .= "♻️┇يوزرك: @" . $user_username . "\n";
    $welcome_message .= "📰┇بايو: " . $user_bio . "\n\n";
    $welcome_message .= "〽️ أنا بوت استضافة ملفات PHP 🎗 يمكنك استخدام الأزرار أدناه للتحكم ♻️\n\n";
    $welcome_message .= "📝 يمكنك إرسال الملفات مباشرة بدون استخدام الأزرار!";

    send_message($chat_id, $welcome_message, create_main_menu($user_id));
}

// معالجة الملفات المرسلة تلقائياً
function handle_document_auto($message) {
    global $bot_locked, $processing_files;
    
    $chat_id = $message['chat']['id'];
    $user_id = $message['from']['id'];
    
    if ($bot_locked && !is_admin($user_id)) {
        send_message($chat_id, "⚠️ البوت مقفل حالياً. الرجاء المحاولة لاحقًا.");
        return;
    }
    
    try {
        if (!isset($message['document'])) {
            return;
        }
        
        $document = $message['document'];
        $file_id = $document['file_id'];
        $file_name = $document['file_name'];

        if (!preg_match('/\.(php|zip)$/i', $file_name)) {
            send_message($chat_id, "⚠️ هذا البوت خاص برفع ملفات PHP (.php) أو أرشيفات zip فقط.");
            return;
        }

        // التحقق إذا كان الملف قيد المعالجة
        if (is_processing_file($user_id, $file_name)) {
            send_message($chat_id, "⏳ الملف " . $file_name . " قيد المعالجة حالياً...");
            return;
        }

        // إضافة الملف إلى قائمة المعالجة
        add_processing_file($user_id, $file_name);

        // إرسال رسالة تأكيد الاستلام
        $processing_response = send_message($chat_id, "📥 جارٍ معالجة الملف: " . $file_name);
        $processing_msg_id = $processing_response['result']['message_id'] ?? null;

        // جلب معلومات الملف
        $file_info = make_request('getFile', ['file_id' => $file_id]);
        if (!$file_info || !$file_info['ok']) {
            send_message($chat_id, "❌ فشل في جلب معلومات الملف.");
            remove_processing_file($user_id, $file_name);
            return;
        }

        $file_path = $file_info['result']['file_path'];
        $file_url = "https://api.telegram.org/file/bot" . TOKEN . "/" . $file_path;
        
        // تحميل الملف
        $file_content = file_get_contents($file_url);
        if (!$file_content) {
            send_message($chat_id, "❌ فشل في تحميل الملف.");
            remove_processing_file($user_id, $file_name);
            return;
        }

        // معالجة الملف
        if (preg_match('/\.zip$/i', $file_name)) {
            process_zip_file($file_content, $file_name, $message, $processing_msg_id, $user_id);
        } else {
            process_php_file($file_content, $file_name, $message, $processing_msg_id, $user_id);
        }

    } catch (Exception $e) {
        $error_msg = "❌ حدث خطأ أثناء معالجة الملف: " . $e->getMessage();
        send_message($chat_id, $error_msg);
        remove_processing_file($user_id, $file_name);
        error_log("خطأ في handle_document_auto: " . $e->getMessage());
    }
}

function process_zip_file($file_content, $file_name, $message, $processing_msg_id, $user_id) {
    global $uploaded_files_dir, $user_files;
    
    try {
        $temp_dir = sys_get_temp_dir() . '/' . uniqid('bot_');
        mkdir($temp_dir, 0777, true);
        
        $zip_path = $temp_dir . '/' . $file_name;
        file_put_contents($zip_path, $file_content);
        
        // تحديث الرسالة
        edit_message($message['chat']['id'], $processing_msg_id, "🔍 جارٍ البحث عن المتطلبات في الأرشيف...");
        
        // استخراج الأرشيف
        $zip = new ZipArchive();
        if ($zip->open($zip_path) === TRUE) {
            $zip->extractTo($temp_dir);
            $zip->close();
            
            // البحث عن ملفات PHP
            $php_files = [];
            $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($temp_dir));
            foreach ($iterator as $file) {
                if ($file->isFile() && preg_match('/\.php$/i', $file->getFilename())) {
                    $php_files[] = $file->getPathname();
                }
            }
            
            if (!empty($php_files)) {
                $main_script = $php_files[0];
                $final_folder = $uploaded_files_dir . '/' . pathinfo($file_name, PATHINFO_FILENAME);
                
                if (!file_exists($final_folder)) {
                    mkdir($final_folder, 0777, true);
                }
                
                // نسخ الملفات
                foreach ($php_files as $php_file) {
                    $dest_file = $final_folder . '/' . basename($php_file);
                    copy($php_file, $dest_file);
                }
                
                edit_message($message['chat']['id'], $processing_msg_id, "🚀 جارٍ تشغيل البوت...");
                run_php_script($main_script, $message['chat']['id'], $final_folder, $file_name, $message, $user_id);
                
            } else {
                edit_message($message['chat']['id'], $processing_msg_id, "❌ لم يتم العثور على أي ملفات PHP في الأرشيف.");
            }
            
        } else {
            edit_message($message['chat']['id'], $processing_msg_id, "❌ فشل في فتح الأرشيف.");
        }
        
        // تنظيف الملفات المؤقتة
        array_map('unlink', glob("$temp_dir/*.*"));
        rmdir($temp_dir);
        
        // حفظ الملف في قاعدة البيانات
        if (!isset($user_files[$user_id])) {
            $user_files[$user_id] = [];
        }
        $user_files[$user_id][] = $file_name;
        save_user_file($user_id, $file_name);
        
    } catch (Exception $e) {
        $error_msg = "❌ حدث خطأ أثناء معالجة الأرشيف: " . $e->getMessage();
        edit_message($message['chat']['id'], $processing_msg_id, $error_msg);
        error_log("خطأ في process_zip_file: " . $e->getMessage());
    } finally {
        remove_processing_file($user_id, $file_name);
    }
}

function process_php_file($file_content, $file_name, $message, $processing_msg_id, $user_id) {
    global $uploaded_files_dir, $user_files;
    
    try {
        $script_path = $uploaded_files_dir . '/' . $file_name;
        file_put_contents($script_path, $file_content);
        
        edit_message($message['chat']['id'], $processing_msg_id, "🚀 جارٍ تشغيل البوت...");
        run_php_script($script_path, $message['chat']['id'], $uploaded_files_dir, $file_name, $message, $user_id);
        
        // حفظ الملف في قاعدة البيانات
        if (!isset($user_files[$user_id])) {
            $user_files[$user_id] = [];
        }
        $user_files[$user_id][] = $file_name;
        save_user_file($user_id, $file_name);
        
    } catch (Exception $e) {
        $error_msg = "❌ حدث خطأ أثناء معالجة الملف: " . $e->getMessage();
        edit_message($message['chat']['id'], $processing_msg_id, $error_msg);
        error_log("خطأ في process_php_file: " . $e->getMessage());
    } finally {
        remove_processing_file($user_id, $file_name);
    }
}

// تعديل رسالة
function edit_message($chat_id, $message_id, $text, $reply_markup = null) {
    $data = [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => $text
    ];
    
    if ($reply_markup) {
        $data['reply_markup'] = $reply_markup;
    }
    
    return make_request('editMessageText', $data);
}

// معالجة الردود
function handle_callback_query($callback) {
    $data = $callback['data'];
    $chat_id = $callback['from']['id'];
    $message_id = $callback['message']['message_id'];
    
    switch ($data) {
        case 'upload':
            send_message($chat_id, "📄 من فضلك، أرسل الملف الذي تريد رفعه.\n\nيمكنك إرسال multiple files في نفس الوقت!");
            break;
            
        case 'my_files':
            show_my_files($chat_id, $message_id, $callback['from']['id']);
            break;
            
        case 'speed':
            $start_time = microtime(true);
            $response = make_request('getMe', []);
            $latency = microtime(true) - $start_time;
            
            if ($response && $response['ok']) {
                send_message($chat_id, "⚡ سرعة البوت: " . round($latency, 2) . " ثانية.");
            } else {
                send_message($chat_id, "⚠️ فشل في الحصول على سرعة البوت.");
            }
            break;
            
        case 'lock_bot':
            if (is_admin($chat_id)) {
                global $bot_locked;
                $bot_locked = true;
                send_message($chat_id, "🔒 تم قفل البوت.");
            } else {
                send_message($chat_id, "⚠️ أنت لست أدمن.");
            }
            break;
            
        case 'unlock_bot':
            if (is_admin($chat_id)) {
                global $bot_locked;
                $bot_locked = false;
                send_message($chat_id, "🔓 تم فتح البوت.");
            } else {
                send_message($chat_id, "⚠️ أنت لست أدمن.");
            }
            break;
            
        case 'broadcast':
            if (is_admin($chat_id)) {
                send_message($chat_id, "أرسل الرسالة التي تريد إذاعتها:");
            } else {
                send_message($chat_id, "⚠️ أنت لست أدمن.");
            }
            break;
            
        case 'add_admin':
            if (is_admin($chat_id)) {
                send_message($chat_id, "أرسل معرف المستخدم الذي تريد جعله أدمن:");
            } else {
                send_message($chat_id, "⚠️ أنت لست أدمن.");
            }
            break;
            
        case 'back_to_main':
            $user_id = $callback['from']['id'];
            edit_message($chat_id, $message_id, 
                "〽️ أنا بوت استضافة ملفات PHP 🎗 يمكنك استخدام الأزرار أدناه للتحكم ♻️\n\n📝 يمكنك إرسال الملفات مباشرة بدون استخدام الأزرار!",
                create_main_menu($user_id)
            );
            break;
            
        default:
            if (strpos($data, 'start_') === 0) {
                $file_name = str_replace('start_', '', $data);
                start_bot_callback($chat_id, $file_name, $callback['from']['id']);
            } elseif (strpos($data, 'stop_') === 0) {
                $file_name = str_replace('stop_', '', $data);
                stop_bot_callback($chat_id, $file_name, $callback['from']['id']);
            } elseif (strpos($data, 'delete_') === 0) {
                $file_name = str_replace('delete_', '', $data);
                delete_bot_callback($chat_id, $message_id, $file_name, $callback['from']['id']);
            }
            break;
    }
}

function show_my_files($chat_id, $message_id, $user_id) {
    global $user_files;
    
    if (!isset($user_files[$user_id]) || empty($user_files[$user_id])) {
        edit_message($chat_id, $message_id, "📭 لم تقم برفع أي ملفات بعد.");
        return;
    }
    
    $files_message = "📁 ملفاتك المرفوعة:\n\n";
    $keyboard = ['inline_keyboard' => []];
    
    foreach ($user_files[$user_id] as $file_name) {
        $status = get_bot_status($file_name, $user_id);
        $files_message .= "📄 " . $file_name . " - " . $status . "\n";
        
        if (is_bot_running($file_name, $user_id)) {
            $stop_button = ['text' => "⏹️ إيقاف " . $file_name, 'callback_data' => 'stop_' . $file_name];
            $keyboard['inline_keyboard'][] = [$stop_button];
        } else {
            $start_button = ['text' => "▶️ تشغيل " . $file_name, 'callback_data' => 'start_' . $file_name];
            $delete_button = ['text' => "🗑️ حذف " . $file_name, 'callback_data' => 'delete_' . $file_name];
            $keyboard['inline_keyboard'][] = [$start_button, $delete_button];
        }
    }
    
    $back_button = ['text' => '🔙 رجوع', 'callback_data' => 'back_to_main'];
    $keyboard['inline_keyboard'][] = [$back_button];
    
    edit_message($chat_id, $message_id, $files_message, json_encode($keyboard));
}

function start_bot_callback($chat_id, $file_name, $user_id) {
    global $user_files, $uploaded_files_dir;
    
    if (!isset($user_files[$user_id]) || !in_array($file_name, $user_files[$user_id])) {
        send_message($chat_id, "❌ الملف غير موجود أو ليس لديك صلاحية للتحكم به.");
        return;
    }
    
    $file_path = null;
    $folder_path = null;
    
    if (preg_match('/\.zip$/i', $file_name)) {
        $folder_name = pathinfo($file_name, PATHINFO_FILENAME);
        $folder_path = $uploaded_files_dir . '/' . $folder_name;
        if (file_exists($folder_path)) {
            $php_files = glob($folder_path . '/*.php');
            if (!empty($php_files)) {
                $file_path = $php_files[0];
            }
        }
    } else {
        $file_path = $uploaded_files_dir . '/' . $file_name;
        $folder_path = $uploaded_files_dir;
    }
    
    if ($file_path && file_exists($file_path)) {
        send_message($chat_id, "🔄 جارٍ تشغيل " . $file_name . "...");
        run_php_script($file_path, $chat_id, $folder_path, $file_name, ['from' => ['id' => $user_id]], $user_id);
        sleep(2);
        // إعادة تحميل قائمة الملفات
        // يمكن إضافة تحديث للرسالة هنا
    } else {
        send_message($chat_id, "❌ لم يتم العثور على ملف " . $file_name);
    }
}

function stop_bot_callback($chat_id, $file_name, $user_id) {
    global $active_bots, $user_files;
    
    if (!isset($user_files[$user_id]) || !in_array($file_name, $user_files[$user_id])) {
        send_message($chat_id, "❌ الملف غير موجود أو ليس لديك صلاحية للتحكم به.");
        return;
    }
    
    if (isset($active_bots[$user_id][$file_name])) {
        $process_info = $active_bots[$user_id][$file_name];
        kill_process_tree($process_info['process_id']);
        unset($active_bots[$user_id][$file_name]);
        remove_active_bot($user_id, $file_name);
        send_message($chat_id, "⏹️ تم إيقاف " . $file_name);
    } else {
        send_message($chat_id, "⚠️ البوت " . $file_name . " غير قيد التشغيل");
    }
}

function delete_bot_callback($chat_id, $message_id, $file_name, $user_id) {
    global $active_bots, $user_files, $uploaded_files_dir;
    
    if (!isset($user_files[$user_id]) || !in_array($file_name, $user_files[$user_id])) {
        send_message($chat_id, "❌ الملف غير موجود أو ليس لديك صلاحية للتحكم به.");
        return;
    }
    
    if (isset($active_bots[$user_id][$file_name])) {
        $process_info = $active_bots[$user_id][$file_name];
        kill_process_tree($process_info['process_id']);
        unset($active_bots[$user_id][$file_name]);
        remove_active_bot($user_id, $file_name);
    }
    
    if (preg_match('/\.zip$/i', $file_name)) {
        $folder_name = pathinfo($file_name, PATHINFO_FILENAME);
        $folder_path = $uploaded_files_dir . '/' . $folder_name;
        if (file_exists($folder_path)) {
            array_map('unlink', glob($folder_path . '/*.*'));
            rmdir($folder_path);
        }
    } else {
        $file_path = $uploaded_files_dir . '/' . $file_name;
        if (file_exists($file_path)) {
            unlink($file_path);
        }
    }
    
    $key = array_search($file_name, $user_files[$user_id]);
    if ($key !== false) {
        unset($user_files[$user_id][$key]);
        $user_files[$user_id] = array_values($user_files[$user_id]);
    }
    remove_user_file_db($user_id, $file_name);
    
    send_message($chat_id, "🗑️ تم حذف " . $file_name);
    show_my_files($chat_id, $message_id, $user_id);
}

// تشغيل ملف PHP
function run_php_script($script_path, $chat_id, $folder_path, $file_name, $original_message, $user_id) {
    global $active_bots;
    
    try {
        // إيقاف البوت إذا كان يعمل
        if (isset($active_bots[$user_id][$file_name])) {
            $process_info = $active_bots[$user_id][$file_name];
            kill_process_tree($process_info['process_id']);
            unset($active_bots[$user_id][$file_name]);
            remove_active_bot($user_id, $file_name);
        }
        
        // تشغيل الملف في الخلفية
        $command = "php " . escapeshellarg($script_path) . " > /dev/null 2>&1 & echo $!";
        $output = [];
        $return_code = 0;
        exec($command, $output, $return_code);
        
        if (!empty($output)) {
            $process_id = intval(trim($output[0]));
            
            $process_info = [
                'process_id' => $process_id,
                'start_time' => date('c')
            ];
            
            if (!isset($active_bots[$user_id])) {
                $active_bots[$user_id] = [];
            }
            $active_bots[$user_id][$file_name] = $process_info;
            
            save_active_bot($user_id, $file_name, $process_id);
            
            // مراقبة العملية
            $monitor_thread = function() use ($process_id, $file_name, $user_id, $chat_id) {
                sleep(10); // انتظر 10 ثواني
                if (!is_process_running($process_id)) {
                    send_message($chat_id, "❌ فشل تشغيل البوت " . $file_name);
                    if (isset($active_bots[$user_id][$file_name])) {
                        unset($active_bots[$user_id][$file_name]);
                    }
                    remove_active_bot($user_id, $file_name);
                }
            };
            
            // تشغيل المراقبة في الخلفية
            if (function_exists('pcntl_fork')) {
                $pid = pcntl_fork();
                if ($pid == 0) {
                    $monitor_thread();
                    exit(0);
                }
            } else {
                // بديل للمراقبة بدون pcntl
                register_shutdown_function($monitor_thread);
            }
            
            $token = extract_token_from_script($script_path);
            $user_info = isset($original_message['from']['username']) ? 
                "@" . $original_message['from']['username'] : 
                strval($original_message['from']['id']);
                
            if ($token) {
                $bot_info_url = "https://api.telegram.org/bot{$token}/getMe";
                $bot_info = json_decode(file_get_contents($bot_info_url), true);
                $bot_username = $bot_info['ok'] ? $bot_info['result']['username'] : "غير معروف";
                
                $caption = "📤 قام المستخدم " . $user_info . " برفع ملف بوت جديد. معرف البوت: @" . $bot_username;
            } else {
                $caption = "📤 قام المستخدم " . $user_info . " برفع ملف بوت جديد، ولكن لم أتمكن من جلب معرف البوت.";
            }
            
            // إرسال الملف إلى الأدمن
            if (is_admin(ADMIN_ID)) {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . TOKEN . "/sendDocument");
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, [
                    'chat_id' => ADMIN_ID,
                    'caption' => $caption,
                    'document' => new CURLFile($script_path)
                ]);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_exec($ch);
                curl_close($ch);
            }
            
            $keyboard = [
                'inline_keyboard' => [
                    [['text' => "🔴 إيقاف " . $file_name, 'callback_data' => 'stop_' . $file_name]]
                ]
            ];
            
            send_message($chat_id, "✅ تم تشغيل البوت بنجاح!\nاستخدم الأزرار أدناه للتحكم في البوت 👇", json_encode($keyboard));
            
        } else {
            send_message($chat_id, "❌ فشل تشغيل البوت " . $file_name);
        }
        
    } catch (Exception $e) {
        $error_msg = "❌ حدث خطأ أثناء تشغيل البوت " . $file_name . ":\n\n📝 الخطأ: " . $e->getMessage();
        send_message($chat_id, $error_msg);
        if (is_admin(ADMIN_ID)) {
            send_message(ADMIN_ID, "❌ فشل تشغيل بوت: " . $file_name . "\nالمستخدم: " . $user_id . "\nالخطأ: " . $e->getMessage());
        }
    }
}

function extract_token_from_script($script_path) {
    try {
        $content = file_get_contents($script_path);
        $patterns = [
            "/['\"]([0-9]{9,10}:[A-Za-z0-9_-]{35})['\"]/",
            "/TOKEN\\s*=\\s*['\"]([0-9]{9,10}:[A-Za-z0-9_-]{35})['\"]/",
            "/token\\s*=\\s*['\"]([0-9]{9,10}:[A-Za-z0-9_-]{35})['\"]/"
        ];
        
        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $content, $matches)) {
                return $matches[1];
            }
        }
    } catch (Exception $e) {
        error_log("[ERROR] فشل في استخراج التوكن من " . $script_path . ": " . $e->getMessage());
    }
    return null;
}

function kill_process_tree($pid) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        exec("taskkill /F /T /PID $pid");
    } else {
        exec("pkill -P $pid");
        exec("kill -9 $pid");
    }
}

// معالجة التحديثات
function process_update($update) {
    if (isset($update['message'])) {
        $message = $update['message'];
        
        if (isset($message['text'])) {
            $text = $message['text'];
            if (strpos($text, '/start') === 0) {
                handle_start($message);
            }
        } elseif (isset($message['document'])) {
            handle_document_auto($message);
        }
    } elseif (isset($update['callback_query'])) {
        handle_callback_query($update['callback_query']);
    }
}

// الدالة الرئيسية للLong Polling
function start_long_polling() {
    global $last_update_id;
    
    echo "🚀 بدأ تشغيل البوت باستخدام Long Polling...\n";
    echo "📞 البوت يستمع للتحديثات...\n";
    echo "🎯 البوت جاهز لاستقبال ملفات PHP...\n";
    
    while (true) {
        try {
            $updates = get_updates($last_update_id + 1);
            
            foreach ($updates as $update) {
                $last_update_id = $update['update_id'];
                process_update($update);
            }
            
            usleep(100000);
            
        } catch (Exception $e) {
            error_log("Error in long polling: " . $e->getMessage());
            sleep(5);
        }
    }
}

// التحقق من التوكن
function verify_token() {
    $response = make_request('getMe', []);
    
    if ($response && $response['ok']) {
        $bot_username = $response['result']['username'];
        echo "✅ البوت يعمل: @" . $bot_username . "\n";
        return true;
    } else {
        echo "❌ فشل التحقق من التوكن. تأكد من صحة التوكن.\n";
        return false;
    }
}

// التشغيل الرئيسي
init_db();
load_data();

echo "🔍 التحقق من التوكن...\n";
if (verify_token()) {
    echo "📦 جاهز لاستقبال ملفات PHP...\n";
    start_long_polling();
} else {
    echo "❌ لا يمكن تشغيل البوت. تأكد من صحة التوكن.\n";
    exit(1);
}
