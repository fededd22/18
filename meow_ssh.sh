#!/bin/bash

# -----------------------------
# Auto-install Python + run script
# -----------------------------

# Install Python if not installed
if ! command -v python3 &> /dev/null
then
    echo "Installing/updating packages..."
    pkg update -y && pkg upgrade -y
    echo "Installing python..."
    pkg install python -y
fi

# Run the Python script
python3 <<'PYCODE'
import sys
import subprocess
import time

# Ensure requests is installed
try:
    import requests
except ImportError:
    print("Installing 'requests' library...")
    subprocess.run([sys.executable, "-m", "pip", "install", "requests"], check=True)
    import requests

# Request configuration
url = "https://painel.meowssh.shop:5000/test_ssh_public"
payload = {"store_owner_id": 1}
headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

print("\n==============================")
print("🚀 SSH Account Fetcher (Terminal)")
print("==============================\n")
time.sleep(0.8)

try:
    print("Contacting server...")
    response = requests.post(url, json=payload, headers=headers, timeout=10)

    if response.status_code in (200, 201):
        data = response.json()
        usuario = data.get("Usuario", "N/A")
        senha = data.get("Senha", "N/A")

        print("\n✅ Account retrieved successfully:\n")
        print(f"User: {usuario}")
        print(f"Password: {senha}")
    else:
        print(f"\n❌ Server returned status: {response.status_code}")
        try:
            print("Response body:", response.text)
        except Exception:
            pass

except Exception as e:
    print(f"\n🚨 Connection error:\n{str(e)}")

print("\n==============================")
print("Execution finished.")
print("==============================\n")
PYCODE
