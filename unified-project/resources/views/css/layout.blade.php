<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout CSS - Bootstrap Module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; padding: 20px; }
        .border-box { 
            border: 1px solid #000; 
            min-height: 100px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            background: #fff; 
        }
        .gray-box { background-color: #808080; width: 100%; height: 100%; min-height: 100px; border: 1px solid #000; }
        .nav-box { min-height: 400px; align-items: flex-start; }
        .sidebar-box { width: 100%; height: 150px; background-color: #808080; border: 1px solid #000; }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('home') }}" class="btn btn-sm btn-outline-secondary mb-3">← Kembali ke Dashboard</a>
        <div class="container border border-dark p-4 bg-white">
            <div class="row g-3 mb-4">
                <div class="col-3">
                    <div class="border-box">
                        <img src="https://via.placeholder.com/100x80?text=Logo" alt="Logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-9">
                    <div class="gray-box"></div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-3">
                    <nav class="nav flex-column border-box nav-box p-3">
                        <a class="nav-link text-dark fw-bold" href="#">Beranda</a>
                        <a class="nav-link text-dark" href="#">Profil</a>
                        <a class="nav-link text-dark" href="#">Data Mahasiswa</a>
                        <a class="nav-link text-dark" href="#">Kontak</a>
                    </nav>
                </div>

                <div class="col-6">
                    <h3>Selamat Datang</h3>
                    <p>Ini adalah area konten utama.</p>
                    <p>Layout ini menggunakan Bootstrap 5 Grid System dengan kombinasi custom CSS.</p>
                    <hr>
                    <h5>Penjelasan Modul CSS:</h5>
                    <ul>
                        <li><strong>Bootstrap Grid:</strong> Menggunakan class row dan col-* untuk layout responsif</li>
                        <li><strong>Border Box:</strong> Custom CSS class untuk container dengan border</li>
                        <li><strong>Gray Box:</strong> Elemen dekoratif dengan background abu-abu</li>
                        <li><strong>Sidebar:</strong> Navigasi vertikal menggunakan Bootstrap Nav</li>
                    </ul>
                </div>

                <div class="col-3">
                    <div class="sidebar-box"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>