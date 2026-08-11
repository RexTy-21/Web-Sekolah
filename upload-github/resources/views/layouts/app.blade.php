<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAN 1 MAJALAYA</title>
    <!-- Load Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Load FontAwesome (Ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        :root {
            --biru-tua: #0a1e46;
            --biru-muda: #3498db;
        }
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar-custom { background-color: var(--biru-tua); }
        .navbar-custom .nav-link, .navbar-custom .navbar-brand { color: #ffffff !important; }
        .navbar-custom .nav-link:hover { color: var(--biru-muda) !important; }
        .btn-custom { background-color: var(--biru-muda); color: white; transition: 0.3s; }
        .btn-custom:hover { background-color: #2980b9; color: white; }
        footer { background-color: var(--biru-tua); color: white; }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Navbar Modern -->
    <nav class="navbar navbar-expand-lg navbar-custom py-3 shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/"><i class="fa-solid fa-school me-2"></i>SMAN 1 MAJALAYA</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-semibold">
                    <li class="nav-item"><a class="nav-link px-3" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/ppdb">PPDB</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/galeri">Galeri</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-4 mt-5 text-center">
        <div class="container">
            <p class="mb-0">&copy; 2026 SMAN 1 MAJALAYA.</p>
        </div>
    </footer>

    <!-- Load Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>