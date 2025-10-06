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
$bot_scripts = [];
$stored_tokens = [];
$user_files = [];
$active_users = [];
$admins_list = [ADMIN_ID];
$bot_locked = false;
$last_update_id = 0;

// إنشاء المجلد إذا لم يكن موجوداً
if (!file_exists($uploaded_files_dir)) {
    mkdir($uploaded_files_dir, 0777, true);
}

// تهيئة قاعدة البيانات
function init_db() {
    $conn = new SQLite3('bot_data.db');
    
    // جدول الملفات
    $conn->exec('CREATE TABLE IF NOT EXISTS user_files (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        user_id INTEGER, 
        file_name TEXT
    )');
    
    // جدول المستخدمين النشطين
    $conn->exec('CREATE TABLE IF NOT EXISTS active_users (
        user_id INTEGER PRIMARY KEY
    )');
    
    // جدول الأدمنية
    $conn->exec('CREATE TABLE IF NOT EXISTS admins (
        user_id INTEGER PRIMARY KEY
    )');
    
    // إضافة الأدمن الأساسي
    $stmt = $conn->prepare('INSERT OR IGNORE INTO admins (user_id) VALUES (?)');
    $stmt->bindValue(1, ADMIN_ID, SQLITE3_INTEGER);
    $stmt->execute();
    
    $conn->close();
}

// تحميل البيانات من قاعدة البيانات
function load_data() {
    global $user_files, $active_users, $admins_list;
    
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

// إضافة مستخدم نشط
function add_active_user($user_id) {
    $conn = new SQLite3('bot_data.db');
    $stmt = $conn->prepare('INSERT OR IGNORE INTO active_users (user_id) VALUES (?)');
    $stmt->bindValue(1, $user_id, SQLITE3_INTEGER);
    $stmt->execute();
    $conn->close();
}

// التحقق إذا كان المستخدم أدمن
function is_admin($user_id) {
    global $admins_list;
    return in_array($user_id, $admins_list);
}

// إنشاء القائمة الرئيسية
function create_main_menu($user_id) {
    $keyboard = [
        'inline_keyboard' => []
    ];
    
    $upload_button = ['text' => '📤 رفع ملف', 'callback_data' => 'upload'];
    $speed_button = ['text' => '⚡ سرعة البوت', 'callback_data' => 'speed'];
    $contact_button = ['text' => '📞 تواصل مع المالك', 'url' => 'https://t.me/' . substr(YOUR_USERNAME, 1)];
    
    if (is_admin($user_id)) {
        $lock_button = ['text' => '🔒 قفل البوت', 'callback_data' => 'lock_bot'];
        $unlock_button = ['text' => '🔓 فتح البوت', 'callback_data' => 'unlock_bot'];
        $broadcast_button = ['text' => '📢 إذاعة', 'callback_data' => 'broadcast'];
        $add_admin_button = ['text' => '👤 إضافة أدمن', 'callback_data' => 'add_admin'];
        
        $keyboard['inline_keyboard'][] = [$upload_button];
        $keyboard['inline_keyboard'][] = [$speed_button];
        $keyboard['inline_keyboard'][] = [$lock_button, $unlock_button];
        $keyboard['inline_keyboard'][] = [$broadcast_button, $add_admin_button];
    } else {
        $keyboard['inline_keyboard'][] = [$upload_button];
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
    curl_setopt($ch, CURLOPT_TIMEOUT, 35); // أزيد من الوقت قليلاً
    
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
            $welcome_message .= "👤 الاسم: {$user_name}\n";
            $welcome_message .= "📌 اليوزر: @{$user_username}\n";
            $welcome_message .= "🆔 الـ ID: {$user_id}\n";
            $welcome_message .= "📝 البايو: {$user_bio}\n";
            
            send_message(ADMIN_ID, $welcome_message);
        }
    }
    
    $welcome_message = "〽️┇اهلا بك: {$user_name}\n";
    $welcome_message .= "🆔┇ايديك: {$user_id}\n";
    $welcome_message .= "♻️┇يوزرك: @{$user_username}\n";
    $welcome_message .= "📰┇بايو: {$user_bio}\n\n";
    $welcome_message .= "〽️ أنا بوت استضافة ملفات بايثون 🎗 يمكنك استخدام الأزرار أدناه للتحكم ♻️";
    
    send_message($chat_id, $welcome_message, create_main_menu($user_id));
}

// معالجة الردود
function handle_callback_query($callback) {
    $data = $callback['data'];
    $chat_id = $callback['from']['id'];
    $message_id = $callback['message']['message_id'];
    
    switch ($data) {
        case 'upload':
            send_message($chat_id, "📄 من فضلك، أرسل الملف الذي تريد رفعه.");
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
    }
}

// معالجة الملفات
function handle_document($message) {
    global $bot_locked, $user_files, $uploaded_files_dir;
    
    $chat_id = $message['chat']['id'];
    $user_id = $message['from']['id'];
    $document = $message['document'];
    
    if ($bot_locked && !is_admin($user_id)) {
        send_message($chat_id, "⚠️ البوت مقفل حالياً. الرجاء التواصل مع المطور.");
        return;
    }
    
    $file_id = $document['file_id'];
    $file_name = $document['file_name'];
    
    if (!preg_match('/\.(py|zip)$/i', $file_name)) {
        send_message($chat_id, "⚠️ هذا البوت خاص برفع ملفات بايثون (.py) أو أرشيفات zip فقط.");
        return;
    }
    
    // جلب معلومات الملف
    $file_info = make_request('getFile', ['file_id' => $file_id]);
    if (!$file_info || !$file_info['ok']) {
        send_message($chat_id, "❌ فشل في جلب معلومات الملف.");
        return;
    }
    
    $file_path = $file_info['result']['file_path'];
    $file_url = "https://api.telegram.org/file/bot" . TOKEN . "/" . $file_path;
    
    // تحميل الملف
    $file_content = file_get_contents($file_url);
    if (!$file_content) {
        send_message($chat_id, "❌ فشل في تحميل الملف.");
        return;
    }
    
    // حفظ الملف
    $local_path = $uploaded_files_dir . '/' . $file_name;
    if (file_put_contents($local_path, $file_content) === false) {
        send_message($chat_id, "❌ فشل في حفظ الملف.");
        return;
    }
    
    if (!isset($user_files[$user_id])) {
        $user_files[$user_id] = [];
    }
    $user_files[$user_id][] = $file_name;
    save_user_file($user_id, $file_name);
    
    send_message($chat_id, "✅ تم رفع الملف بنجاح: " . $file_name);
    
    // إرسال نسخة إلى الأدمن
    if (is_admin(ADMIN_ID)) {
        $user_info = "@" . ($message['from']['username'] ?? $message['from']['id']);
        $caption = "📤 قام المستخدم {$user_info} برفع ملف: {$file_name}";
        
        // إرسال المستند إلى الأدمن باستخدام cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . TOKEN . "/sendDocument");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'chat_id' => ADMIN_ID,
            'caption' => $caption,
            'document' => new CURLFile($local_path)
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
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
            handle_document($message);
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
    
    while (true) {
        try {
            $updates = get_updates($last_update_id + 1);
            
            foreach ($updates as $update) {
                $last_update_id = $update['update_id'];
                process_update($update);
            }
            
            // تأخير بسيط لتجنب إغراق السيرفر
            usleep(100000); // 100ms
            
        } catch (Exception $e) {
            error_log("Error in long polling: " . $e->getMessage());
            sleep(5); // انتظر 5 ثواني قبل إعادة المحاولة
        }
    }
}

// التحقق من التوكن
function verify_token() {
    $response = make_request('getMe', []);
    
    if ($response && $response['ok']) {
        $bot_username = $response['result']['username'];
        echo "✅ البوت يعمل: @{$bot_username}\n";
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
    echo "📦 جاهز للاستقبال...\n";
    start_long_polling();
} else {
    echo "❌ لا يمكن تشغيل البوت. تأكد من صحة التوكن.\n";
    exit(1);
}
