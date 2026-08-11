@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header text-white text-center py-3" style="background-color: #0a1e46;">
                    <h4 class="mb-0 fw-bold"><i class="fa-solid fa-file-signature me-2"></i>Formulir Pendaftaran Siswa Baru</h4>
                </div>
                <div class="card-body p-4 p-md-5">
                    
                    @if(session('sukses'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><i class="fa-solid fa-circle-check me-2"></i>Berhasil!</strong> {{ session('sukses') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="/ppdb" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-secondary">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control form-control-lg bg-light" placeholder="Masukkan nama lengkap" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-secondary">NISN</label>
                                <input type="number" name="nisn" class="form-control form-control-lg bg-light" placeholder="Nomor Induk Siswa Nasional" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-secondary">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control form-control-lg bg-light" placeholder="Contoh: SMPN 1 Jakarta" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-secondary">No. WhatsApp</label>
                                <input type="text" name="nomor_hp" class="form-control form-control-lg bg-light" placeholder="08xxxxxxxxxx" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-secondary">Alamat Lengkap</label>
                                <textarea name="alamat" class="form-control form-control-lg bg-light" rows="3" placeholder="Masukkan alamat domisili saat ini" required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-custom w-100 py-3 fw-bold fs-5 rounded-3">
                                    Kirim Data Pendaftaran <i class="fa-solid fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection