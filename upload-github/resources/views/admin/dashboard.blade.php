<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard - Admin SMA Bintang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body { background-color: #f4f6f9; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .sidebar { background-color: #0a1e46; min-height: 100vh; color: white; position: fixed; width: 250px; top: 0; left: 0; }
        .sidebar .nav-link { color: rgba(255,255,255,0.75); padding: 12px 20px; font-weight: 600; border-radius: 6px; margin-bottom: 5px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { background-color: #3498db; color: white; }
        .main-content { margin-left: 250px; padding: 30px; }
        @media (max-width: 768px) {
            .sidebar { width: 100%; position: relative; min-height: auto; }
            .main-content { margin-left: 0; }
        }
    </style>
</head>
<body>

    <!-- Sidebar Navigasi -->
    <div class="sidebar p-3 shadow">
        <h4 class="fw-bold text-center py-3 border-bottom border-light border-opacity-25 mb-4">
            <i class="fa-solid fa-gauge-high me-2 text-info"></i> Panel Admin
        </h4>
        <ul class="nav nav-pills flex-column mb-auto" id="adminTab" role="tablist">
            <li class="nav-item mb-2">
                <button class="nav-link active w-100 text-start" id="ppdb-tab" data-bs-toggle="tab" data-bs-target="#ppdb-pane" type="button" role="tab">
                    <i class="fa-solid fa-users-line me-2"></i> Data PPDB
                </button>
            </li>
            <li class="nav-item mb-2">
                <button class="nav-link w-100 text-start" id="galeri-tab" data-bs-toggle="tab" data-bs-target="#galeri-pane" type="button" role="tab">
                    <i class="fa-solid fa-images me-2"></i> Kelola Galeri
                </button>
            </li>
        </ul>
        <hr class="border-light border-opacity-25 my-4">
        <div class="d-grid gap-2">
            <a href="/" target="_blank" class="btn btn-outline-light btn-sm fw-semibold"><i class="fa-solid fa-globe me-2"></i> Lihat Web Utama</a>
            <a href="/logout" class="btn btn-danger btn-sm fw-semibold"><i class="fa-solid fa-power-off me-2"></i> Logout</a>
        </div>
    </div>

    <!-- Konten Utama -->
    <div class="main-content">
        <div class="tab-content" id="adminTabContent">
            
            <!-- TAB 1: DATA PPDB -->
            <div class="tab-pane fade show active" id="ppdb-pane" role="tabpanel">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="fw-bold text-dark mb-0">Manajemen PPDB Siswa Baru</h3>
                        <p class="text-muted small">Daftar calon siswa yang masuk melalui formulir pendaftaran web.</p>
                    </div>
                    <span class="badge bg-primary fs-6 px-3 py-2 shadow-sm">Total Pendaftar: {{ $pendaftar->count() }}</span>
                </div>

                @if(session('sukses'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('sukses') }} <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="py-3 px-3">No</th>
                                        <th class="py-3">Nama Lengkap</th>
                                        <th class="py-3">NISN</th>
                                        <th class="py-3">Asal Sekolah</th>
                                        <th class="py-3">No. WhatsApp</th>
                                        <th class="py-3 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($pendaftar as $index => $siswa)
                                    <tr>
                                        <td class="px-3">{{ $index + 1 }}</td>
                                        <td class="fw-bold text-dark">{{ $siswa->nama_lengkap }}</td>
                                        <td>{{ $siswa->nisn }}</td>
                                        <td>{{ $siswa->asal_sekolah }}</td>
                                        <td><a href="https://wa.me/{{ $siswa->nomor_hp }}" target="_blank" class="text-decoration-none fw-semibold text-success"><i class="fa-brands fa-whatsapp me-1"></i> {{ $siswa->nomor_hp }}</a></td>
                                        <td class="text-center">
                                            <form action="/admin/pendaftar/{{ $siswa->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger px-2"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-5">Belum ada data pendaftar masuk.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 2: KELOLA GALERI -->
            <div class="tab-pane fade" id="galeri-pane" role="tabpanel">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="fw-bold text-dark mb-0">Manajemen Foto Galeri</h3>
                        <p class="text-muted small">Tambah atau hapus foto kegiatan sekolah yang tampil di halaman publik.</p>
                    </div>
                    <button class="btn btn-primary fw-semibold shadow-sm" data-bs-toggle="modal" data-bs-target="#modalTambahFoto">
                        <i class="fa-solid fa-plus me-2"></i> Upload Foto Baru
                    </button>
                </div>

                @if(session('sukses_galeri'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('sukses_galeri') }} <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <!-- Grid Galeri di Admin -->
                <div class="row g-4">
                    @forelse($galeri as $item)
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100 rounded-3 overflow-hidden">
                            <img src="{{ asset($item->foto) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Foto Galeri">
                            <div class="card-body">
                                <h5 class="fw-bold text-dark">{{ $item->judul }}</h5>
                                <p class="text-muted small mb-3">{{ $item->deskripsi }}</p>
                                <form action="/admin/galeri/{{ $item->id }}" method="POST" onsubmit="return confirm('Hapus foto ini dari galeri?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger w-100 fw-semibold"><i class="fa-solid fa-trash me-1"></i> Hapus Foto</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center text-muted py-5">
                        <p class="fs-5">Belum ada foto galeri yang diunggah.</p>
                    </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>

    <!-- MODAL POPUP UPLOAD FOTO -->
    <div class="modal fade" id="modalTambahFoto" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-bold"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Upload Foto Galeri</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form action="/admin/galeri" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Judul Kegiatan</label>
                            <input type="text" name="judul" class="form-control" placeholder="Contoh: Upacara Hari Pahlawan" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Keterangan / Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="3" placeholder="Jelaskan secara singkat kegiatan di foto ini..." required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Pilih File Foto (JPG/PNG)</label>
                            <input type="file" name="foto" class="form-control" accept="image/*" required>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary btn-sm px-4 fw-bold">Simpan & Unggah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>