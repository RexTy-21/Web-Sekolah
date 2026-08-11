# Sistem Informasi Profil Sekolah & PPDB Online (Laravel 10)

Aplikasi web berbasis full-stack yang dikembangkan menggunakan **Laravel** untuk manajemen profil institusi pendidikan, pendaftaran peserta didik baru (PPDB) secara online, serta panel administrasi terpadu.

## 🚀 Fitur Utama

### 1. Halaman Publik (Frontend)
* **Beranda Interaktif:** Menampilkan informasi profil sekolah, sambutan, keunggulan, serta informasi kontak dan jam operasional.
* **Galeri Sekolah Dinamis:** Menampilkan dokumentasi kegiatan sekolah yang dikelola langsung dari panel admin.
* **Formulir PPDB Online:** Memungkinkan calon siswa baru untuk mendaftar secara mandiri dengan memasukkan data diri dan asal sekolah.

### 2. Panel Administrator (Backend)
* **Sistem Autentikasi Keamanan:** Halaman dashboard admin dikunci menggunakan *middleware* autentikasi (`auth`), sehingga hanya admin yang telah login yang dapat mengaksesnya.
* **Manajemen Data PPDB:** Admin dapat melihat daftar lengkap siswa yang mendaftar dan menghapus data jika diperlukan.
* **Manajemen Galeri (CRUD):** Fitur unggah foto kegiatan baru beserta judul dan deskripsinya secara *real-time* langsung dari panel admin.

## 🛠️ Tech Stack
* **Framework:** Laravel 10 (PHP)
* **Database:** MySQL / SQLite
* **Frontend UI:** Bootstrap 5, FontAwesome, HTML5, CSS3

---

## 💻 Cara Menjalankan Project (Lokal)

Jika ingin menjalankan aplikasi ini di komputer lokal, ikuti langkah-langkah berikut:

1. Clone repository ini:
   ```bash
   git clone [https://github.com/RexTy-21/Web-Sekolah.git](https://github.com/RexTy-21/Web-Sekolah.git)
