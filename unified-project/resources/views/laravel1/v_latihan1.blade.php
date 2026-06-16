<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1 - Laravel Module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; justify-content: center; align-items: center; }
        .card-latihan { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.15); width: 500px; }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('home') }}" class="btn btn-sm btn-light mb-3">← Kembali ke Dashboard</a>
        <div class="card-latihan">
            <h2 class="mb-4">🚀 Latihan 1 - Controller & Blade</h2>
            <p><strong>Nama :</strong> {{ $nama }}</p>
            <p><strong>Asal :</strong> {{ $asal }}</p>
            <hr>
            <p class="text-muted">Data ini dikirim dari LatihanController ke view menggunakan Blade template engine.</p>
            <a href="{{ route('laravel1.lat2') }}" class="btn" style="background: linear-gradient(135deg, #667eea, #764ba2); color: white;">Lihat Latihan 2 →</a>
        </div>
    </div>
</body>
</html>