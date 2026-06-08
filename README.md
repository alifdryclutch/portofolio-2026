# Portofolio Web Application

## 1. Project ini apa

Aplikasi ini merupakan sebuah website portofolio berbasis Laravel yang dirancang untuk menampilkan profil profesional, pengalaman kerja, portofolio proyek, dan informasi kontak. Proyek ini menggunakan arsitektur modern dengan Laravel 12, Filament sebagai panel admin, serta Docker untuk lingkungan development yang konsisten.

## 2. Kenapa dibuat

Dokumentasi portofolio ini dibuat untuk:
- Menyajikan karya dan pengalaman secara visual
- Menyediakan backend untuk manajemen konten
- Meningkatkan profesionalisme dengan tampilan yang responsif
- Memudahkan deploy ke lingkungan lokal dengan container Docker

## 3. Fitur utama

- Halaman portofolio dengan deskripsi proyek
- Halaman profil pribadi dan pengalaman kerja
- Panel admin Filament untuk manajemen konten
- Otomatisasi optimasi gambar
- Autentikasi pengguna dan keamanan akses admin
- Dukungan responsif untuk desktop dan mobile
- Konfigurasi database MySQL/MariaDB

## 4. Tech stack dan tools

- PHP 8.2
- Laravel 12
- Filament (dashboard admin)
- MariaDB / MySQL
- Docker & Docker Compose
- Nginx sebagai reverse proxy
- Tailwind CSS dan Vite untuk frontend
- PHPUnit dan Pest untuk testing

## 5. Struktur file utama

Root proyek:

- `docker-compose.yml` — konfigurasi service Docker untuk PHP, Nginx, dan database
- `nginx/` — konfigurasi Nginx dan sertifikat SSL lokal
- `php/` — image build PHP dan konfigurasi runtime
- `db/` — konfigurasi database dan volume data
- `src/` — aplikasi Laravel utama

Struktur aplikasi Laravel (`src/`):

- `app/` — logika aplikasi, model, controller, policy
- `config/` — konfigurasi Laravel
- `database/` — migrasi, factory, seeder
- `public/` — entry point web dan aset publik
- `resources/` — views, CSS, JS
- `routes/` — definisi route web dan API
- `tests/` — unit dan feature testing

## 6. Cara install dan jalankan

### Prasyarat

- Docker
- Docker Compose
- Git (opsional)

### Langkah cepat

1. Buka terminal pada folder root proyek:
   ```bash
   cd /root/perkuliahan/portofolio
   ```
2. Jalankan semua service Docker:
   ```bash
   docker-compose up -d
   ```
3. Masuk ke container PHP untuk setup Laravel:
   ```bash
   docker exec -it ${COMPOSE_PROJECT_NAME}_php bash
   ```
4. Di dalam container PHP, jalankan:
   ```bash
   cp .env.example .env
   composer install
   php artisan key:generate
   php artisan migrate --seed
   npm install
   npm run build
   ```
5. Keluarkan dari container dan buka browser ke:
   - `https://portofolio.test` (sesuaikan dengan host file jika perlu)
   - atau `http://localhost` jika konfigurasi Nginx mendukung

### Catatan environment

File environment utama berada di `src/.env.example`. Pastikan konfigurasi database sesuai dengan service Docker:

- `DB_CONNECTION=mariadb`
- `DB_HOST=db`
- `DB_PORT=3306`
- `DB_DATABASE=djambred`
- `DB_USERNAME=root`
- `DB_PASSWORD=p455w0rd`

Jika menggunakan `docker-compose`, sebaiknya perbarui `.env` dan `APP_URL` sesuai domain lokal yang digunakan.

## 7. Cara development lokal

1. Jalankan service Docker:
   ```bash
   docker-compose up -d
   ```
2. Masuk ke PHP container:
   ```bash
   docker exec -it ${COMPOSE_PROJECT_NAME}_php bash
   ```
3. Jalankan command Laravel atau npm dari dalam container:
   ```bash
   php artisan serve --host=0.0.0.0
   npm run dev
   ```

## 8. Deployment singkat

Untuk deployment production, pastikan:
- `APP_ENV=production`
- `APP_DEBUG=false`
- `php artisan config:cache`
- `php artisan route:cache`
- `npm run build`
- Gunakan sertifikat SSL valid

## 9. Siapa pembuatnya

Muhammad Aliff Al Fitroh
20240801067 
UTS pemrograman website 2025/2026