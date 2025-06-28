# 🎮 PlayStation Rental

<p align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/PlayStation_logo.svg/2560px-PlayStation_logo.svg.png" width="400" alt="PlayStation Logo">
</p>

<p align="center">
  <b>Aplikasi Web Penyewaan Konsol PlayStation</b><br>
  Dibuat dengan Laravel dan Bootstrap
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-v12.3.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/Bootstrap-v5.3.0-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/PHP-v8.2.28-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
</p>

## ✨ Fitur Aplikasi

- 🔐 **Sistem Autentikasi** - Login dan registrasi pengguna dengan UI yang menarik
- 🎮 **Katalog Konsol** - Tampilan konsol PlayStation yang tersedia untuk disewa
- 🕹️ **Penyewaan** - Sistem pemesanan konsol dengan pilihan durasi sewa
- 💰 **Manajemen Transaksi** - Pencatatan dan pengelolaan transaksi penyewaan
- 👤 **Profil Pengguna** - Manajemen data pengguna dan riwayat penyewaan
- 🛡️ **Keamanan** - Proteksi rute dan validasi input untuk keamanan aplikasi

## 📸 Screenshot Aplikasi

<p align="center">
  <img src="https://i.imgur.com/placeholder1.png" width="45%" alt="Screenshot Halaman Beranda">
  <img src="https://i.imgur.com/placeholder2.png" width="45%" alt="Screenshot Halaman Konsol">
</p>

<p align="center">
  <img src="https://i.imgur.com/placeholder3.png" width="45%" alt="Screenshot Halaman Penyewaan">
  <img src="https://i.imgur.com/placeholder4.png" width="45%" alt="Screenshot Halaman Detail">
</p>

## 🚀 Cara Instalasi

### Prasyarat
- PHP 8.2 atau lebih tinggi
- Composer
- Node.js dan NPM (untuk asset compilation)
- Database (MySQL, PostgreSQL, atau SQLite)

### Langkah Instalasi

1. **Clone repositori**
   ```bash
   git clone https://github.com/username/playstation-rental.git
   cd playstation-rental
   ```

2. **Instal dependensi PHP**
   ```bash
   composer install
   ```

3. **Salin file .env**
   ```bash
   cp .env.example .env
   ```

4. **Konfigurasi database di file .env**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=playstation_rental
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Jalankan migrasi dan seeder**
   ```bash
   php artisan migrate --seed
   ```

7. **Jalankan server development**
   ```bash
   php artisan serve
   ```

8. **Buka aplikasi di browser**
   ```
   http://localhost:8000
   ```

## 📝 Struktur Aplikasi

```
├── app/                  # Kode utama aplikasi
│   ├── Http/             # Controllers, Middleware, dll
│   ├── Models/           # Model database
│   └── ...
├── database/             # Migrasi dan seeders
├── public/               # Asset publik
├── resources/            # Views, CSS, JS, dll
│   ├── views/            # Blade templates
│   └── ...
├── routes/               # Definisi rute
└── ...
```

## 👥 Akun Demo

| Role     | Email               | Password |
|----------|---------------------|----------|
| Admin    | admin@example.com   | password |
| Customer | customer@example.com| password |

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel 12, PHP 8.2
- **Frontend**: Bootstrap 5, JavaScript
- **Database**: SQLite / MySQL
- **Authentication**: Laravel Breeze (modified)
- **Icons**: Font Awesome 6

## 🔮 Rencana Pengembangan

- [ ] Implementasi penyewaan game
- [ ] Sistem pembayaran online
- [ ] Dashboard admin dengan statistik
- [ ] Manajemen stok konsol
- [ ] Notifikasi email untuk status penyewaan

## 📄 Lisensi

Aplikasi ini dilisensikan di bawah [MIT License](LICENSE).

## 👨‍💻 Pengembang

Dibuat dengan ❤️ oleh bintang - 2025
