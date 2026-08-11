@extends('layouts.app')

@push('styles')
<style>
    .hero-section {
        background: linear-gradient(rgba(10, 30, 70, 0.8), rgba(10, 30, 70, 0.8)), 
                    url('{{ asset('images/dashboard.jpg') }}') center/cover;
        min-height: 75vh;
        display: flex;
        align-items: center;
        color: white;
    }
    .card-kegiatan {
        border: none;
        border-top: 4px solid var(--biru-muda);
        transition: transform 0.3s;
    }
    .card-kegiatan:hover { transform: translateY(-10px); }
    .icon-bulat {
        width: 60px; height: 60px;
        background-color: var(--biru-muda);
        color: white;
        display: flex; align-items: center; justify-content: center;
        border-radius: 50%; font-size: 1.5rem; margin-bottom: 15px;
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<div class="hero-section text-center text-md-start">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Masa Depan Gemilang Dimulai Dari Sini</h1>
                <p class="lead mb-4">Berdedikasi untuk menciptakan generasi unggul, berkarakter, dan siap menghadapi tantangan global melalui pendidikan berbasis teknologi.</p>
                <a href="/ppdb" class="btn btn-custom btn-lg px-4 shadow-sm"><i class="fa-solid fa-user-plus me-2"></i>Daftar PPDB Sekarang</a>
            </div>
        </div>
    </div>
</div>

<!-- Sejarah & Informasi -->
<div class="container my-5 py-4">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="{{ asset('images/halaman.jpg') }}" class="img-fluid rounded shadow" alt="Gedung Sekolah">
        </div>
        <div class="col-md-6 px-md-5">
            <h2 class="fw-bold" style="color: #0a1e46;">Sejarah Sekolah</h2>
            <div class="mb-3" style="width: 60px; height: 4px; background-color: #3498db;"></div>
            <p class="text-muted" style="line-height: 1.8;">Didirikan pada tahun 1990, SMAN 1 MAJALAYA berawal dari komitmen untuk menghadirkan fasilitas pembelajaran terbaik. Hingga kini, kami telah mencetak ribuan alumni yang berhasil masuk ke perguruan tinggi ternama dan industri profesional.</p>
        </div>
    </div>
</div>

<!-- Kegiatan Unggulan -->
<div class="bg-white py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #0a1e46;">Kegiatan Unggulan</h2>
            <p class="text-muted">Fasilitas dan ekstrakurikuler untuk mendukung minat bakat siswa.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-kegiatan shadow-sm h-100 p-4 text-center">
                    <div class="d-flex justify-content-center"><div class="icon-bulat"><i class="fa-solid fa-laptop-code"></i></div></div>
                    <h5 class="fw-bold" style="color: #0a1e46;">Klub Informatika</h5>
                    <p class="text-muted mb-0">Pembelajaran dasar pemrograman, desain UI/UX, dan perakitan robotika.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-kegiatan shadow-sm h-100 p-4 text-center">
                    <div class="d-flex justify-content-center"><div class="icon-bulat"><i class="fa-solid fa-campground"></i></div></div>
                    <h5 class="fw-bold" style="color: #0a1e46;">Pramuka & PMR</h5>
                    <p class="text-muted mb-0">Melatih kepemimpinan, kemandirian, serta rasa empati terhadap sesama.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-kegiatan shadow-sm h-100 p-4 text-center">
                    <div class="d-flex justify-content-center"><div class="icon-bulat"><i class="fa-solid fa-medal"></i></div></div>
                    <h5 class="fw-bold" style="color: #0a1e46;">Porseni Tahunan</h5>
                    <p class="text-muted mb-0">Pekan olahraga dan seni sebagai ajang unjuk kreativitas antar siswa.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Informasi Kontak & Lokasi Sekolah -->
<div class="container my-5 py-4">
    <div class="row g-4 align-items-center">
        <!-- Kolom Info Kontak -->
        <div class="col-lg-6">
            <h2 class="fw-bold mb-3" style="color: #0a1e46;">Hubungi & Kunjungi Kami</h2>
            <div class="mb-4" style="width: 60px; height: 4px; background-color: #3498db;"></div>
            <p class="text-muted mb-4">Punya pertanyaan seputar pendaftaran PPDB atau fasilitas sekolah? Silakan hubungi layanan informasi kami atau datang langsung ke kampus.</p>
            
            <ul class="list-unstyled text-secondary">
                <li class="mb-3 d-flex align-items-start">
                    <div class="icon-bulat-sm me-3 text-primary fs-5"><i class="fa-solid fa-location-dot"></i></div>
                    <div>
                        <strong class="text-dark">Alamat Sekolah:</strong><br>
                        Perum Citra Kebun Mas , Kec. Majalaya, Kab. Karawang, Prov. Jawa Barat
                    </div>
                </li>
                <li class="mb-3 d-flex align-items-start">
                    <div class="icon-bulat-sm me-3 text-primary fs-5"><i class="fa-solid fa-phone-volume"></i></div>
                    <div>
                        <strong class="text-dark">Telepon:</strong><br>
                        02678402699
                    </div>
                </li>
                <li class="mb-3 d-flex align-items-start">
                    <div class="icon-bulat-sm me-3 text-primary fs-5"><i class="fa-solid fa-envelope"></i></div>
                    <div>
                        <strong class="text-dark">Email Resmi:</strong><br>
                        smansatumajalaya.karawang@gmail.com
                    </div>
                </li>
            </ul>
        </div>

        <!-- Kolom Google Maps Mockup / Card Jam Operasional -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm p-4 rounded-4" style="background-color: #0a1e46; color: white;">
                <h4 class="fw-bold mb-3"><i class="fa-solid fa-clock me-2 text-info"></i> Jam Operasional Sekolah</h4>
                <p class="text-light opacity-75 mb-4">Layanan administrasi dan pendaftaran PPDB offline buka pada:</p>
                <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between py-2 border-bottom border-light border-opacity-10">
                        <span>Senin - Kamis</span>
                        <span class="fw-semibold">07:30 - 15:00 WIB</span>
                    </li>
                    <li class="d-flex justify-content-between py-2 border-bottom border-light border-opacity-10">
                        <span>Jumat</span>
                        <span class="fw-semibold">07:30 - 11:30 WIB</span>
                    </li>
                    <li class="d-flex justify-content-between py-2">
                        <span>Sabtu - Minggu</span>
                        <span class="text-warning fw-semibold">Libur / Tutup</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection