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
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⣷⡘⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⣴⣶⣄⠀⠀⠀⠀⠀⠀⠀⠀⢀⡿⠀⣿⡿⣷⣿⣿⣿⡿⠿⠟⠛⠛⠿⠿⣷⣤⣤⣤⣤⣭⣾⣿⠿⠟⠻⣿⡟⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⣴⣶⣤⡀⠀⣿⠉⣿⡆⠀⠀⠀⠀⠀⠀⠈⣿⠀⢸⡇⠀⠈⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠛⠛⠉⠁⠀⠀⠀⠀⠋⢠⣿⠀⠀⢀⣴⣿⣷⠀⠀⠀⠀⠀
⠀⣿⡇⠹⣿⣤⣿⡄⢸⣷⠀⠀⠀⠀⠀⠀⠀⠹⢧⣼⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣰⡿⠃⠀⠀⠀⢸⣷⡀⠘⣿⡟⠀⠀⣰⣿⠁⠀⠀
⠀⠀⠀⠀⠀⠙⠻⠿⠿⠿⠟⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⢿⣶⣼⣤⣤⣾⠟⠁⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠉⠀⠀⠀⠀⠀⠀⠀
{3}
';

// الثوابت
define('TOKEN', '8237553046:AAFn-hpNYOALIjk8c002-0Be_jmbEzEeuMU');
define('ADMIN_ID', 1772564386);
define('YOUR_USERNAME', '@hgjvfgdtgd');

// المتغيرات العامة
$uploaded_files_dir = 'uploaded_bots';
$active_bots = [];
$user_files = [];
$active_users = [];
$admins_list = [ADMIN_ID];
$processing_files = [];
$bot_locked = false;
$last_update_id = 0;
$user_states = [];

// إنشاء المجلد إذا لم يكن موجوداً
if (!file_exists($uploaded_files_dir)) {
    mkdir($uploaded_files_dir, 0777, true);
}

// ========== نظام قاعدة البيانات ==========
function init_db() {
    try {
        $conn = new SQLite3('bot_data.db');
        
        $conn->exec('CREATE TABLE IF NOT EXISTS user_files (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER, 
            file_name TEXT,
            file_type TEXT,
            upload_time TEXT
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
    } catch (Exception $e) {
        error_log("خطأ في تهيئة قاعدة البيانات: " . $e->getMessage());
    }
}

function load_data() {
    global $user_files, $active_users, $admins_list, $active_bots;
    
    try {
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
        
        $conn->close();
    } catch (Exception $e) {
        error_log("خطأ في تحميل البيانات: " . $e->getMessage());
    }
}

// ========== نظام API التيليجرام ==========
function make_request($method, $data = []) {
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

function answer_callback_query($callback_query_id, $text = null, $show_alert = false) {
    $data = [
        'callback_query_id' => $callback_query_id
    ];
    
    if ($text) {
        $data['text'] = $text;
    }
    
    if ($show_alert) {
        $data['show_alert'] = $show_alert;
    }
    
    return make_request('answerCallbackQuery', $data);
}

function edit_message_text($chat_id, $message_id, $text, $reply_markup = null) {
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

function get_file($file_id) {
    $data = [
        'file_id' => $file_id
    ];
    
    return make_request('getFile', $data);
}

function download_file($file_path) {
    $url = "https://api.telegram.org/file/bot" . TOKEN . "/" . $file_path;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    
    $file_content = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    if (curl_error($ch)) {
        error_log("cURL Error in download: " . curl_error($ch));
        curl_close($ch);
        return false;
    }
    
    curl_close($ch);
    
    return $file_content;
}

function get_updates($offset = 0) {
    $url = "https://api.telegram.org/bot" . TOKEN . "/getUpdates?offset=" . $offset . "&timeout=10";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    
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

// ========== نظام القوائم ==========
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

// ========== نظام المعالجة الرئيسي ==========
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
    
    // إضافة المستخدم للنشطين
    if (!in_array($user_id, $active_users)) {
        $active_users[] = $user_id;
        add_active_user($user_id);
    }
    
    $welcome_message = "〽️┇اهلا بك: " . $user_name . "\n";
    $welcome_message .= "🆔┇ايديك: " . $user_id . "\n";
    $welcome_message .= "♻️┇يوزرك: @" . $user_username . "\n\n";
    $welcome_message .= "〽️ أنا بوت استضافة ملفات PHP 🎗 يمكنك استخدام الأزرار أدناه للتحكم ♻️\n\n";
    $welcome_message .= "📝 يمكنك إرسال الملفات مباشرة بدون استخدام الأزرار!";

    $response = send_message($chat_id, $welcome_message, create_main_menu($user_id));
    
    if (!$response || !$response['ok']) {
        error_log("فشل في إرسال رسالة البداية: " . json_encode($response));
    }
}

// ========== نظام معالجة الـ Callback Queries ==========
function handle_callback_query($callback) {
    $data = $callback['data'];
    $chat_id = $callback['from']['id'];
    $message_id = $callback['message']['message_id'];
    $user_id = $callback['from']['id'];
    $callback_id = $callback['id'];
    
    error_log("معالجة callback: " . $data . " من المستخدم: " . $user_id);
    
    // الإجابة الفورية أولاً
    answer_callback_query($callback_id, "🔄 جارٍ المعالجة...");
    
    // معالجة الأوامر المختلفة
    switch ($data) {
        case 'upload':
            send_message($chat_id, "📄 من فضلك، أرسل الملف الذي تريد رفعه.\n\nيمكنك إرسال multiple files في نفس الوقت!");
            break;
            
        case 'my_files':
            show_my_files($chat_id, $message_id, $user_id);
            break;
            
        case 'speed':
            handle_speed_test($chat_id);
            break;
            
        case 'lock_bot':
            handle_lock_bot($chat_id, $user_id);
            break;
            
        case 'unlock_bot':
            handle_unlock_bot($chat_id, $user_id);
            break;
            
        case 'broadcast':
            handle_broadcast($chat_id, $user_id);
            break;
            
        case 'add_admin':
            handle_add_admin($chat_id, $user_id);
            break;
            
        case 'back_to_main':
            handle_back_to_main($chat_id, $message_id, $user_id);
            break;
            
        default:
            if (strpos($data, 'start_') === 0) {
                $file_name = str_replace('start_', '', $data);
                handle_start_bot($chat_id, $file_name, $user_id);
            } elseif (strpos($data, 'stop_') === 0) {
                $file_name = str_replace('stop_', '', $data);
                handle_stop_bot($chat_id, $file_name, $user_id);
            } elseif (strpos($data, 'delete_') === 0) {
                $file_name = str_replace('delete_', '', $data);
                handle_delete_bot($chat_id, $message_id, $file_name, $user_id);
            } else {
                send_message($chat_id, "❌ أمر غير معروف. الرجاء استخدام الأزرار المتاحة.");
            }
            break;
    }
}

// ========== دوال معالجة الأزرار ==========
function handle_speed_test($chat_id) {
    $start_time = microtime(true);
    $response = make_request('getMe', []);
    $latency = microtime(true) - $start_time;
    
    if ($response && $response['ok']) {
        send_message($chat_id, "⚡ سرعة البوت: " . round($latency, 2) . " ثانية.");
    } else {
        send_message($chat_id, "⚠️ فشل في الحصول على سرعة البوت.");
    }
}

function handle_lock_bot($chat_id, $user_id) {
    global $bot_locked;
    
    if (is_admin($user_id)) {
        $bot_locked = true;
        send_message($chat_id, "🔒 تم قفل البوت.");
    } else {
        send_message($chat_id, "⚠️ أنت لست أدمن.");
    }
}

function handle_unlock_bot($chat_id, $user_id) {
    global $bot_locked;
    
    if (is_admin($user_id)) {
        $bot_locked = false;
        send_message($chat_id, "🔓 تم فتح البوت.");
    } else {
        send_message($chat_id, "⚠️ أنت لست أدمن.");
    }
}

function handle_broadcast($chat_id, $user_id) {
    if (is_admin($user_id)) {
        set_user_state($user_id, 'awaiting_broadcast_message');
        send_message($chat_id, "📢 أرسل الرسالة التي تريد إذاعتها لجميع المستخدمين:");
    } else {
        send_message($chat_id, "⚠️ أنت لست أدمن.");
    }
}

function handle_add_admin($chat_id, $user_id) {
    if (is_admin($user_id)) {
        set_user_state($user_id, 'awaiting_admin_id');
        send_message($chat_id, "👤 أرسل معرف المستخدم الذي تريد جعله أدمن:");
    } else {
        send_message($chat_id, "⚠️ أنت لست أدمن.");
    }
}

function handle_back_to_main($chat_id, $message_id, $user_id) {
    $text = "〽️ أنا بوت استضافة ملفات PHP 🎗 يمكنك استخدام الأزرار أدناه للتحكم ♻️\n\n📝 يمكنك إرسال الملفات مباشرة بدون استخدام الأزرار!";
    edit_message_text($chat_id, $message_id, $text, create_main_menu($user_id));
}

function handle_start_bot($chat_id, $file_name, $user_id) {
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
    } else {
        send_message($chat_id, "❌ لم يتم العثور على ملف " . $file_name);
    }
}

function handle_stop_bot($chat_id, $file_name, $user_id) {
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

function handle_delete_bot($chat_id, $message_id, $file_name, $user_id) {
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

// ========== دوال المساعدة ==========
function show_my_files($chat_id, $message_id, $user_id) {
    global $user_files;
    
    if (!isset($user_files[$user_id]) || empty($user_files[$user_id])) {
        edit_message_text($chat_id, $message_id, "📭 لم تقم برفع أي ملفات بعد.");
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
    
    edit_message_text($chat_id, $message_id, $files_message, json_encode($keyboard));
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

function set_user_state($user_id, $state) {
    global $user_states;
    $user_states[$user_id] = $state;
}

function get_user_state($user_id) {
    global $user_states;
    return isset($user_states[$user_id]) ? $user_states[$user_id] : null;
}

function clear_user_state($user_id) {
    global $user_states;
    if (isset($user_states[$user_id])) {
        unset($user_states[$user_id]);
    }
}

function is_process_running($pid) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        $output = [];
        exec("tasklist /FI \"PID eq $pid\" 2>NUL", $output);
        return count($output) > 1;
    } else {
        return file_exists("/proc/$pid");
    }
}

function kill_process_tree($pid) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        exec("taskkill /F /T /PID $pid");
    } else {
        exec("pkill -P $pid");
        exec("kill -9 $pid");
    }
}

// ========== نظام معالجة الملفات المحسّن ==========
function handle_file_upload($message) {
    global $uploaded_files_dir, $user_files;
    
    $chat_id = $message['chat']['id'];
    $user_id = $message['from']['id'];
    $document = $message['document'];
    
    $file_id = $document['file_id'];
    $file_name = $document['file_name'];
    $file_size = $document['file_size'];
    
    // التحقق من حجم الملف (10MB كحد أقصى)
    if ($file_size > 10 * 1024 * 1024) {
        send_message($chat_id, "❌ حجم الملف كبير جداً. الحد الأقصى هو 10MB.");
        return;
    }
    
    send_message($chat_id, "📥 جارٍ تحميل الملف: " . $file_name . "...");
    
    // الحصول على معلومات الملف
    $file_info = get_file($file_id);
    if (!$file_info || !$file_info['ok']) {
        send_message($chat_id, "❌ فشل في الحصول على معلومات الملف.");
        return;
    }
    
    $file_path = $file_info['result']['file_path'];
    
    // تحميل الملف
    $file_content = download_file($file_path);
    if (!$file_content) {
        send_message($chat_id, "❌ فشل في تحميل الملف.");
        return;
    }
    
    // حفظ الملف
    $local_file_path = $uploaded_files_dir . '/' . $file_name;
    if (file_put_contents($local_file_path, $file_content) === false) {
        send_message($chat_id, "❌ فشل في حفظ الملف.");
        return;
    }
    
    // معالجة الملف بناءً على نوعه
    $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $processed = process_uploaded_file($local_file_path, $file_name, $file_type, $user_id, $chat_id);
    
    if ($processed) {
        // حفظ معلومات الملف في قاعدة البيانات
        if (!isset($user_files[$user_id])) {
            $user_files[$user_id] = [];
        }
        $user_files[$user_id][] = $file_name;
        save_user_file($user_id, $file_name, $file_type);
        
        send_message($chat_id, "✅ تم رفع الملف بنجاح: " . $file_name . "\n\n📁 يمكنك الآن تشغيله من قائمة 'ملفاتي'");
    } else {
        send_message($chat_id, "❌ فشل في معالجة الملف.");
        unlink($local_file_path);
    }
}

function process_uploaded_file($file_path, $file_name, $file_type, $user_id, $chat_id) {
    global $uploaded_files_dir;
    
    switch ($file_type) {
        case 'zip':
            return extract_zip_file($file_path, $file_name, $user_id, $chat_id);
            
        case 'php':
            return setup_php_file($file_path, $file_name, $user_id, $chat_id);
            
        case 'py':
            return setup_python_file($file_path, $file_name, $user_id, $chat_id);
            
        case 'js':
            return setup_nodejs_file($file_path, $file_name, $user_id, $chat_id);
            
        default:
            send_message($chat_id, "⚠️ نوع الملف غير مدعوم: " . $file_type . "\n\n📝 جارٍ البحث عن ملفات قابلة للتشغيل...");
            return find_and_setup_executable_files($file_path, $file_name, $user_id, $chat_id);
    }
}

function extract_zip_file($zip_path, $original_name, $user_id, $chat_id) {
    global $uploaded_files_dir;
    
    $folder_name = pathinfo($original_name, PATHINFO_FILENAME);
    $extract_path = $uploaded_files_dir . '/' . $folder_name;
    
    // إنشاء مجلد الاستخراج
    if (!file_exists($extract_path)) {
        mkdir($extract_path, 0777, true);
    }
    
    // فك الضغط
    $zip = new ZipArchive();
    if ($zip->open($zip_path) === TRUE) {
        $zip->extractTo($extract_path);
        $zip->close();
        
        send_message($chat_id, "📦 تم فك ضغط الملف إلى: " . $folder_name);
        
        // البحث عن ملفات قابلة للتشغيل
        return find_and_setup_executable_files($extract_path, $original_name, $user_id, $chat_id, true);
    } else {
        send_message($chat_id, "❌ فشل في فك ضغط الملف.");
        return false;
    }
}

function find_and_setup_executable_files($path, $original_name, $user_id, $chat_id, $is_folder = false) {
    $executable_files = [];
    
    if ($is_folder) {
        $files = scandir($path);
        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            
            $file_path = $path . '/' . $file;
            $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            
            if (in_array($file_ext, ['php', 'py', 'js', 'html', 'htm'])) {
                $executable_files[] = [
                    'path' => $file_path,
                    'name' => $file,
                    'ext' => $file_ext
                ];
            }
        }
    } else {
        $file_ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        $executable_files[] = [
            'path' => $path,
            'name' => basename($path),
            'ext' => $file_ext
        ];
    }
    
    if (empty($executable_files)) {
        send_message($chat_id, "❌ لم يتم العثور على ملفات قابلة للتشغيل.");
        return false;
    }
    
    $success_count = 0;
    foreach ($executable_files as $file_info) {
        switch ($file_info['ext']) {
            case 'php':
                if (setup_php_file($file_info['path'], $file_info['name'], $user_id, $chat_id)) {
                    $success_count++;
                }
                break;
            case 'py':
                if (setup_python_file($file_info['path'], $file_info['name'], $user_id, $chat_id)) {
                    $success_count++;
                }
                break;
            case 'js':
                if (setup_nodejs_file($file_info['path'], $file_info['name'], $user_id, $chat_id)) {
                    $success_count++;
                }
                break;
        }
    }
    
    send_message($chat_id, "📊 تم معالجة " . $success_count . " ملف من أصل " . count($executable_files) . " ملف قابل للتشغيل.");
    return $success_count > 0;
}

function setup_php_file($file_path, $file_name, $user_id, $chat_id) {
    // التحقق من صحة ملف PHP
    $output = [];
    $return_code = 0;
    exec("php -l " . escapeshellarg($file_path) . " 2>&1", $output, $return_code);
    
    if ($return_code !== 0) {
        send_message($chat_id, "⚠️ ملف PHP به أخطاء: " . $file_name . "\n" . implode("\n", $output));
        return false;
    }
    
    send_message($chat_id, "✅ ملف PHP صالح: " . $file_name);
    return true;
}

function setup_python_file($file_path, $file_name, $user_id, $chat_id) {
    // التحقق من تثبيت Python
    $output = [];
    exec("python3 --version 2>&1", $output, $return_code);
    
    if ($return_code !== 0) {
        send_message($chat_id, "❌ Python غير مثبت على السيرفر.");
        return false;
    }
    
    // التحقق من صحة ملف Python
    exec("python3 -m py_compile " . escapeshellarg($file_path) . " 2>&1", $output, $return_code);
    
    if ($return_code !== 0) {
        send_message($chat_id, "⚠️ ملف Python به أخطاء: " . $file_name . "\n" . implode("\n", $output));
        return false;
    }
    
    // تنظيف ملف البايت كود
    $pyc_file = $file_path . 'c';
    if (file_exists($pyc_file)) {
        unlink($pyc_file);
    }
    
    send_message($chat_id, "✅ ملف Python صالح: " . $file_name);
    return true;
}

function setup_nodejs_file($file_path, $file_name, $user_id, $chat_id) {
    // التحقق من تثبيت Node.js
    $output = [];
    exec("node --version 2>&1", $output, $return_code);
    
    if ($return_code !== 0) {
        send_message($chat_id, "❌ Node.js غير مثبت على السيرفر.");
        return false;
    }
    
    // التحقق من صحة ملف JavaScript
    exec("node -c " . escapeshellarg($file_path) . " 2>&1", $output, $return_code);
    
    if ($return_code !== 0) {
        send_message($chat_id, "⚠️ ملف JavaScript به أخطاء: " . $file_name . "\n" . implode("\n", $output));
        return false;
    }
    
    send_message($chat_id, "✅ ملف JavaScript صالح: " . $file_name);
    return true;
}

// ========== نظام تشغيل الملفات المحسّن ==========
function run_php_script($script_path, $chat_id, $folder_path, $file_name, $original_message, $user_id) {
    global $active_bots;
    
    send_message($chat_id, "✅ تم استلام طلب تشغيل: " . $file_name);
    
    // تغيير المسار إلى مجلد الملف إذا كان هناك مجلد
    $working_dir = $folder_path;
    $command = "cd " . escapeshellarg($working_dir) . " && php " . escapeshellarg(basename($script_path)) . " 2>&1";
    
    // تشغيل العملية في الخلفية
    $descriptorspec = [
        0 => ["pipe", "r"],  // stdin
        1 => ["pipe", "w"],  // stdout
        2 => ["pipe", "w"]   // stderr
    ];
    
    $process = proc_open($command, $descriptorspec, $pipes, $working_dir);
    
    if (is_resource($process)) {
        // الحصول على PID العملية
        $status = proc_get_status($process);
        $pid = $status['pid'];
        
        // حفظ معلومات البوت النشط
        if (!isset($active_bots[$user_id])) {
            $active_bots[$user_id] = [];
        }
        $active_bots[$user_id][$file_name] = [
            'process_id' => $pid,
            'process' => $process,
            'pipes' => $pipes,
            'start_time' => time(),
            'file_path' => $script_path
        ];
        
        save_active_bot($user_id, $file_name, $pid);
        
        send_message($chat_id, "🚀 بدأ تشغيل: " . $file_name . "\n📁 المجلد: " . basename($working_dir) . "\n🆔 PID: " . $pid);
        
        // مراقبة العملية في الخلفية (غير متزامن)
        register_shutdown_function(function() use ($user_id, $file_name, $chat_id, $process, $pipes) {
            monitor_process($user_id, $file_name, $chat_id, $process, $pipes);
        });
        
    } else {
        send_message($chat_id, "❌ فشل في تشغيل: " . $file_name);
    }
}

function monitor_process($user_id, $file_name, $chat_id, $process, $pipes) {
    // إغلاق الأنابيب غير الضرورية
    fclose($pipes[0]); // stdin
    
    // قراءة الإخراج بشكل غير متزامن
    stream_set_blocking($pipes[1], false);
    stream_set_blocking($pipes[2], false);
    
    $start_time = time();
    $last_output_time = time();
    $output_buffer = "";
    
    while (true) {
        // التحقق من حالة العملية
        $status = proc_get_status($process);
        if (!$status['running']) {
            break;
        }
        
        // قراءة الإخراج
        $stdout = stream_get_contents($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        
        if (!empty($stdout)) {
            $output_buffer .= "📤 STDOUT:\n" . $stdout . "\n";
            $last_output_time = time();
        }
        
        if (!empty($stderr)) {
            $output_buffer .= "❌ STDERR:\n" . $stderr . "\n";
            $last_output_time = time();
        }
        
        // إرسال الإخراج إذا كان كبيراً أو مر وقت طويل
        if (!empty($output_buffer) && (strlen($output_buffer) > 1000 || (time() - $last_output_time) > 10)) {
            send_process_output($chat_id, $file_name, $output_buffer);
            $output_buffer = "";
        }
        
        // التحقق من الوقت المنقضي
        if ((time() - $start_time) > 3600) { // ساعة واحدة كحد أقصى
            break;
        }
        
        usleep(100000); // 100ms
    }
    
    // إرسال أي إخراج متبقي
    if (!empty($output_buffer)) {
        send_process_output($chat_id, $file_name, $output_buffer);
    }
    
    // الحصول على كود الخروج
    $exit_code = proc_close($process);
    fclose($pipes[1]);
    fclose($pipes[2]);
    
    // إرسال تقرير النهاية
    $status_message = "⏹️ توقف التشغيل: " . $file_name . "\n";
    $status_message .= "📊 كود الخروج: " . $exit_code . "\n";
    $status_message .= "⏰ وقت التشغيل: " . (time() - $start_time) . " ثانية";
    
    send_message($chat_id, $status_message);
    
    // إزالة من القائمة النشطة
    remove_active_bot($user_id, $file_name);
    global $active_bots;
    if (isset($active_bots[$user_id][$file_name])) {
        unset($active_bots[$user_id][$file_name]);
    }
}

function send_process_output($chat_id, $file_name, $output) {
    if (strlen($output) > 4000) {
        $output = substr($output, 0, 4000) . "\n... (مخرجات مقطوعة)";
    }
    
    $message = "📊 إخراج " . $file_name . ":\n" . $output;
    send_message($chat_id, $message);
}

// ========== نظام معالجة الرسائل النصية ==========
function handle_text_message($message) {
    global $user_states, $active_users, $admins_list;
    
    $chat_id = $message['chat']['id'];
    $user_id = $message['from']['id'];
    $text = $message['text'];
    $state = get_user_state($user_id);
    
    if ($state === 'awaiting_broadcast_message' && is_admin($user_id)) {
        // عملية البث
        $broadcast_message = $text;
        $success_count = 0;
        $fail_count = 0;
        
        send_message($chat_id, "📤 جارٍ إرسال الرسالة إلى جميع المستخدمين...");
        
        foreach ($active_users as $user) {
            try {
                $result = send_message($user, "📢 إشعار من الأدمن:\n\n" . $broadcast_message);
                if ($result && $result['ok']) {
                    $success_count++;
                } else {
                    $fail_count++;
                }
            } catch (Exception $e) {
                $fail_count++;
            }
            usleep(100000);
        }
        
        send_message($chat_id, "✅ تم إرسال الرسالة إلى " . $success_count . " مستخدم\n❌ فشل إرسال الرسالة إلى " . $fail_count . " مستخدم");
        clear_user_state($user_id);
        
    } elseif ($state === 'awaiting_admin_id' && is_admin($user_id)) {
        // إضافة أدمن جديد
        if (is_numeric($text)) {
            $new_admin_id = intval($text);
            
            if (!in_array($new_admin_id, $admins_list)) {
                $admins_list[] = $new_admin_id;
                add_admin_to_db($new_admin_id);
                send_message($chat_id, "✅ تم إضافة المستخدم " . $new_admin_id . " كأدمن.");
            } else {
                send_message($chat_id, "⚠️ المستخدم " . $new_admin_id . " هو بالفعل أدمن.");
            }
        } else {
            send_message($chat_id, "❌ الرجاء إرسال معرف مستخدم صحيح (أرقام فقط).");
        }
        clear_user_state($user_id);
    } else {
        send_message($chat_id, "❓ لم أفهم طلبك. استخدم الأزرار أدناه:", create_main_menu($user_id));
    }
}

// ========== نظام معالجة التحديثات ==========
function process_update($update) {
    if (isset($update['message'])) {
        $message = $update['message'];
        
        if (isset($message['text'])) {
            $text = $message['text'];
            if (strpos($text, '/start') === 0) {
                handle_start($message);
            } else {
                handle_text_message($message);
            }
        } elseif (isset($message['document'])) {
            handle_file_upload($message); // ✅ تم إصلاح نظام رفع الملفات
        }
    } elseif (isset($update['callback_query'])) {
        handle_callback_query($update['callback_query']);
    }
}

// ========== التشغيل الرئيسي ==========
function start_long_polling() {
    global $last_update_id;
    
    echo "🚀 بدأ تشغيل البوت...\n";
    echo "📞 البوت يستمع للتحديثات...\n";
    
    while (true) {
        try {
            $updates = get_updates($last_update_id + 1);
            
            foreach ($updates as $update) {
                $last_update_id = $update['update_id'];
                process_update($update);
            }
            
            usleep(100000); // 100ms delay
            
        } catch (Exception $e) {
            error_log("Error in long polling: " . $e->getMessage());
            sleep(5);
        }
    }
}

// ========== دوال قاعدة البيانات ==========
function add_active_user($user_id) {
    try {
        $conn = new SQLite3('bot_data.db');
        $stmt = $conn->prepare('INSERT OR IGNORE INTO active_users (user_id) VALUES (?)');
        $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        error_log("خطأ في إضافة مستخدم نشط: " . $e->getMessage());
    }
}

function save_user_file($user_id, $file_name, $file_type) {
    try {
        $conn = new SQLite3('bot_data.db');
        $stmt = $conn->prepare('INSERT INTO user_files (user_id, file_name, file_type, upload_time) VALUES (?, ?, ?, ?)');
        $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
        $stmt->bindValue(2, $file_name, SQLITE3_TEXT);
        $stmt->bindValue(3, $file_type, SQLITE3_TEXT);
        $stmt->bindValue(4, date('c'), SQLITE3_TEXT);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        error_log("خطأ في حفظ ملف: " . $e->getMessage());
    }
}

function remove_user_file_db($user_id, $file_name) {
    try {
        $conn = new SQLite3('bot_data.db');
        $stmt = $conn->prepare('DELETE FROM user_files WHERE user_id = ? AND file_name = ?');
        $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
        $stmt->bindValue(2, $file_name, SQLITE3_TEXT);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        error_log("خطأ في حذف ملف: " . $e->getMessage());
    }
}

function save_active_bot($user_id, $file_name, $process_id) {
    try {
        $conn = new SQLite3('bot_data.db');
        $stmt = $conn->prepare('INSERT OR REPLACE INTO active_bots (user_id, file_name, process_id, start_time) VALUES (?, ?, ?, ?)');
        $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
        $stmt->bindValue(2, $file_name, SQLITE3_TEXT);
        $stmt->bindValue(3, $process_id, SQLITE3_INTEGER);
        $stmt->bindValue(4, date('c'), SQLITE3_TEXT);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        error_log("خطأ في حفظ بوت نشط: " . $e->getMessage());
    }
}

function remove_active_bot($user_id, $file_name) {
    try {
        $conn = new SQLite3('bot_data.db');
        $stmt = $conn->prepare('DELETE FROM active_bots WHERE user_id = ? AND file_name = ?');
        $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
        $stmt->bindValue(2, $file_name, SQLITE3_TEXT);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        error_log("خطأ في إزالة بوت نشط: " . $e->getMessage());
    }
}

function add_admin_to_db($user_id) {
    try {
        $conn = new SQLite3('bot_data.db');
        $stmt = $conn->prepare('INSERT OR IGNORE INTO admins (user_id) VALUES (?)');
        $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        error_log("خطأ في إضافة أدمن: " . $e->getMessage());
    }
}

// ========== التهيئة والتشغيل ==========
init_db();
load_data();

echo "🔍 جارٍ التحقق من التوكن...\n";
$response = make_request('getMe');

if ($response && $response['ok']) {
    $bot_username = $response['result']['username'];
    echo "✅ البوت يعمل: @" . $bot_username . "\n";
    echo "📦 نظام رفع وتشغيل الملفات جاهز...\n";
    echo "🔧 المدعوم: PHP, Python, Node.js, ZIP\n";
    start_long_polling();
} else {
    echo "❌ فشل التحقق من التوكن. تأكد من صحة التوكن.\n";
    exit(1);
}
