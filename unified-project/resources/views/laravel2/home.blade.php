<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Laravel Auth Module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; justify-content: center; align-items: center; }
        .home-container { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.15); width: 500px; text-align: center; }
        .back-link { color: #667eea; text-decoration: none; font-weight: 600; display: block; text-align: center; margin-top: 20px; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="home-container">
        <h2 class="text-success">✅ Selamat Datang!</h2>
        <p>Anda berhasil login sebagai:</p>
        <h3 class="text-primary">{{ $user->name }}</h3>
        <p>Email: <strong>{{ $user->email }}</strong></p>
        <hr>
        <p class="text-muted">Modul 7 - Laravel Auth menggunakan Eloquent ORM dengan database SQLite</p>
        <a href="{{ route('laravel2.logout') }}" class="btn btn-danger">Logout</a>
        <a href="{{ route('home') }}" class="back-link">← Kembali ke Dashboard</a>
    </div>
</body>
</html>