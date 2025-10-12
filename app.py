import telebot
import subprocess
import os
import zipfile
import tempfile
import shutil
import requests
import re
import logging
from telebot import types
import time
from datetime import datetime, timedelta
import signal
import psutil
import sqlite3
import ast
import sys
import threading
from concurrent.futures import ThreadPoolExecutor
from flask import Flask, request, jsonify

print('''
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
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢹⡟⠉⢡⣴⣶⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣟⣋⠉⠉⠛⠻⠿⣿⣷⣶⣿⣿⣿⣦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇⠀⢀⣠⣤⣭⣭⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⣄⣀⡀⠀⠀⠈⣿⡏⠙⠛⠗⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇⢰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⢠⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⢠⣿⣷⡘⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡍⠙⠻⢿⣿⣿⣿⣿⣿⣿⣿⣾⣿⣆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀ ⣴⣶⣄⠀  ⠀⠀⠀⠀⢀⡿⠀⣿⡿⣷⣿⣿⣿⡿⠿⠟⠛⠛⠿⠿⣷⣤⣤⣤⣤⣭⣾⣿⠿⠟⠻⣿⡟⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⣴⣶⣤⡀⠀⣿⠉⣿⡆⠀⠀⠀⠀⠀⠈⣿⠀⢸⡇⠀⠈⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠛⠛⠉⠁⠀⠀⠀⠀⠋⢠⣿  ⢀⣴⣿⣷⠀⠀⠀
⠀⣿⡇⠹⣿⣤⣿⡄⢸⣷⠀⠀⠀⠀⠀⠀⠹⢧⣼⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣰⡿⠃ ⠀⢸⣷⡀⠘⣿⡟⠀⠀⣰⣿⠁⠀⠀
⠀⠀⠀⠀⠀⠙⠻⠿⠿⠿⠟⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⢿⣶⣼⣤⣤⣾⠟⠁⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠉⠉⠉⠀⠀⠀⠀⠀⠀⠀
{3}
''')

# تهيئة Flask app
app = Flask(__name__)

TOKEN = '8237553046:AAFn-hpNYOALIjk8c002-0Be_jmbEzEeuMU'  # توكنك
ADMIN_ID = 1772564386  # ايديك
YOUR_USERNAME = '@hgjvfgdtgd'  #  @ يوزرك مع

bot = telebot.TeleBot(TOKEN)

# إعدادات Vercel
WEBHOOK_URL = f"https://{os.environ.get('VERCEL_URL', 'your-app.vercel.app')}/webhook"
WEBHOOK_PORT = int(os.environ.get('PORT', 8080))

uploaded_files_dir = '/tmp/uploaded_bots'  # استخدام /tmp في Vercel
active_bots = {}  # {user_id: {file_name: process_info}}
user_files = {}  
active_users = set()  
admins_list = [ADMIN_ID]  # قائمة الأدمنية
processing_files = {}  # {user_id: [file1, file2, ...]}
executor = ThreadPoolExecutor(max_workers=5)  # لمعالجة multiple files

bot_locked = False  # حالة البوت (مقفل أو مفتوح)

if not os.path.exists(uploaded_files_dir):
    os.makedirs(uploaded_files_dir)

# تهيئة قاعدة البيانات
def init_db():
    db_path = '/tmp/bot_data.db'  # استخدام /tmp في Vercel
    conn = sqlite3.connect(db_path)
    c = conn.cursor()
    
    c.execute('''CREATE TABLE IF NOT EXISTS user_files
                 (id INTEGER PRIMARY KEY AUTOINCREMENT,
                  user_id INTEGER, 
                  file_name TEXT)''')
    
    c.execute('''CREATE TABLE IF NOT EXISTS active_users
                 (user_id INTEGER PRIMARY KEY)''')
    
    c.execute('''CREATE TABLE IF NOT EXISTS admins
                 (user_id INTEGER PRIMARY KEY)''')
    
    c.execute('''CREATE TABLE IF NOT EXISTS active_bots
                 (user_id INTEGER,
                  file_name TEXT,
                  process_id INTEGER,
                  start_time TEXT,
                  PRIMARY KEY (user_id, file_name))''')
    
    c.execute('INSERT OR IGNORE INTO admins (user_id) VALUES (?)', (ADMIN_ID,))
    
    conn.commit()
    conn.close()

def load_data():
    db_path = '/tmp/bot_data.db'
    conn = sqlite3.connect(db_path)
    c = conn.cursor()
    
    # تحميل الملفات
    c.execute('SELECT user_id, file_name FROM user_files')
    user_files_data = c.fetchall()
    for row in user_files_data:
        user_id, file_name = row
        if user_id not in user_files:
            user_files[user_id] = []
        user_files[user_id].append(file_name)
    
    # تحميل المستخدمين النشطين
    c.execute('SELECT * FROM active_users')
    active_users_data = c.fetchall()
    for row in active_users_data:
        user_id = row[0]
        active_users.add(user_id)
    
    # تحميل الأدمنية
    c.execute('SELECT * FROM admins')
    admins_data = c.fetchall()
    global admins_list
    admins_list = [row[0] for row in admins_data]
    
    # تحميل البوتات النشطة والتحقق من حالتها
    c.execute('SELECT * FROM active_bots')
    active_bots_data = c.fetchall()
    for row in active_bots_data:
        user_id, file_name, process_id, start_time = row
        try:
            process = psutil.Process(process_id)
            if process.is_running():
                if user_id not in active_bots:
                    active_bots[user_id] = {}
                active_bots[user_id][file_name] = {
                    'process': process,
                    'process_id': process_id,
                    'start_time': start_time
                }
            else:
                c.execute('DELETE FROM active_bots WHERE user_id = ? AND file_name = ?', (user_id, file_name))
        except (psutil.NoSuchProcess, psutil.AccessDenied):
            c.execute('DELETE FROM active_bots WHERE user_id = ? AND file_name = ?', (user_id, file_name))
    
    conn.commit()
    conn.close()

def save_user_file(user_id, file_name):
    db_path = '/tmp/bot_data.db'
    conn = sqlite3.connect(db_path)
    c = conn.cursor()
    c.execute('INSERT INTO user_files (user_id, file_name) VALUES (?, ?)', 
              (user_id, file_name))
    conn.commit()
    conn.close()

def remove_user_file_db(user_id, file_name):
    db_path = '/tmp/bot_data.db'
    conn = sqlite3.connect(db_path)
    c = conn.cursor()
    c.execute('DELETE FROM user_files WHERE user_id = ? AND file_name = ?', 
              (user_id, file_name))
    conn.commit()
    conn.close()

def add_active_user(user_id):
    db_path = '/tmp/bot_data.db'
    conn = sqlite3.connect(db_path)
    c = conn.cursor()
    c.execute('INSERT OR IGNORE INTO active_users (user_id) VALUES (?)', (user_id,))
    conn.commit()
    conn.close()

def save_active_bot(user_id, file_name, process_id):
    db_path = '/tmp/bot_data.db'
    conn = sqlite3.connect(db_path)
    c = conn.cursor()
    start_time = datetime.now().isoformat()
    c.execute('INSERT OR REPLACE INTO active_bots (user_id, file_name, process_id, start_time) VALUES (?, ?, ?, ?)', 
              (user_id, file_name, process_id, start_time))
    conn.commit()
    conn.close()

def remove_active_bot(user_id, file_name):
    db_path = '/tmp/bot_data.db'
    conn = sqlite3.connect(db_path)
    c = conn.cursor()
    c.execute('DELETE FROM active_bots WHERE user_id = ? AND file_name = ?', (user_id, file_name))
    conn.commit()
    conn.close()

def is_admin(user_id):
    return user_id in admins_list

def is_bot_running(file_name, user_id):
    """التحقق إذا كان البوت قيد التشغيل للمستخدم المحدد"""
    if user_id in active_bots and file_name in active_bots[user_id]:
        try:
            process_info = active_bots[user_id][file_name]
            process = process_info['process']
            return process.is_running()
        except (psutil.NoSuchProcess, psutil.AccessDenied):
            if user_id in active_bots and file_name in active_bots[user_id]:
                del active_bots[user_id][file_name]
            remove_active_bot(user_id, file_name)
            return False
    return False

def get_bot_status(file_name, user_id):
    """الحصول على حالة البوت"""
    return "🟢 نشط" if is_bot_running(file_name, user_id) else "🔴 متوقف"

def add_processing_file(user_id, file_name):
    """إضافة ملف إلى قائمة المعالجة"""
    if user_id not in processing_files:
        processing_files[user_id] = []
    processing_files[user_id].append(file_name)

def remove_processing_file(user_id, file_name):
    """إزالة ملف من قائمة المعالجة"""
    if user_id in processing_files and file_name in processing_files[user_id]:
        processing_files[user_id].remove(file_name)
        if not processing_files[user_id]:
            del processing_files[user_id]

def is_processing_file(user_id, file_name):
    """التحقق إذا كان الملف قيد المعالجة"""
    return user_id in processing_files and file_name in processing_files[user_id]

# تهيئة قاعدة البيانات عند التشغيل
init_db()
load_data()

# باقي الدوال تبقى كما هي (create_main_menu, process_uploaded_file, etc.)
def create_main_menu(user_id):
    markup = types.InlineKeyboardMarkup()
    upload_button = types.InlineKeyboardButton('📤 رفع ملف', callback_data='upload')
    my_files_button = types.InlineKeyboardButton('📁 ملفاتي', callback_data='my_files')
    speed_button = types.InlineKeyboardButton('⚡ سرعة البوت', callback_data='speed')
    contact_button = types.InlineKeyboardButton('📞 تواصل مع المالك', url=f'https://t.me/{YOUR_USERNAME[1:]}')
    
    if is_admin(user_id):
        lock_button = types.InlineKeyboardButton('🔒 قفل البوت', callback_data='lock_bot')
        unlock_button = types.InlineKeyboardButton('🔓 فتح البوت', callback_data='unlock_bot')
        broadcast_button = types.InlineKeyboardButton('📢 إذاعة', callback_data='broadcast')
        add_admin_button = types.InlineKeyboardButton('👤 إضافة أدمن', callback_data='add_admin')
        
        markup.add(upload_button, my_files_button)
        markup.add(speed_button)
        markup.add(lock_button, unlock_button)
        markup.add(broadcast_button, add_admin_button)
    else:
        markup.add(upload_button, my_files_button)
        markup.add(speed_button)
    
    markup.add(contact_button)
    return markup

# تعريف جميع handlers كما هي...
@bot.message_handler(commands=['start'])
def send_welcome(message):
    if bot_locked and not is_admin(message.from_user.id):
        bot.send_message(message.chat.id, "⚠️ البوت مقفل حالياً. الرجاء المحاولة لاحقًا.")
        return

    user_id = message.from_user.id
    user_name = message.from_user.first_name
    user_username = message.from_user.username

    try:
        user_profile = bot.get_chat(user_id)
        user_bio = user_profile.bio if user_profile.bio else "لا يوجد بايو"
    except Exception as e:
        user_bio = "لا يوجد بايو"

    try:
        user_profile_photos = bot.get_user_profile_photos(user_id, limit=1)
        if user_profile_photos.photos:
            photo_file_id = user_profile_photos.photos[0][-1].file_id  
        else:
            photo_file_id = None
    except Exception as e:
        photo_file_id = None

    if user_id not in active_users:
        active_users.add(user_id)  
        add_active_user(user_id)  

        if is_admin(ADMIN_ID):
            try:
                welcome_message_to_admin = f"🎉 انضم مستخدم جديد إلى البوت!\n\n"
                welcome_message_to_admin += f"👤 الاسم: {user_name}\n"
                welcome_message_to_admin += f"📌 اليوزر: @{user_username}\n"
                welcome_message_to_admin += f"🆔 الـ ID: {user_id}\n"
                welcome_message_to_admin += f"📝 البايو: {user_bio}\n"

                if photo_file_id:
                    bot.send_photo(ADMIN_ID, photo_file_id, caption=welcome_message_to_admin)
                else:
                    bot.send_message(ADMIN_ID, welcome_message_to_admin)
            except Exception as e:
                print(f"❌ فشل في إرسال تفاصيل المستخدم إلى الأدمن: {e}")

    welcome_message = f"〽️┇اهلا بك: {user_name}\n"
    welcome_message += f"🆔┇ايديك: {user_id}\n"
    welcome_message += f"♻️┇يوزرك: @{user_username}\n"
    welcome_message += f"📰┇بايو: {user_bio}\n\n"
    welcome_message += "〽️ أنا بوت استضافة ملفات بايثون 🎗 يمكنك استخدام الأزرار أدناه للتحكم ♻️\n\n"
    welcome_message += "📝 يمكنك إرسال الملفات مباشرة بدون استخدام الأزرار!"

    if photo_file_id:
        bot.send_photo(message.chat.id, photo_file_id, caption=welcome_message, reply_markup=create_main_menu(user_id))
    else:
        bot.send_message(message.chat.id, welcome_message, reply_markup=create_main_menu(user_id))

# تعريف باقي handlers بنفس الطريقة...
@bot.message_handler(content_types=['document'])
def handle_document_auto(message):
    """معالجة الملفات المرسلة تلقائياً بدون ضغط زر"""
    user_id = message.from_user.id
    if bot_locked and not is_admin(user_id):
        bot.reply_to(message, "⚠️ البوت مقفل حالياً. الرجاء المحاولة لاحقًا.")
        return
        
    try:
        if not message.document:
            return
            
        file_id = message.document.file_id
        file_info = bot.get_file(file_id)
        downloaded_file = bot.download_file(file_info.file_path)
        file_name = message.document.file_name

        if not file_name.endswith('.py') and not file_name.endswith('.zip'):
            bot.reply_to(message, "⚠️ هذا البوت خاص برفع ملفات بايثون (.py) أو أرشيفات zip فقط.")
            return

        # التحقق إذا كان الملف قيد المعالجة
        if is_processing_file(user_id, file_name):
            bot.reply_to(message, f"⏳ الملف {file_name} قيد المعالجة حالياً...")
            return

        # إضافة الملف إلى قائمة المعالجة
        add_processing_file(user_id, file_name)

        # إرسال رسالة تأكيد الاستلام
        processing_msg = bot.reply_to(message, f"📥 جارٍ معالجة الملف: {file_name}")

        # تشغيل المعالجة في thread منفصل
        executor.submit(process_uploaded_file, downloaded_file, file_name, message, processing_msg, user_id)

    except Exception as e:
        error_msg = f"❌ حدث خطأ أثناء معالجة الملف: {str(e)}"
        bot.reply_to(message, error_msg)
        print(f"خطأ في handle_document_auto: {e}")

def process_uploaded_file(downloaded_file, file_name, message, processing_msg, user_id):
    """معالجة الملف المرفوع في thread منفصل"""
    try:
        if file_name.endswith('.zip'):
            process_zip_file(downloaded_file, file_name, message, processing_msg, user_id)
        else:
            process_py_file(downloaded_file, file_name, message, processing_msg, user_id)
    except Exception as e:
        error_msg = f"❌ حدث خطأ أثناء معالجة الملف: {str(e)}"
        bot.edit_message_text(error_msg, message.chat.id, processing_msg.message_id)
        print(f"خطأ في process_uploaded_file: {e}")
    finally:
        # إزالة الملف من قائمة المعالجة
        remove_processing_file(user_id, file_name)

# تعريف باقي الدوال كما هي...

# Flask routes للتعامل مع webhook
@app.route('/')
def index():
    return jsonify({"status": "Bot is running", "timestamp": datetime.now().isoformat()})

@app.route('/webhook', methods=['POST'])
def webhook():
    if request.headers.get('content-type') == 'application/json':
        json_string = request.get_data().decode('utf-8')
        update = telebot.types.Update.de_json(json_string)
        bot.process_new_updates([update])
        return 'OK', 200
    else:
        return 'Bad Request', 400

@app.route('/set_webhook', methods=['GET'])
def set_webhook():
    try:
        bot.remove_webhook()
        time.sleep(1)
        bot.set_webhook(url=WEBHOOK_URL)
        return jsonify({"status": "Webhook set successfully", "url": WEBHOOK_URL})
    except Exception as e:
        return jsonify({"status": "Error", "error": str(e)})

@app.route('/remove_webhook', methods=['GET'])
def remove_webhook():
    try:
        bot.remove_webhook()
        return jsonify({"status": "Webhook removed successfully"})
    except Exception as e:
        return jsonify({"status": "Error", "error": str(e)})

# الدالة الرئيسية لتشغيل التطبيق
def main():
    print('🚀 البوت يعمل الآن على Vercel!')
    # لا نقوم بتشغيل infinity_polling في Vercel

if __name__ == '__main__':
    # في Vercel، سنستخدم Flask app بدلاً من infinity_polling
    app.run(host='0.0.0.0', port=WEBHOOK_PORT, debug=False)
