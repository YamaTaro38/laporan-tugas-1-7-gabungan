<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laravel Auth Module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; justify-content: center; align-items: center; }
        .login-container { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.15); width: 400px; }
        .back-link { color: #667eea; text-decoration: none; font-weight: 600; display: block; text-align: center; margin-top: 15px; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center mb-4">🗄️ Login</h2>
        <p class="text-center text-muted">Modul 7 - Laravel Auth dengan Eloquent</p>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p class="mb-0">{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('laravel2.auth') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-bold">Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn" style="background: linear-gradient(135deg, #667eea, #764ba2); color: white; width: 100%;">Login</button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('laravel2.registration') }}" style="color: #667eea;">Belum punya akun? Register</a>
        </div>
        <a href="{{ route('home') }}" class="back-link">← Kembali ke Dashboard</a>
    </div>
</body>
</html>