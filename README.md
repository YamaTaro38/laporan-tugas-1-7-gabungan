<h3 align="center">LAPORAN PRAKTIKUM</h3>
<h3 align="center">APLIKASI BERBASIS PLATFORM</h3>
<h3 align="center">Laporan Gabungan Tugas 1 - 7</h3>

<br>
<p align="center">
  <img src="https://raw.githubusercontent.com/Aplikasi-Berbasis-Platform-S1IF-11-04/Pertemuan-9-Mobile/refs/heads/main/Muhammad%20Rafiful%20Hana%20-%202311102227/source_code/output/logo%20telkom%20university.png" width="150"/>
</p>
<br>

<p align="center">
  <strong>Muhammad Rafiful Hana</strong>
  <br>
  2311102227
  <br>
  S1 IF-11-04
</p>

<br>

<p align="center">
Dosen Pengampu:
<br>
Cahyo Prihantoro, S.Kom., M.Eng
</p>

<br>

<p align="center">
PROGRAM STUDI S1 INFORMATIKA
<br>
FAKULTAS INFORMATIKA
<br>
TELKOM UNIVERSITY PURWOKERTO
<br>
2026
</p>

---

## Daftar Isi

1. [Deskripsi Umum](#deskripsi-umum)
2. [Struktur Direktori](#struktur-direktori)
3. [Project 1: HTML - Form Data Mahasiswa](#project-1-html--form-data-mahasiswa)
4. [Project 2: CSS - Layout Bootstrap & Custom CSS](#project-2-css--layout-bootstrap--custom-css)
5. [Project 3: JavaScript - DOM Manipulation Interaktif](#project-3-javascript--dom-manipulation-interaktif)
6. [Project 4: PHP - Login / Register / Logout (Session)](#project-4-php--login--register--logout-session)
7. [Project 5: AJAX - Web Service dengan jQuery](#project-5-ajax--web-service-dengan-jquery)
8. [Project 6: Laravel 1 - Controller & Blade Template](#project-6-laravel-1--controller--blade-template)
9. [Project 7: Laravel 2 - Auth dengan Database (Eloquent)](#project-7-laravel-2--auth-dengan-database-eloquent)
10. [Project Unifikasi: Laravel Unified](#project-unifikasi-laravel-unified)
11. [Kesimpulan](#kesimpulan)

---

## Deskripsi Umum

Laporan ini merupakan kumpulan laporan praktikum dari mata kuliah **Aplikasi Berbasis Platform** yang terdiri dari **7 project** yang masing-masing membahas teknologi web yang berbeda secara bertahap, mulai dari dasar HTML hingga framework Laravel dengan autentikasi database. Setiap project diimplementasikan secara terpisah namun saling berkesinambungan dalam mempelajari stack teknologi web modern.

Seluruh 7 project juga diintegrasikan ke dalam satu aplikasi Laravel tunggal pada folder `unified-project/`.

### Ringkasan 7 Project

| No | Project | Teknologi | Lokasi Folder |
|----|---------|-----------|---------------|
| 1 | Form Data Mahasiswa | HTML | `TUTORIAL_HTML_2311102227_Muhammad Rafiful Hana.html` |
| 2 | Layout Bootstrap & CSS | CSS + Bootstrap | `TUTORIAL_CSS_2311102227_Muhammad Rafiful Hana/` |
| 3 | DOM Manipulation | JavaScript | `TUTORIAL_JS_2311102227_Muhammad Rafiful Hana/` |
| 4 | Login/Register/Logout | PHP (Session) | `tugas_php/` |
| 5 | Web Service AJAX | jQuery + PHP | `tugas_ajax/` |
| 6 | Controller & Blade | Laravel 1 | `Tutorial_Laravel1_2311102227_Muhammad Rafiful Hana/` |
| 7 | Auth dengan Database | Laravel 2 | `Tutorial_Laravel2_2311102227_Muhammad Rafiful Hana/` |
| **+** | **Unifikasi Laravel** | **Laravel (Gabungan)** | **`unified-project/`** |

---

## Struktur Direktori

```
Laporan Tugas 1-7 Gabungan/
|
|-- TUTORIAL_HTML_2311102227_Muhammad Rafiful Hana.html   (Project 1: HTML)
|
|-- TUTORIAL_CSS_2311102227_Muhammad Rafiful Hana/        (Project 2: CSS)
|   |-- index.html
|   |-- css/bootstrap.min.css
|   |-- css/style.css
|   |-- img/logo.png
|
|-- TUTORIAL_JS_2311102227_Muhammad Rafiful Hana/         (Project 3: JavaScript)
|   |-- index.html
|   |-- css/bootstrap.min.css
|   |-- css/style.css
|   |-- img/logo.png
|   |-- js/script.js
|
|-- tugas_php/                                             (Project 4: PHP Auth)
|   |-- login.php
|   |-- register.php
|   |-- logout.php
|
|-- tugas_ajax/                                            (Project 5: AJAX)
|   |-- index.html
|   |-- ajax.js
|   |-- reply.php
|
|-- Tutorial_Laravel1_2311102227_Muhammad Rafiful Hana/    (Project 6: Laravel 1)
|   |-- web-framework-1/
|
|-- Tutorial_Laravel2_2311102227_Muhammad Rafiful Hana/    (Project 7: Laravel 2)
|   |-- web-framework-2/
|
|-- unified-project/                                       (Project Unifikasi)
|   |-- app/Http/Controllers/
|   |-- resources/views/
|   |-- routes/web.php
|
|-- images/                                                (Gambar Output)
|   |-- Projects.png                                       (Overview seluruh project)
|   |-- Project 1.png                                      (Output Project 1: HTML)
|   |-- Project 2.png                                      (Output Project 2: CSS)
|   |-- Project 3.png                                      (Output Project 3: JS - Tampilan Awal)
|   |-- Project 3 - Hitung Jumlah Ganjil.png               (Output Project 3: JS - Fungsi Ganjil)
|   |-- Project 3 - Ubah Alignment.png                     (Output Project 3: JS - Toggle Alignment)
|   |-- Project 3 - Ubah Warna Sidebar.png                 (Output Project 3: JS - Toggle Warna)
|   |-- Project 4 - Register.png                           (Output Project 4: PHP - Register)
|   |-- Project 4 - Login.png                              (Output Project 4: PHP - Login)
|   |-- Project 4 - Logged In.png                          (Output Project 4: PHP - Login Berhasil)
|   |-- Project 5.png                                      (Output Project 5: AJAX - Tampilan Awal)
|   |-- Project 5 - Shout.png                              (Output Project 5: AJAX - Pesan Terkirim)
|   |-- Project 6 - Latihan 1.png                          (Output Project 6: Laravel 1 - Latihan 1)
|   |-- Project 6 - Latihan 2.png                          (Output Project 6: Laravel 1 - Latihan 2)
|   |-- Project 7 - Login.png                              (Output Project 7: Laravel 2 - Login)
|   |-- Project 7 - Register.png                           (Output Project 7: Laravel 2 - Register)
|   |-- Project 7 - Logged In.png                          (Output Project 7: Laravel 2 - Home)
|
|-- README.md                                              (Laporan ini)
```

---

## Project 1: HTML - Form Data Mahasiswa

### Deskripsi

Project pertama berupa implementasi elemen-elemen dasar **HTML** untuk membuat **formulir pendataan mahasiswa**. Form ini mencakup berbagai jenis input HTML standar seperti text, date, radio button, checkbox, select dropdown, dan textarea.

### Tujuan Pembelajaran

- Memahami struktur dasar dokumen HTML
- Mengenal berbagai jenis elemen form HTML
- Mampu membuat form dengan input data yang beragam
- Memahami metode pengiriman data (POST/GET)

### File yang Digunakan

| File | Fungsi |
|------|--------|
| `TUTORIAL_HTML_2311102227_Muhammad Rafiful Hana.html` | File HTML tunggal berisi form data mahasiswa |

### Elemen HTML yang Dipelajari

| Elemen | Kegunaan | Nama Attribute |
|--------|----------|----------------|
| `<input type="text">` | Input teks untuk NIM dan Nama | `name` |
| `<input type="date">` | Input tanggal lahir | `name="tgl_lahir"` |
| `<input type="radio">` | Pilihan tunggal untuk Jenis Kelamin | `name="jk"` |
| `<textarea>` | Input multiline untuk Alamat | `rows`, `cols` |
| `<select>` + `<option>` | Dropdown pilihan tempat tinggal | `name="tinggal"` |
| `<input type="checkbox">` | Pilihan ganda untuk Hobi | `name="hobi[]"` |
| `<button type="submit">` | Tombol kirim form | - |
| `<button type="reset">` | Tombol reset form | - |

### Kode Sumber Lengkap

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
</head>
<body>

    <h2>Data Mahasiswa</h2>

    <form action="#" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td>: <input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" size="40"></td>
            </tr>
            <tr>
                <td>Tgl Lahir (dd-mm-yyyy)</td>
                <td>: <input type="date" name="tgl_lahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:
                    <input type="radio" name="jk" value="Laki-laki"> Laki-Laki
                    <input type="radio" name="jk" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td valign="top">Alamat di Bandung</td>
                <td>: <textarea name="alamat" rows="4" cols="30"></textarea></td>
            </tr>
            <tr>
                <td>Tinggal di</td>
                <td>:
                    <select name="tinggal">
                        <option value="">--pilih--</option>
                        <option value="Kos">Kos/kontrakan</option>
                        <option value="Saudara">Rumah saudara</option>
                        <option value="Orang Tua">Rumah orang tua</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td valign="top">Pilih 2 hobi yang paling disukai</td>
                <td>:
                    <br>
                    <input type="checkbox" name="hobi[]" value="Science"> Science <br>
                    <input type="checkbox" name="hobi[]" value="Technology"> Technology <br>
                    <input type="checkbox" name="hobi[]" value="Art"> Art <br>
                    <input type="checkbox" name="hobi[]" value="Sport"> Sport
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <br>
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
```

### Penjelasan Konsep

- **`name` attribute**: Penting untuk pengiriman data ke server. Server menggunakan name sebagai key untuk mengambil nilai.
- **Radio button**: Semua radio button dengan `name` yang sama hanya bisa dipilih satu.
- **Checkbox `hobi[]`**: Tanda `[]` pada nama agar PHP menganggapnya sebagai array (bisa pilih lebih dari satu).
- **`method="post"`**: Data dikirim melalui body HTTP (lebih aman untuk data sensitif).
- **`valign="top"`**: Mengatur teks rata atas pada sel tabel.
- **`<select>`**: Elemen dropdown dengan `<option>` sebagai pilihan.

### Output Program

Halaman form data mahasiswa ditampilkan di browser dengan struktur tabel. Form berisi field NIM, Nama, Tanggal Lahir (date picker), Jenis Kelamin (radio button), Alamat (textarea), Tempat Tinggal (dropdown), dan Hobi (checkbox). Terdapat tombol Submit dan Reset di bagian bawah form.

#### Output 1 - Form Data Mahasiswa

![Form Data Mahasiswa](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%201.png)

Tampilan halaman form data mahasiswa di browser. Form berisi field NIM, Nama, Tanggal Lahir, Jenis Kelamin, Alamat, Tempat Tinggal, dan Hobi dengan tombol Submit dan Reset.

---

## Project 2: CSS - Layout Bootstrap & Custom CSS

### Deskripsi

Project kedua berupa implementasi **CSS** menggunakan framework **Bootstrap** untuk membuat layout halaman web yang responsif, dikombinasikan dengan **custom CSS** untuk kustomisasi tambahan. Halaman memiliki struktur header (logo + banner abu-abu), sidebar navigasi (kiri), konten utama (tengah), dan sidebar kanan.

### Tujuan Pembelajaran

- Memahami sistem grid Bootstrap (row, col-*)
- Mampu menggunakan komponen Bootstrap (Nav, Container)
- Mampu mengkombinasikan Bootstrap dengan CSS kustom
- Memahami konsep layout responsif

### Struktur File

```
TUTORIAL_CSS_2311102227_Muhammad Rafiful Hana/
|-- index.html              (Halaman utama dengan layout Bootstrap)
|-- css/
|   |-- bootstrap.min.css   (CSS Framework Bootstrap)
|   |-- style.css           (Custom CSS)
|-- img/
    |-- logo.png            (Gambar logo)
```

### File yang Digunakan

| File | Fungsi |
|------|--------|
| `index.html` | Halaman utama dengan layout grid Bootstrap |
| `css/bootstrap.min.css` | Library Bootstrap CSS |
| `css/style.css` | Custom CSS untuk border-box, gray-box, nav-box, sidebar-box |
| `img/logo.png` | Gambar logo yang ditampilkan di header |

### Kode Sumber

#### index.html (Layout Bootstrap)

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Layout Lokal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="container border border-dark p-4 bg-white">
    <!-- Header: Logo + Banner -->
    <div class="row g-3 mb-4">
        <div class="col-3">
            <div class="border-box">
                <img src="img/logo.png" alt="Logo" class="img-fluid">
            </div>
        </div>
        <div class="col-9">
            <div class="gray-box"></div>
        </div>
    </div>

    <!-- Body: Sidebar + Content + Right Sidebar -->
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
        </div>

        <div class="col-3">
            <div class="sidebar-box"></div>
        </div>
    </div>
</div>

</body>
</html>
```

#### css/style.css (Custom CSS)

```css
body { 
    background-color: #f8f9fa; 
    padding: 20px; 
}

.border-box { 
    border: 1px solid #000; 
    min-height: 100px; 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    background: #fff; 
}

.gray-box { 
    background-color: #808080; 
    width: 100%; 
    height: 100%; 
    border: 1px solid #000; 
}

.nav-box { 
    min-height: 400px; 
    align-items: flex-start; 
}

.sidebar-box { 
    width: 100%; 
    height: 150px; 
    background-color: #808080; 
    border: 1px solid #000; 
}
```

### Komponen Bootstrap yang Digunakan

| Class | Fungsi |
|-------|--------|
| `.container` | Pembungkus utama dengan padding otomatis |
| `.row` + `.g-3` | Baris grid dengan gap 3 (16px) |
| `.col-3`, `.col-6`, `.col-9` | Pembagian kolom proporsional (25%, 50%, 75%) |
| `.border`, `.border-dark` | Border dengan warna gelap |
| `.p-4` | Padding 4 (1.5rem) |
| `.bg-white` | Background putih |
| `.mb-4` | Margin bottom 4 (1.5rem) |
| `.nav`, `.nav-link` | Komponen navigasi |
| `.flex-column` | Flexbox arah vertikal |
| `.fw-bold` | Font weight bold |
| `.text-dark` | Warna teks gelap |
| `.img-fluid` | Gambar responsif (width 100%, height auto) |

### Penjelasan Layout

Layout menggunakan sistem grid Bootstrap 12 kolom:
- **Baris atas (header)**: Kolom kiri `col-3` untuk logo, kolom kanan `col-9` untuk banner abu-abu
- **Baris bawah (body)**: Kolom kiri `col-3` untuk navigasi, kolom tengah `col-6` untuk konten utama, kolom kanan `col-3` untuk sidebar

### Output Program

Halaman ditampilkan dengan layout 2 baris. Baris pertama berisi logo di kiri dan kotak abu-abu besar di kanan. Baris kedua berisi navigasi sidebar di kiri (Beranda, Profil, Data Mahasiswa, Kontak), area konten utama di tengah, dan kotak abu-abu sidebar di kanan. Seluruh elemen memiliki border hitam.

#### Output 1 - Layout Bootstrap

![Layout Bootstrap](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%202.png)

Tampilan layout halaman menggunakan Bootstrap Grid System dengan header (logo + banner), sidebar navigasi, konten utama, dan sidebar kanan.

---

## Project 3: JavaScript - DOM Manipulation Interaktif

### Deskripsi

Project ketiga mengembangkan halaman dari Project 2 dengan menambahkan **interaktivitas menggunakan JavaScript**. Fitur meliputi: fungsi perhitungan bilangan ganjil, toggle alignment teks pada konten, dan toggle warna sidebar.

### Tujuan Pembelajaran

- Memahami konsep DOM manipulation
- Mampu membuat fungsi JavaScript interaktif
- Memahami event handling (onclick)
- Mampu memanipulasi style elemen secara dinamis

### Struktur File

```
TUTORIAL_JS_2311102227_Muhammad Rafiful Hana/
|-- index.html              (Halaman dengan tombol interaktif)
|-- css/
|   |-- bootstrap.min.css
|   |-- style.css
|-- img/
|   |-- logo.png
|-- js/
    |-- script.js           (File JavaScript utama)
```

### File yang Digunakan

| File | Fungsi |
|------|--------|
| `index.html` | Halaman utama dengan tombol interaktif (onclick) |
| `js/script.js` | Tiga fungsi JavaScript: sumOddValues, toggleAlignment, toggleBackground |
| `css/bootstrap.min.css` | Library Bootstrap CSS |
| `css/style.css` | Custom CSS |
| `img/logo.png` | Gambar logo |

### Kode Sumber

#### index.html (Tombol Interaktif)

```html
<div id="main-content">
    <h3>Selamat Datang</h3>
    <p>Ini adalah area konten utama.</p>

    <button onclick="toggleAlignment()">Ubah Alignment</button>
    <button onclick="toggleBackground()">Ubah Warna Sidebar</button>
</div>

<div id="sidebar-box" class="sidebar-box"></div>

<script src="js/script.js"></script>
```

#### js/script.js

```javascript
function sumOddValues(min, max) {
    let sum = 0;
    for (let i = min; i <= max; i++) {
        if (i % 2 !== 0) {
            sum += i;
        }
    }
    console.log(`Hasil jumlah ganjil dari ${min} s/d ${max} adalah: ${sum}`);
    return sum;
}

function toggleAlignment() {
    const content = document.getElementById('main-content');
    content.style.textAlign = 
        (content.style.textAlign === 'center') ? 'right' : 'center';
}

function toggleBackground() {
    const box = document.getElementById('sidebar-box');
    const originalColor = '#808080';
    box.style.backgroundColor = 
        (box.style.backgroundColor === 'rgb(128, 128, 128)' || 
         box.style.backgroundColor === '') ? '#ffcc00' : originalColor;
}
```

### Penjelasan Fungsi

| Fungsi | Penjelasan |
|--------|------------|
| `sumOddValues(min, max)` | Menghitung jumlah bilangan ganjil dari `min` sampai `max` menggunakan loop `for` dan modulus operator (`% 2 !== 0`). Hasil ditampilkan di console. |
| `toggleAlignment()` | Mengubah `textAlign` elemen `#main-content` secara bergantian antara `center` dan `right` setiap kali tombol diklik. |
| `toggleBackground()` | Mengubah `backgroundColor` elemen `#sidebar-box` secara bergantian antara abu-abu (`#808080` / `rgb(128, 128, 128)`) dan kuning (`#ffcc00`) setiap kali tombol diklik. |

### Konsep DOM yang Dipelajari

- **`document.getElementById()`**: Mengakses elemen berdasarkan atribut ID
- **`.style.property`**: Mengubah properti CSS dari JavaScript secara langsung
- **`onclick`**: Event handler HTML untuk aksi saat tombol diklik
- **Ternary operator** (`? :`): Untuk logika kondisional singkat
- **`console.log()`**: Untuk debugging di browser console
- **Perbandingan string**: Membandingkan nilai style dengan string tertentu

### Output Program

Halaman ditampilkan dengan layout yang sama seperti Project 2, namun ditambahkan dua tombol di area konten utama: "Ubah Alignment" dan "Ubah Warna Sidebar". Tombol pertama mengubah perataan teks konten, tombol kedua mengubah warna sidebar kanan menjadi kuning. Di console browser, fungsi `sumOddValues()` menghitung jumlah bilangan ganjil.

#### Output 1 - Tampilan Awal

![Tampilan Awal JS](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%203.png)

Tampilan halaman JavaScript interaktif dengan tombol "Ubah Alignment" dan "Ubah Warna Sidebar".

#### Output 2 - Hitung Jumlah Ganjil

![Hitung Jumlah Ganjil](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%203%20-%20Hitung%20Jumlah%20Ganjil.png)

Hasil perhitungan jumlah bilangan ganjil yang ditampilkan di console browser.

#### Output 3 - Ubah Alignment

![Ubah Alignment](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%203%20-%20Ubah%20Alignment.png)

Perataan teks konten berubah setelah tombol "Ubah Alignment" diklik.

#### Output 4 - Ubah Warna Sidebar

![Ubah Warna Sidebar](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%203%20-%20Ubah%20Warna%20Sidebar.png)

Warna sidebar berubah dari abu-abu menjadi kuning setelah tombol "Ubah Warna Sidebar" diklik.

---

## Project 4: PHP - Login / Register / Logout (Session)

### Deskripsi

Project keempat berupa implementasi **sistem autentikasi sederhana** menggunakan **session PHP** tanpa database. Data user disimpan sementara di session selama browser aktif. Sistem terdiri dari tiga halaman: register, login, dan logout.

### Tujuan Pembelajaran

- Memahami konsep session dalam PHP
- Mampu membuat sistem registrasi user
- Mampu membuat sistem login dengan validasi
- Mampu mengelola session login/logout

### Struktur File

```
tugas_php/
|-- login.php       (Halaman login dengan form + validasi)
|-- register.php    (Halaman registrasi user baru)
|-- logout.php      (Script logout - session destroy)
```

### File yang Digunakan

| File | Fungsi |
|------|--------|
| `register.php` | Form registrasi + proses penyimpanan user ke session |
| `login.php` | Form login + validasi username/password dari session |
| `logout.php` | Menghapus session dan redirect ke login |

### Kode Sumber Lengkap

#### register.php

```php
<?php
session_start();

$message = "";

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    if (!empty($username) && !empty($password)) {
        $_SESSION['users'][$username] = $password;
        $message = "user is added";
    } else {
        $message = "Username dan password tidak boleh kosong!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Register</title>
</head>
<body>
    <div class="container">
        <h2>Halaman Register</h2>
        
        <?php if (!empty($message)): 
            $class = ($message == "user is added") ? "success" : "error";
        ?>
            <div class="message <?php echo $class; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" name="register">Send</button>
        </form>
        
        <div class="login-link">
            <a href="login.php">Kembali ke Halaman Login</a>
        </div>
    </div>
</body>
</html>
```

#### login.php

```php
<?php
session_start();

$message = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (isset($_SESSION['users'][$username])) {
        $saved_password = $_SESSION['users'][$username];
        
        if ($password == $saved_password) {
            $_SESSION['logged_in_user'] = $username;
            $message = "welcome " . $username;
        } else {
            $message = "wrong username/password";
        }
    } else {
        $message = "wrong username/password";
    }
}

if (isset($_SESSION['logged_in_user'])) {
    $message = "welcome " . $_SESSION['logged_in_user'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
</head>
<body>
    <div class="container">
        <h2>Halaman Login</h2>
        
        <?php if (!empty($message)): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
        
        <div class="register-link">
            <a href="register.php">Register</a>
        </div>
    </div>
</body>
</html>
```

#### logout.php

```php
<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>
```

### Alur Kerja Sistem

```
Register (register.php)
   | User mengisi username + password
   | Data disimpan di $_SESSION['users'][$username] = $password
   v
Login (login.php)
   | User memasukkan username + password
   | Dicek: isset($_SESSION['users'][$username]) ?
   | Jika ya: bandingkan $password == $saved_password
   | Jika cocok: $_SESSION['logged_in_user'] = $username
   | Tampilkan: "welcome [username]"
   v
Logout (logout.php)
   | session_destroy() -> menghapus semua data session
   | header("Location: login.php") -> redirect ke login
```

### Konsep PHP yang Dipelajari

| Konsep | Penjelasan |
|--------|------------|
| `session_start()` | Memulai atau melanjutkan session PHP. Harus dipanggil sebelum menggunakan session. |
| `$_SESSION` | Super global array untuk menyimpan data session di server |
| `$_POST` | Super global untuk mengambil data form dengan metode POST |
| `session_destroy()` | Menghapus semua data session yang aktif di server |
| `header("Location: ...")` | Fungsi PHP untuk redirect/forward ke halaman lain |
| `isset()` | Mengecek apakah variabel sudah diset dan tidak null |
| `trim()` | Menghapus spasi di awal dan akhir string |
| `htmlspecialchars()` | Mengamankan output dari serangan XSS (Cross-Site Scripting) |
| `$class = (...) ? "success" : "error"` | Operator ternary untuk pemilihan class CSS |

### Output Program

#### Output 1 - Halaman Register

![Halaman Register](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%204%20-%20Register.png)

Tampilan halaman registrasi user baru dengan form input username dan password, serta tombol "Send" untuk mengirim data.

#### Output 2 - Halaman Login

![Halaman Login](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%204%20-%20Login.png)

Tampilan halaman login dengan form input username dan password, serta tombol "Login" dan link "Register" di bagian bawah.

#### Output 3 - Login Berhasil

![Login Berhasil](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%204%20-%20Logged%20In.png)

Tampilan halaman setelah login berhasil, menampilkan pesan "welcome" dengan nama user yang sudah terautentikasi.

---

## Project 5: AJAX - Web Service dengan jQuery

### Deskripsi

Project kelima berupa implementasi **AJAX (Asynchronous JavaScript and XML)** menggunakan **jQuery** untuk berkomunikasi dengan server tanpa perlu me-reload halaman. Terdapat fitur "Shoutbox" sederhana di mana user bisa mengirim pesan dan response dari server ditampilkan secara real-time di halaman yang sama.

### Tujuan Pembelajaran

- Memahami konsep komunikasi asinkron client-server
- Mampu menggunakan jQuery AJAX untuk request HTTP
- Mampu menangani response dari server (success/error callback)
- Mampu meningkatkan user experience dengan real-time interaction

### Struktur File

```
tugas_ajax/
|-- index.html      (Halaman utama dengan form AJAX)
|-- ajax.js         (jQuery AJAX handler)
|-- reply.php       (Backend PHP untuk memproses pesan)
```

### File yang Digunakan

| File | Fungsi |
|------|--------|
| `index.html` | Halaman utama dengan form input pesan dan area response |
| `ajax.js` | File JavaScript dengan jQuery AJAX request ke server |
| `reply.php` | Backend PHP yang menerima pesan dan mengembalikan response |

### Kode Sumber Lengkap

#### index.html

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Web Service - AJAX</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; }
        .container { background: white; padding: 30px; border-radius: 10px; }
        #data { margin-top: 20px; padding: 15px; border: 1px solid #ddd; 
                 border-radius: 5px; min-height: 100px; background-color: #fafafa; }
        .message { padding: 10px; margin: 5px 0; background-color: #e3f2fd; 
                    border-left: 4px solid #2196F3; border-radius: 3px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Praktikum Web Service</h1>
        <h3 style="text-align:center">AJAX dengan jQuery</h3>
        
        <form id="form1">
            <div class="form-group">
                <input type="text" name="pesan" id="msg" 
                       placeholder="Masukkan pesan Anda..." />
                <input type="button" value="Shout!" id="shoutbutton" />
            </div>
        </form>
        
        <hr>
        <h4>Hasil Response dari Server:</h4>
        <div id="data"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="ajax.js"></script>
</body>
</html>
```

#### ajax.js (jQuery AJAX Handler)

```javascript
$(document).ready(function() {
    $("#shoutbutton").click(function() {
        var pesan = $("#msg").val();
        
        if (pesan.trim() === "") {
            $("#data").append(
                "<div class='message' style='background-color:#ffebee; " +
                "border-left-color:#f44336;'>Pesan kosong!</div>"
            );
            return;
        }
        
        $.ajax({
            type: "GET",
            url: "reply.php",
            data: $("#form1").serialize(),
            success: function(rsp) {
                $("#data").append("<div class='message'>" + rsp + "</div>");
                $("#msg").val("");
                $("#data").scrollTop($("#data")[0].scrollHeight);
            },
            error: function(rsp) {
                alert("Error: " + rsp.status + " - " + rsp.statusText);
            }
        });
    });
    
    // Enter key juga bisa mengirim pesan
    $("#msg").keypress(function(event) {
        if (event.which === 13) {
            event.preventDefault();
            $("#shoutbutton").click();
        }
    });
});
```

#### reply.php (Backend)

```php
<?php
if (isset($_GET["pesan"]) && !empty($_GET["pesan"])) {
    $pesan = htmlspecialchars($_GET["pesan"], ENT_QUOTES, 'UTF-8');
    echo "reply: " . $pesan;
} else {
    echo "Error: Tidak ada pesan yang diterima";
}
?>
```

### Alur Kerja AJAX

```
User ketik pesan -> Klik "Shout!" / Tekan Enter
        |
jQuery: $("#shoutbutton").click(function() { ... })
        | Validasi: pesan.trim() === "" ? Tampilkan error : Lanjut
        |
$.ajax({ type: "GET", url: "reply.php", data: serialize })
        |
HTTP GET request ke reply.php (TANPA reload halaman!)
        |
reply.php memproses: htmlspecialchars($pesan) -> echo "reply: ..."
        |
jQuery success callback -> $("#data").append(response)
        |
Pesan baru muncul di div #data tanpa refresh!
```

### Konsep AJAX yang Dipelajari

| Konsep | Penjelasan |
|--------|------------|
| `$(document).ready()` | Memastikan DOM sudah dimuat sebelum jQuery dijalankan |
| `$.ajax()` | Fungsi utama jQuery untuk melakukan AJAX request |
| `type: "GET"` | Metode HTTP request (bisa juga POST, PUT, DELETE) |
| `url` | Endpoint tujuan request di server |
| `data: serialize()` | Mengubah form data menjadi URL-encoded string |
| `success` | Callback function yang dipanggil jika request berhasil (status 200) |
| `error` | Callback function yang dipanggil jika request gagal |
| `preventDefault()` | Mencegah perilaku default browser (submit form / refresh) |
| `scrollTop()` | Menggulir div ke posisi paling bawah secara otomatis |
| `append()` | Menambahkan elemen baru ke dalam elemen yang ada tanpa menghapus yang lama |

### Output Program

#### Output 1 - Tampilan Awal

![AJAX Tampilan Awal](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%205.png)

Tampilan halaman AJAX Shoutbox dengan form input pesan dan tombol "Shout!" serta area response dari server.

#### Output 2 - Pesan Terkirim

![AJAX Pesan Terkirim](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%205%20-%20Shout.png)

Response dari server ditampilkan langsung di area "Hasil Response dari Server" secara real-time tanpa reload halaman. Setiap pesan baru ditambahkan di bawah pesan sebelumnya.

---

## Project 6: Laravel 1 - Controller & Blade Template

### Deskripsi

Project keenam merupakan pengenalan pertama terhadap **Laravel Framework**, berfokus pada konsep dasar **MVC (Model-View-Controller)**. Implementasi mencakup pembuatan Controller untuk mengelola data dan Blade Template Engine untuk menampilkan data secara dinamis di view.

### Tujuan Pembelajaran

- Memahami arsitektur MVC Laravel
- Mampu membuat Controller dan menghubungkannya dengan Route
- Mampu menggunakan Blade Template Engine (`{{ }}`, `@foreach`, `@php`)
- Mampu mengirim data dari Controller ke View

### Struktur File

```
Tutorial_Laravel1_2311102227_Muhammad Rafiful Hana/
|-- web-framework-1/
    |-- app/Http/Controllers/
    |   |-- Controller.php              (Base Controller)
    |   |-- Lat1Controller.php          (Controller utama - 2 method)
    |-- resources/views/
    |   |-- v_latihan1.blade.php        (View latihan 1 - data sederhana)
    |   |-- v_latihan2.blade.php        (View latihan 2 - tabel looping)
    |   |-- welcome.blade.php           (Welcome page default Laravel)
    |-- routes/
        |-- web.php                      (Definisi route)
```

### File yang Digunakan

| File | Fungsi |
|------|--------|
| `routes/web.php` | Mendefinisikan 2 route: `/lat1` dan `/lat1/m2` |
| `Lat1Controller.php` | Controller dengan 2 method: `index()` dan `method2()` |
| `v_latihan1.blade.php` | View sederhana menampilkan nama dan asal |
| `v_latihan2.blade.php` | View dengan tabel menggunakan `@foreach` |

### Kode Sumber Lengkap

#### routes/web.php

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lat1Controller;

Route::get('/lat1', [Lat1Controller::class, 'index']);
Route::get('/lat1/m2', [Lat1Controller::class, 'method2']);
```

#### Lat1Controller.php

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index()
    {
        $data["nama"] = "Muhammad Rafiful Hana";
        $data["asal"] = "Kudus";
        return view('v_latihan1', $data);
    }

    public function method2()
    {
        $data['title'] = "Daftar Mahasiswa";
        $data['daf_mhs'] = array(
            array("nama" => "Muhammad", "asal" => "Kudus"),
            array("nama" => "Rafiful", "asal" => "Semarang"),
            array("nama" => "Hana", "asal" => "Demak")
        );
        return view('v_latihan2', $data);
    }
}
```

#### v_latihan1.blade.php

```html
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1</title>
</head>
<body>
    Nama : {{$nama}} <br/>
    Asal : {{$asal}} <br/>
</body>
</html>
```

#### v_latihan2.blade.php

```html
<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
</head>
<body>
    <h3>{{$title}}</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Asal</th>
        </tr>
        @php $no = 1; @endphp
        @foreach($daf_mhs as $mhs)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$mhs['nama']}}</td>
            <td>{{$mhs['asal']}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
```

### Penjelasan Konsep Laravel

| Konsep | Penjelasan |
|--------|------------|
| **Route** | Definisi URL endpoint yang mengarah ke Controller atau closure function |
| **Controller** | Class PHP yang menangani logika aplikasi, menerima request dan mengembalikan response |
| **View** | Template tampilan HTML yang menggunakan Blade template engine |
| **`{{ $variable }}`** | Blade syntax untuk menampilkan variabel dengan auto-escaping XSS |
| **`@foreach ... @endforeach`** | Blade directive untuk perulangan array/Collection |
| **`@php ... @endphp`** | Blade directive untuk menulis kode PHP inline di view |
| **`return view('name', $data)`** | Mengirim data dari Controller ke View sebagai variabel |

### Alur MVC Laravel

```
Browser request GET /lat1
    |
    v
Route::get('/lat1') -> Lat1Controller::index()
    |
    v
index() membuat array: $data = ["nama" => "...", "asal" => "..."]
    |
    v
return view('v_latihan1', $data)
    |
    v
Blade compile v_latihan1.blade.php
    Replace {{ $nama }} -> "Muhammad Rafiful Hana"
    Replace {{ $asal }} -> "Kudus"
    |
    v
HTML output dikirim ke browser
```

### Output Program

#### Output 1 - Latihan 1 (Data Nama & Asal)

![Latihan 1](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%206%20-%20Latihan%201.png)

Tampilan halaman latihan 1 yang menampilkan data nama "Muhammad Rafiful Hana" dan asal "Kudus". Data dikirim dari `Lat1Controller::index()` ke view `v_latihan1.blade.php` melalui Blade template engine.

#### Output 2 - Latihan 2 (Tabel Daftar Mahasiswa)

![Latihan 2](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%206%20-%20Latihan%202.png)

Tampilan halaman latihan 2 yang menampilkan tabel berisi 3 data mahasiswa dengan kolom No, Nama, dan Asal. Menggunakan Blade directive `@foreach` untuk looping array `$daf_mhs` dari controller.

---

## Project 7: Laravel 2 - Auth dengan Database (Eloquent)

### Deskripsi

Project ketujuh merupakan pengembangan dari Project 4 (PHP Auth) dengan menggunakan fitur Laravel yang lebih canggih: **Eloquent ORM** untuk interaksi database, **hashing password** untuk keamanan, **validasi form** bawaan Laravel, dan **session management** yang lebih robust.

### Tujuan Pembelajaran

- Memahami konsep Eloquent ORM untuk interaksi database
- Mampu membuat sistem registrasi dengan validasi rules
- Mampu membuat sistem login menggunakan Auth facade
- Memahami pentingnya hashing password untuk keamanan
- Mampu mengelola session login dengan Laravel

### Struktur File

```
Tutorial_Laravel2_2311102227_Muhammad Rafiful Hana/
|-- web-framework-2/
    |-- app/Http/Controllers/
    |   |-- Controller.php
    |   |-- AuthController.php          (Controller autentikasi - 6 method)
    |-- app/Models/
    |   |-- User.php                    (Model Eloquent untuk tabel users)
    |-- resources/views/
    |   |-- home.blade.php              (Halaman home setelah login)
    |   |-- auth/
    |       |-- login.blade.php         (Form login)
    |       |-- registration.blade.php  (Form registrasi)
    |-- routes/
        |-- web.php                      (Route autentikasi - 7 route)
    |-- database/
        |-- database.sqlite             (Database SQLite)
```

### File yang Digunakan

| File | Fungsi |
|------|--------|
| `routes/web.php` | Mendefinisikan 7 route autentikasi |
| `AuthController.php` | Controller dengan 6 method: login, auth, registration, register, home, logout |
| `User.php` | Model Eloquent dengan $fillable dan $hidden |
| `auth/login.blade.php` | Form login dengan validasi error |
| `auth/registration.blade.php` | Form registrasi dengan success message |
| `home.blade.php` | Halaman home setelah login (protected) |

### Kode Sumber Lengkap

#### routes/web.php

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
Route::get('/registration', [AuthController::class, 'registration'])->name('registration');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/home', [AuthController::class, 'home'])->name('home');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return redirect('/login');
});
```

#### AuthController.php

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/registration')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function home()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        return view('home', ['user' => Auth::user()]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
```

#### User.php (Eloquent Model)

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
```

#### auth/registration.blade.php

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
</head>
<body>
    <div class="register-container">
        <h2>Registrasi</h2>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="error">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ url('/register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nama" 
                   value="{{ old('name') }}" required>
            <input type="email" name="email" placeholder="Email" 
                   value="{{ old('email') }}" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" 
                   placeholder="Konfirmasi Password" required>
            <button type="submit">Register</button>
        </form>

        <div class="login-link">
            <a href="{{ url('/login') }}">Sudah punya akun? Login</a>
        </div>
    </div>
</body>
</html>
```

### Fitur Validasi

| Field | Aturan Validasi | Keterangan |
|-------|----------------|------------|
| name | `required\|string\|max:255` | Nama wajib diisi, maks 255 karakter |
| email | `required\|email\|unique:users,email` | Email valid dan harus unik di database |
| password | `required\|min:6\|confirmed` | Min 6 karakter, harus cocok dengan field konfirmasi |

### Fitur Keamanan

| Fitur | Implementasi |
|-------|-------------|
| Password Hashing | `Hash::make($request->password)` menggunakan bcrypt |
| CSRF Protection | `@csrf` pada setiap form Blade |
| Session Regeneration | `$request->session()->regenerate()` setelah login berhasil |
| Input Validation | `$request->validate()` untuk sanitasi dan validasi input |
| Auth Guard | `Auth::attempt($credentials)` untuk verifikasi credential |
| Mass Assignment Protection | `$fillable` pada Model untuk proteksi mass assignment |
| Old Input | `old('field')` untuk mengisi ulang form setelah error validasi |

### Perbandingan Project 4 vs Project 7

| Aspek | Project 4 (PHP Session) | Project 7 (Laravel Auth) |
|-------|------------------------|-------------------------|
| Database | Tidak ada (session only) | SQLite/MySQL via Eloquent ORM |
| Password Storage | Plaintext | Bcrypt hashed via `Hash::make()` |
| Validation | Manual `if/else` | `$request->validate()` dengan rules |
| Session | `$_SESSION` manual | Laravel Session bawaan |
| CSRF Protection | Tidak ada | `@csrf` token otomatis |
| User Management | `$_SESSION['users']` array | Database `users` table |
| Error Display | Manual `$message` | `$errors` bag collection |
| Scalability | Terbatas session | Enterprise-level |

### Output Program

#### Output 1 - Halaman Login Laravel

![Login Laravel](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%207%20-%20Login.png)

Tampilan halaman login menggunakan Laravel Auth dengan form email dan password. Terdapat link "Belum punya akun? Register" di bagian bawah form.

#### Output 2 - Halaman Register Laravel

![Register Laravel](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%207%20-%20Register.png)

Tampilan halaman registrasi dengan 4 form field: Nama, Email, Password, dan Konfirmasi Password. Validasi rules diterapkan pada setiap field.

#### Output 3 - Home Setelah Login

![Home Laravel](https://raw.githubusercontent.com/YamaTaro38/laporan-tugas-1-7-gabungan/main/images/Project%207%20-%20Logged%20In.png)

Halaman home yang menampilkan nama dan email user setelah berhasil login. Hanya dapat diakses oleh user yang sudah terautentikasi. Terdapat tombol Logout di bagian bawah.

---

## Project Unifikasi: Laravel Unified

### Deskripsi

Seluruh 7 project di atas telah diintegrasikan ke dalam satu aplikasi Laravel tunggal yang terdapat di folder **`unified-project/`**. Setiap modul dapat diakses dari dashboard utama di halaman home.

### Tujuan Pembelajaran

- Memahami cara mengintegrasikan berbagai modul dalam satu framework
- Mampu mengelola route, controller, dan view secara terstruktur
- Mampu menggunakan arsitektur MVC untuk proyek berskala besar

### Struktur File

```
unified-project/
|-- app/Http/Controllers/
|   |-- Controller.php                (Base Controller)
|   |-- HtmlController.php            (Modul 1: Form Mahasiswa)
|   |-- CssController.php             (Modul 2: Layout Bootstrap)
|   |-- JsController.php              (Modul 3: JS Interaktif)
|   |-- PhpAuthController.php         (Modul 4: PHP Session Auth)
|   |-- AjaxController.php            (Modul 5: AJAX Shoutbox)
|   |-- LatihanController.php         (Modul 6: Laravel Basic)
|   |-- LaravelAuthController.php     (Modul 7: Laravel Auth DB)
|-- app/Models/
|   |-- User.php                      (Model Eloquent)
|-- resources/views/
|   |-- home.blade.php                (Dashboard utama)
|   |-- html/
|   |   |-- form_mahasiswa.blade.php
|   |   |-- form_mahasiswa_result.blade.php
|   |-- css/
|   |   |-- layout.blade.php
|   |-- js/
|   |   |-- interaktif.blade.php
|   |-- php/
|   |   |-- login.blade.php
|   |   |-- register.blade.php
|   |-- ajax/
|   |   |-- index.blade.php
|   |-- laravel1/
|   |   |-- v_latihan1.blade.php
|   |   |-- v_latihan2.blade.php
|   |-- laravel2/
|       |-- login.blade.php
|       |-- registration.blade.php
|       |-- home.blade.php
|-- routes/
|   |-- web.php                       (Semua route - 21 routes)
|-- database/
    |-- database.sqlite               (SQLite database)
```

### File Controllers

| Controller | Modul | Method |
|-----------|-------|--------|
| `HtmlController.php` | 1 - HTML | `formMahasiswa()`, `submitFormMahasiswa()` |
| `CssController.php` | 2 - CSS | `layout()` |
| `JsController.php` | 3 - JavaScript | `interaktif()` |
| `PhpAuthController.php` | 4 - PHP Auth | `showLogin()`, `login()`, `showRegister()`, `register()`, `logout()` |
| `AjaxController.php` | 5 - AJAX | `index()`, `shout()` |
| `LatihanController.php` | 6 - Laravel 1 | `index()`, `method2()` |
| `LaravelAuthController.php` | 7 - Laravel 2 | `showLogin()`, `auth()`, `showRegistration()`, `register()`, `home()`, `logout()` |

### Daftar Route Lengkap

| Method | URL | Nama Route | Controller |
|--------|-----|-----------|------------|
| GET | `/` | `home` | (closure) |
| GET | `/html/form-mahasiswa` | `html.form` | HtmlController |
| POST | `/html/form-mahasiswa/submit` | `html.form.submit` | HtmlController |
| GET | `/css/layout` | `css.layout` | CssController |
| GET | `/js/interaktif` | `js.interaktif` | JsController |
| GET | `/php/login` | `php.login` | PhpAuthController |
| POST | `/php/login` | - | PhpAuthController |
| GET | `/php/register` | `php.register` | PhpAuthController |
| POST | `/php/register` | - | PhpAuthController |
| GET | `/php/logout` | `php.logout` | PhpAuthController |
| GET | `/ajax` | `ajax.index` | AjaxController |
| GET | `/ajax/shout` | `ajax.shout` | AjaxController |
| GET | `/laravel1/lat1` | `laravel1.lat1` | LatihanController |
| GET | `/laravel1/lat1/m2` | `laravel1.lat2` | LatihanController |
| GET | `/laravel2/login` | `laravel2.login` | LaravelAuthController |
| POST | `/laravel2/auth` | `laravel2.auth` | LaravelAuthController |
| GET | `/laravel2/registration` | `laravel2.registration` | LaravelAuthController |
| POST | `/laravel2/register` | `laravel2.register` | LaravelAuthController |
| GET | `/laravel2/home` | `laravel2.home` | LaravelAuthController |
| GET | `/laravel2/logout` | `laravel2.logout` | LaravelAuthController |

### Cara Menjalankan

```bash
cd unified-project
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Akses di: **http://localhost:8000**

### Dashboard Unified

| URL | Modul | Deskripsi |
|-----|-------|-----------|
| `/` | Dashboard | Halaman utama dengan akses ke semua modul |
| `/html/form-mahasiswa` | Modul 1 | Form data mahasiswa (HTML) |
| `/css/layout` | Modul 2 | Layout Bootstrap (CSS) |
| `/js/interaktif` | Modul 3 | DOM manipulation (JavaScript) |
| `/php/login` | Modul 4 | Login/Register session (PHP) |
| `/ajax` | Modul 5 | Web service AJAX (jQuery) |
| `/laravel1/lat1` | Modul 6 | Controller & Blade (Laravel) |
| `/laravel2/login` | Modul 7 | Auth database (Laravel Eloquent) |

### Output Program

#### Output 1 - Dashboard Utama

*(Menunggu upload screenshot dashboard unified)*

#### Output 2 - Modul 1: Form HTML

*(Menunggu upload screenshot form mahasiswa)*

#### Output 3 - Modul 2: Layout CSS

*(Menunggu upload screenshot layout Bootstrap)*

#### Output 4 - Modul 3: JavaScript Interaktif

*(Menunggu upload screenshot JS interaktif)*

#### Output 5 - Modul 4: PHP Auth

*(Menunggu upload screenshot PHP login/register)*

#### Output 6 - Modul 5: AJAX Shoutbox

*(Menunggu upload screenshot AJAX)*

#### Output 7 - Modul 6: Laravel Basic

*(Menunggu upload screenshot Laravel latihan)*

#### Output 8 - Modul 7: Laravel Auth

*(Menunggu upload screenshot Laravel auth)*

---

## Kesimpulan

Dari 7 project praktikum yang telah dikerjakan, dapat disimpulkan bahwa:

### Ringkasan Penguasaan Teknologi

| No | Teknologi | Konsep Utama | Tingkat |
|----|-----------|-------------|---------|
| 1 | HTML | Form elements, input types, submit, reset | Dasar |
| 2 | CSS + Bootstrap | Grid system, responsive layout, custom CSS | Menengah |
| 3 | JavaScript | DOM manipulation, event handling, style manipulation | Menengah |
| 4 | PHP Session | Session management, super global, auth sederhana | Menengah |
| 5 | jQuery AJAX | Komunikasi asinkron, real-time, callback functions | Mahir |
| 6 | Laravel MVC | Route, Controller, Blade template, data passing | Mahir |
| 7 | Laravel Eloquent | ORM, Hash, Validation, Auth facade, session management | Lanjut |

### Pencapaian Per Project

1. **HTML**: Mampu membuat form data dengan berbagai jenis input (text, date, radio, checkbox, select, textarea)
2. **CSS**: Mampu membuat layout responsif 3 kolom dengan Bootstrap Grid dan custom CSS
3. **JavaScript**: Mampu membuat 3 fungsi interaktif: perhitungan, toggle alignment, toggle warna
4. **PHP**: Mampu membuat sistem autentikasi 3 halaman (register, login, logout) berbasis session
5. **AJAX**: Mampu membuat komunikasi client-server tanpa reload halaman menggunakan jQuery
6. **Laravel 1**: Mampu menggunakan arsitektur MVC dengan 2 method controller dan 2 view Blade
7. **Laravel 2**: Mampu membuat autentikasi lengkap dengan database, validasi, hashing, dan session management

### Progresi Pembelajaran

```
HTML (Dasar) 
    -> CSS (Tampilan & Layout) 
        -> JavaScript (Interaktivitas) 
            -> PHP (Server-side & Session) 
                -> AJAX (Komunikasi Asinkron) 
                    -> Laravel MVC (Framework Dasar) 
                        -> Laravel Auth (Enterprise-Level Security)
```

Setiap project membangun fondasi untuk project berikutnya, menciptakan pemahaman bertahap yang komprehensif tentang pengembangan web modern dari tingkat dasar hingga enterprise.

---

<p align="center">
  <strong>2026 Muhammad Rafiful Hana (2311102227)</strong><br>
  Program Studi S1 Informatika - Fakultas Informatika - Telkom University Purwokerto
</p>