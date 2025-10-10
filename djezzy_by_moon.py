import requests
import json
import os
from datetime import datetime, timedelta

# 📁 مسار ملف البيانات
data_file_path = 'djezzy_data.json'

# 🔄 تحميل بيانات المستخدمين
def load_user_data():
    if os.path.exists(data_file_path):
        with open(data_file_path, 'r', encoding='utf-8') as file:
            return json.load(file)
    return {}

# 💾 حفظ بيانات المستخدمين
def save_user_data(data):
    with open(data_file_path, 'w', encoding='utf-8') as file:
        json.dump(data, file, indent=4)

# 🔒 إخفاء رقم الهاتف
def hide_phone_number(phone_number):
    return phone_number[:4] + '*******' + phone_number[-2:]

# 📤 إرسال OTP
def send_otp(msisdn):
    url = 'https://apim.djezzy.dz/oauth2/registration'
    payload = f'msisdn={msisdn}&client_id=6E6CwTkp8H1CyQxraPmcEJPQ7xka&scope=smsotp'
    headers = {
        'User-Agent': 'Djezzy/2.6.7',
        'Connection': 'close',
        'Content-Type': 'application/x-www-form-urlencoded',
        'Cache-Control': 'no-cache'
    }
    try:
        response = requests.post(url, data=payload, headers=headers)
        print('[📩] Réponse OTP:', response.json())
        return True
    except requests.RequestException as error:
        print('[❌] Erreur lors de l’envoi OTP:', error)
        return False

# ✅ التحقق من OTP
def verify_otp(msisdn, otp):
    url = 'https://apim.djezzy.dz/oauth2/token'
    payload = f'otp={otp}&mobileNumber={msisdn}&scope=openid&client_id=6E6CwTkp8H1CyQxraPmcEJPQ7xka&client_secret=MVpXHW_ImuMsxKIwrJpoVVMHjRsa&grant_type=mobile'
    headers = {
        'User-Agent': 'Djezzy/2.6.7',
        'Connection': 'close',
        'Content-Type': 'application/x-www-form-urlencoded',
        'Cache-Control': 'no-cache'
    }
    try:
        response = requests.post(url, data=payload, headers=headers)
        if response.status_code == 200:
            print('[✅] OTP vérifié avec succès.')
            return response.json()
        else:
            print('[❌] OTP échoué (code non valide).')
            return None
    except requests.RequestException as error:
        print('[❌] Erreur vérification OTP:', error)
        return None

# 🎁 تطبيق الهدية
def apply_gift(msisdn, access_token):
    url = f'https://apim.djezzy.dz/djezzy-api/api/v1/subscribers/{msisdn}/subscription-product'
    gift_code = 'GIFTWALKWIN1GO'
    payload = {
        'data': {
            'id': 'GIFTWALKWIN',
            'type': 'products',
            'meta': {
                'services': {
                    'steps': 10000,
                    'code': gift_code,
                    'id': 'WALKWIN'
                }
            }
        }
    }
    headers = {
        'User-Agent': 'Djezzy/2.6.7',
        'Connection': 'Keep-Alive',
        'Content-Type': 'application/json; charset=utf-8',
        'Authorization': f'Bearer {access_token}'
    }
    try:
        response = requests.post(url, json=payload, headers=headers)
        data = response.json()
        if 'successfully done' in data.get('message', ''):
            print(f"[🎉] Cadeau activé avec succès: {gift_code}")
            return True
        else:
            print(f"[⚠️] Erreur d’application du cadeau: {data.get('message', 'Inconnue')}")
            return False
    except requests.RequestException as error:
        print('[❌] Erreur lors de l’application du cadeau:', error)
        return False

# 🚀 برنامج التشغيل الرئيسي
def main():
    print("=== 🎯 Activation Cadeau Djezzy ===\n")

    phone = input("📱 Entrez votre numéro Djezzy (commence par 07): ").strip()
    if not phone.startswith('07') or len(phone) != 10:
        print("⚠️ Numéro invalide. Il doit commencer par 07 et contenir 10 chiffres.")
        return

    msisdn = '213' + phone[1:]
    print(f"📤 Envoi OTP vers: {msisdn} ...")

    if not send_otp(msisdn):
        print("❌ Erreur lors de l’envoi OTP. Réessayez plus tard.")
        return

    otp = input("🔢 Entrez le code OTP reçu: ").strip()
    tokens = verify_otp(msisdn, otp)

    if not tokens:
        print("❌ OTP échoué. Vérifiez votre code et réessayez.")
        return

    access_token = tokens.get('access_token')
    if not access_token:
        print("⚠️ Aucun token reçu.")
        return

    # Sauvegarde locale
    user_data = load_user_data()
    user_data[msisdn] = {
        'access_token': access_token,
        'refresh_token': tokens.get('refresh_token'),
        'last_applied': datetime.now().isoformat()
    }
    save_user_data(user_data)

    # Application du cadeau
    print("\n🎁 Application du cadeau Walkwin en cours...")
    if apply_gift(msisdn, access_token):
        print("✅ Cadeau appliqué avec succès !")
    else:
        print("❌ Échec de l’application du cadeau.")

# 🏁 نقطة البداية
if __name__ == "__main__":
    main()
