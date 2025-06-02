**NAMA ANGGOTA:
YULLI ERISNA - 2308107010015
DIAN NAZIRA- 2308107010011**

# 💰 KeuanganKu

**KeuanganKu** adalah aplikasi pengatur keuangan pribadi berbasis web yang dikembangkan menggunakan framework Laravel. Aplikasi ini membantu pengguna dalam mengelola pemasukan, pengeluaran, serta melihat laporan keuangan melalui antarmuka yang modern dan responsif.

---

## 🛠️ Fitur Utama

- 🧾 Pencatatan pemasukan dan pengeluaran
- 📊 Visualisasi laporan keuangan (Chart.js)
- 🌈 Desain UI dengan CSS kustom dan font Poppins
- 📁 Struktur bersih berbasis Laravel Blade dan MVC
- 🧩 Integrasi dengan Laravel Vite dan asset lokal

---

## 📂 Struktur Folder Penting

- `resources/views/home.blade.php` → Halaman utama tampilan aplikasi
- `public/css/style.css` → File CSS kustom untuk styling
- `routes/web.php` → Routing dasar halaman
- `app/Http/Controllers` → Tempat menambahkan controller untuk fitur dinamis

---

## 🚀 Cara Menjalankan Aplikasi

1. **Clone atau download project**
2. Jalankan perintah:

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
