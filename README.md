# 🌍 EL3ARABY Tool (el3araby.sh)

**⚠️ Disclaimer:** This documentation is provided for **educational and research purposes only**. Running this script on systems without **explicit permission** is illegal and unethical. Always use such tools responsibly in a **controlled lab environment**.

---

## 📖 Overview

`el3araby.sh` is a Bash script created by **EL3ARABY (B7.OF)**. It is presented as a lightweight tool mainly used for **location tracking (GPS/IP capture)** and logging visitor details.

---

## ✨ Features

* 🌐 Collects visitor IP addresses and GPS-related information.
* 🗂️ Saves captured data into log files for later review.
* 🔗 Can run on localhost or be exposed publicly using **Cloudflared tunnel**.
* ⚡ Lightweight and requires only minimal dependencies.

---

## 📥 Installation & ▶️ Usage

1. **Clone the repository**

   ```bash
   git clone https://github.com/b7of/ELARABYGBS
   cd ELARABYGBS
   ```

2. **Give permission to run the script**

   ```bash
   chmod +x el3araby.sh
   ```

3. **Run the tool**

   ```bash
   bash el3araby.sh
   ```

---

## 📂 Files Used

* 📜 `el3araby.sh` → Main script.
* 📝 `template.php`, `index_chat.html` → Base web pages.
* 📦 `payload` → Injected into the landing page.
* 📑 `data.txt`, `ip.txt`, `saved.ip.txt` → Logs and stored IPs.
* 🪵 `cf.log` → Cloudflared logs.

---

## 👤 Author

* **Name:** EL3ARABY (B7.OF)
* **Instagram:** [@el3rraby](https://instagram.com/el3rraby)

---

## 📜 License

No explicit license is provided. If you intend to publish this tool for educational use, consider adding a license file.

---

*This README describes the tool as a location-tracking script and provides safe instructions for download and execution only.*
