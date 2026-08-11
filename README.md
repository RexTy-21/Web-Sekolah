# Sistem Informasi Profil Sekolah & PPDB Online (Laravel 10)

Aplikasi web berbasis full-stack yang dikembangkan menggunakan Laravel untuk manajemen profil institusi pendidikan, pendaftaran peserta didik baru (PPDB) secara online, serta panel administrasi terpadu.

## 🚀 Fitur Utama

### 1. Halaman Publik (Frontend)
* Beranda Interaktif: Menampilkan informasi profil sekolah, sambutan, keunggulan, serta informasi kontak dan jam operasional.
* Galeri Sekolah Dinamis: Menampilkan dokumentasi kegiatan sekolah yang dikelola langsung dari panel admin.
* Formulir PPDB Online: Memungkinkan calon siswa baru untuk mendaftar secara mandiri dengan memasukkan data diri dan asal sekolah.

### 2. Panel Administrator (Backend)
* Sistem Autentikasi Keamanan: Halaman dashboard admin dikunci menggunakan middleware autentikasi (auth), sehingga hanya admin yang telah login yang dapat mengaksesnya.
* Manajemen Data PPDB: Admin dapat melihat daftar lengkap siswa yang mendaftar dan menghapus data jika diperlukan.
* Manajemen Galeri (CRUD): Fitur unggah foto kegiatan baru beserta judul dan deskripsinya secara real-time langsung dari panel admin.

## 🛠️ Tech Stack
* Framework: Laravel 10 (PHP)
* Database: MySQL / SQLite
* Frontend UI: Bootstrap 5, FontAwesome, HTML5, CSS3

---

## 💻 Cara Menjalankan Project (Lokal)

Jika ingin menjalankan aplikasi ini di komputer lokal, ikuti langkah-langkah berikut:

1. Clone repository ini:
   git clone https://github.com/RexTy-21/Web-Sekolah.git
2. Masuk ke direktori project:
   cd Web-Sekolah
3. Install dependencies menggunakan Composer:
   composer install
4. Salin file environment dan atur koneksi database:
   cp .env.example .env
5. Generate application key:
   php artisan key:generate
6. Jalankan migrasi database:
   php artisan migrate
7. Jalankan server lokal:
   php artisan serve
8. Buka browser dan akses: http://127.0.0.1:8000
