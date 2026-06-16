<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 40px 0; }
        .card-latihan { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.15); }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('home') }}" class="btn btn-sm btn-light mb-3">← Kembali ke Dashboard</a>
        <div class="card-latihan">
            <h2 class="mb-4">🚀 {{ $title }}</h2>
            <p class="text-muted">Data mahasiswa yang dikirim dari Controller menggunakan array.</p>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Asal</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($daf_mhs as $mhs)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $mhs['nama'] }}</td>
                        <td>{{ $mhs['asal'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <hr>
            <p class="text-muted">View ini menggunakan Blade directive dan variabel $title untuk judul halaman.</p>
            <a href="{{ route('laravel1.lat1') }}" class="btn btn-secondary">← Kembali ke Latihan 1</a>
        </div>
    </div>
</body>
</html>