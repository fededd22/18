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
        answer_callback_query($callback_id, "✅ تم قفل البوت", true);
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
            // يمكن إضافة معالجة الملفات هنا لاحقاً
            send_message($message['chat']['id'], "📁 نظام رفع الملفات قيد التطوير...");
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

// ========== التهيئة والتشغيل ==========
init_db();
load_data();

echo "🔍 جارٍ التحقق من التوكن...\n";
$response = make_request('getMe');

if ($response && $response['ok']) {
    $bot_username = $response['result']['username'];
    echo "✅ البوت يعمل: @" . $bot_username . "\n";
    echo "📦 جاهز لاستقبال الأوامر...\n";
    start_long_polling();
} else {
    echo "❌ فشل التحقق من التوكن. تأكد من صحة التوكن.\n";
    exit(1);
}

// ========== دوال قاعدة البيانات (مبسطة) ==========
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

function save_user_file($user_id, $file_name) {
    try {
        $conn = new SQLite3('bot_data.db');
        $stmt = $conn->prepare('INSERT INTO user_files (user_id, file_name) VALUES (?, ?)');
        $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
        $stmt->bindValue(2, $file_name, SQLITE3_TEXT);
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

// دالة تشغيل البوت (مبسطة للاختبار)
function run_php_script($script_path, $chat_id, $folder_path, $file_name, $original_message, $user_id) {
    send_message($chat_id, "✅ تم استلام طلب تشغيل: " . $file_name . "\n\n⚠️ نظام تشغيل الملفات قيد التطوير حالياً...");
}
