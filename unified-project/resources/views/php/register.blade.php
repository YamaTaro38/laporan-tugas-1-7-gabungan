<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register - PHP Module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; justify-content: center; align-items: center; }
        .container-register { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.15); width: 400px; }
        .back-link { color: #667eea; text-decoration: none; font-weight: 600; display: block; text-align: center; margin-top: 15px; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container-register">
        <h2 class="text-center mb-4">📝 Halaman Register</h2>
        <p class="text-center text-muted">Modul 4 - PHP Session-based Auth</p>
        
        @if (!empty($message))
            <div class="alert {{ $messageClass === 'success' ? 'alert-success' : 'alert-danger' }} text-center">
                {{ $message }}
            </div>
        @endif
        
        <form method="POST" action="{{ route('php.register') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-bold">Username:</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="register" class="btn" style="background: linear-gradient(135deg, #667eea, #764ba2); color: white; width: 100%;">Send</button>
        </form>
        
        <div class="text-center mt-3">
            <a href="{{ route('php.login') }}" style="color: #667eea;">Kembali ke Halaman Login</a>
        </div>
        <a href="{{ route('home') }}" class="back-link">← Kembali ke Dashboard</a>
    </div>
</body>
</html>