@extends('layouts.app')

@push('styles')
<style>
    .galeri-item { position: relative; overflow: hidden; border-radius: 12px; cursor: pointer; }
    .galeri-item img { width: 100%; height: 280px; object-fit: cover; transition: transform 0.5s ease; }
    .galeri-overlay {
        position: absolute; top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(10, 30, 70, 0.85); color: white;
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        opacity: 0; transition: 0.4s ease; padding: 20px; text-align: center;
    }
    .galeri-item:hover img { transform: scale(1.1); }
    .galeri-item:hover .galeri-overlay { opacity: 1; }
    .galeri-overlay h4 { color: var(--biru-muda); font-weight: bold; }
</style>
@endpush

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #0a1e46;">Galeri Sekolah</h2>
        <div class="mx-auto mb-3" style="width: 60px; height: 4px; background-color: #3498db;"></div>
        <p class="text-muted">Momen-momen berharga di lingkungan SMA Bintang Nusantara.</p>
    </div>

    <div class="row g-4">
        @forelse($galeri as $item)
        <div class="col-md-6 col-lg-4">
            <div class="galeri-item shadow-sm">
                <!-- Menampilkan foto dari folder public/images/galeri -->
                <img src="{{ asset($item->foto) }}" alt="{{ $item->judul }}">
                <div class="galeri-overlay">
                    <h4>{{ $item->judul }}</h4>
                    <p class="mb-0 text-light small">{{ $item->deskripsi }}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted">Belum ada foto galeri yang diunggah.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection