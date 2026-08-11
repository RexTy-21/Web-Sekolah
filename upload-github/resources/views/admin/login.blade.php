<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SMA Bintang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body { background-color: #0a1e46; display: flex; align-items: center; justify-content: center; height: 100vh; }
        .login-card { background: white; padding: 40px; border-radius: 10px; width: 100%; max-width: 400px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
    </style>
</head>
<body>

    <div class="login-card text-center">
        <i class="fa-solid fa-school-flag fs-1 text-primary mb-3"></i>
        <h3 class="fw-bold mb-4" style="color: #0a1e46;">Login Admin</h3>

        <!-- Muncul jika email/password salah -->
        @if($errors->any())
            <div class="alert alert-danger py-2">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="mb-3 text-start">
                <label class="form-label fw-bold">Email</label>
                <input type="email" name="email" class="form-control" placeholder="admin@sekolah.com" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="mb-4 text-start">
                <label class="form-label fw-bold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 fw-bold py-2">Masuk <i class="fa-solid fa-right-to-bracket ms-2"></i></button>
        </form>
        <a href="/" class="d-block mt-3 text-muted text-decoration-none small"><i class="fa-solid fa-arrow-left me-1"></i> Kembali ke Beranda</a>
    </div>

</body>
</html>