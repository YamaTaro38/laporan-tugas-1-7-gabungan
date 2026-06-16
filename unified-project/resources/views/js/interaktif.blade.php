<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Interaktif - JS Module</title>
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
        .js-demo { background: white; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin-top: 20px; }
        button { margin: 5px; }
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

                <div id="main-content" class="col-6">
                    <h3>Selamat Datang</h3>
                    <p>Ini adalah area konten utama dengan JavaScript interaktif.</p>
                    <p>Klik tombol di bawah untuk melihat efek JavaScript:</p>

                    <button class="btn btn-primary" onclick="toggleAlignment()">Ubah Alignment</button>
                    <button class="btn btn-warning" onclick="toggleBackground()">Ubah Warna Sidebar</button>
                    <button class="btn btn-info" onclick="hitungGanjil()">Hitung Jumlah Ganjil</button>

                    <hr>
                    <h5>Demo: Hitung Jumlah Bilangan Ganjil</h5>
                    <div class="row">
                        <div class="col">
                            <label>Nilai Min:</label>
                            <input type="number" id="minVal" class="form-control" value="1">
                        </div>
                        <div class="col">
                            <label>Nilai Max:</label>
                            <input type="number" id="maxVal" class="form-control" value="10">
                        </div>
                    </div>
                    <div id="result-sum" class="mt-2 p-2 bg-light rounded"></div>
                </div>

                <div class="col-3">
                    <div id="sidebar-box" class="sidebar-box"></div>
                </div>
            </div>
        </div>

        <div class="js-demo">
            <h5>🔧 Penjelasan Fungsi JavaScript:</h5>
            <ul>
                <li><strong>sumOddValues(min, max):</strong> Menghitung jumlah bilangan ganjil dari rentang tertentu</li>
                <li><strong>toggleAlignment():</strong> Mengubah perataan teks (kiri/tengah/kanan) pada area konten</li>
                <li><strong>toggleBackground():</strong> Mengubah warna sidebar antara abu-abu dan kuning</li>
            </ul>
        </div>
    </div>

    <script>
        function sumOddValues(min, max) {
            let sum = 0;
            for (let i = min; i <= max; i++) {
                if (i % 2 !== 0) {
                    sum += i;
                }
            }
            return sum;
        }

        function toggleAlignment() {
            const content = document.getElementById('main-content');
            content.style.textAlign = (content.style.textAlign === 'center') ? 'right' : 'center';
        }

        function toggleBackground() {
            const box = document.getElementById('sidebar-box');
            const originalColor = '#808080';
            box.style.backgroundColor = (box.style.backgroundColor === 'rgb(128, 128, 128)' || box.style.backgroundColor === '') ? '#ffcc00' : originalColor;
        }

        function hitungGanjil() {
            const min = parseInt(document.getElementById('minVal').value) || 1;
            const max = parseInt(document.getElementById('maxVal').value) || 10;
            const result = sumOddValues(min, max);
            document.getElementById('result-sum').innerHTML = 
                `<strong>Hasil:</strong> Jumlah bilangan ganjil dari ${min} s/d ${max} adalah <span class="text-primary fw-bold fs-4">${result}</span>`;
        }

        // Auto calculate on page load
        window.onload = function() {
            hitungGanjil();
        };
    </script>
</body>
</html>