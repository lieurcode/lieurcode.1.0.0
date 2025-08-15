# LieurCode 1.0.0

LieurCode adalah framework sederhana berbasis PHP yang dirancang untuk pembelajaran dan pengembangan web ringan.

## 📦 Fitur
- Struktur MVC sederhana
- Routing dasar
- Halaman home dengan tampilan HTML & CSS
- Siap dikembangkan untuk API atau web app

---

## 🚀 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/lieurcode/lieurcode.1.0.0.git
cd lieurcode.1.0.0
2. Install Dependencies
Pastikan sudah terinstal Composer.

bash
Copy
Edit
composer install
3. Jalankan Server
Gunakan PHP built-in server:

bash
Copy
Edit
php -S localhost:8000 -t public
Buka di browser:

arduino
Copy
Edit
http://localhost:8000
📂 Struktur Folder
php
Copy
Edit
lieurcode.1.0.0/
├── app/        # Folder utama untuk logic aplikasi
├── public/     # Akses publik, termasuk index.php
├── vendor/     # Dependency (hasil composer install)
├── README.md   # Dokumentasi
🛠 Persyaratan
PHP 7.4+

Composer

Web server (opsional, untuk deployment)
