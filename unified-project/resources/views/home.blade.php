<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unified Project - Dashboard</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            color: white;
            margin-bottom: 40px;
        }
        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .header p {
            font-size: 1.1em;
            opacity: 0.9;
        }
        .header .identity {
            margin-top: 15px;
            padding: 15px;
            background: rgba(255,255,255,0.15);
            border-radius: 10px;
            display: inline-block;
            backdrop-filter: blur(5px);
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }
        .card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.2);
        }
        .card .icon {
            font-size: 2.5em;
            margin-bottom: 15px;
        }
        .card .module-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75em;
            font-weight: bold;
            color: white;
            margin-bottom: 10px;
        }
        .card h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 1.3em;
        }
        .card p {
            color: #666;
            font-size: 0.9em;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .card .btn {
            display: inline-block;
            padding: 10px 20px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 0.9em;
            font-weight: 600;
            transition: opacity 0.3s;
        }
        .card .btn:hover {
            opacity: 0.85;
        }
        .badge-html { background: #e44d26; }
        .badge-css { background: #264de4; }
        .badge-js { background: #f7df1e; color: #333; }
        .badge-php { background: #787cb5; }
        .badge-ajax { background: #4CAF50; }
        .badge-laravel1 { background: #ff2d20; }
        .badge-laravel2 { background: #f9322c; }
        .footer {
            text-align: center;
            color: rgba(255,255,255,0.8);
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📚 Laporan Praktikum Aplikasi Berbasis Platform</h1>
            <p>Unifikasi 7 Modul Pembelajaran dalam 1 Project Laravel</p>
            <div class="identity">
                <strong>Muhammad Rafiful Hana</strong> — 2311102227 — S1 IF-11-04
            </div>
        </div>

        <div class="grid">
            <!-- Modul 1: HTML -->
            <div class="card">
                <div class="icon">📝</div>
                <span class="module-badge badge-html">Modul 1 - HTML</span>
                <h3>Form Data Mahasiswa</h3>
                <p>Formulir pendataan mahasiswa menggunakan elemen HTML dasar seperti input, radio, checkbox, select, dan textarea.</p>
                <a href="{{ route('html.form') }}" class="btn">Buka Modul →</a>
            </div>

            <!-- Modul 2: CSS -->
            <div class="card">
                <div class="icon">🎨</div>
                <span class="module-badge badge-css">Modul 2 - CSS</span>
                <h3>Layout dengan Bootstrap</h3>
                <p>Layout halaman web responsif menggunakan Bootstrap 5 yang dikombinasikan dengan custom CSS untuk tampilan yang rapi.</p>
                <a href="{{ route('css.layout') }}" class="btn">Buka Modul →</a>
            </div>

            <!-- Modul 3: JavaScript -->
            <div class="card">
                <div class="icon">⚡</div>
                <span class="module-badge badge-js">Modul 3 - JavaScript</span>
                <h3>DOM Manipulation Interaktif</h3>
                <p>Implementasi JavaScript untuk manipulasi DOM, termasuk fungsi perhitungan, toggle alignment, dan perubahan warna.</p>
                <a href="{{ route('js.interaktif') }}" class="btn">Buka Modul →</a>
            </div>

            <!-- Modul 4: PHP -->
            <div class="card">
                <div class="icon">🔐</div>
                <span class="module-badge badge-php">Modul 4 - PHP</span>
                <h3>Login/Register (Session)</h3>
                <p>Sistem autentikasi sederhana berbasis session PHP dengan fitur register, login, dan logout tanpa database.</p>
                <a href="{{ route('php.login') }}" class="btn">Buka Modul →</a>
            </div>

            <!-- Modul 5: AJAX -->
            <div class="card">
                <div class="icon">🔄</div>
                <span class="module-badge badge-ajax">Modul 5 - AJAX</span>
                <h3>Web Service dengan AJAX</h3>
                <p>Komunikasi asinkron antara client dan server menggunakan jQuery AJAX tanpa reload halaman.</p>
                <a href="{{ route('ajax.index') }}" class="btn">Buka Modul →</a>
            </div>

            <!-- Modul 6: Laravel 1 -->
            <div class="card">
                <div class="icon">🚀</div>
                <span class="module-badge badge-laravel1">Modul 6 - Laravel 1</span>
                <h3>Controller & Blade Template</h3>
                <p>Pengenalan Laravel: Controller untuk mengelola data dan Blade template engine untuk menampilkan view dinamis.</p>
                <a href="{{ route('laravel1.lat1') }}" class="btn">Buka Modul →</a>
            </div>

            <!-- Modul 7: Laravel 2 -->
            <div class="card">
                <div class="icon">🗄️</div>
                <span class="module-badge badge-laravel2">Modul 7 - Laravel 2</span>
                <h3>Auth dengan Database</h3>
                <p>Sistem autentikasi Laravel menggunakan Eloquent ORM, dengan validasi form, hashing password, dan session management.</p>
                <a href="{{ route('laravel2.login') }}" class="btn">Buka Modul →</a>
            </div>
        </div>

        <div class="footer">
            <p>© 2026 Muhammad Rafiful Hana — Program Studi S1 Informatika — Telkom University Purwokerto</p>
        </div>
    </div>
</body>
</html>