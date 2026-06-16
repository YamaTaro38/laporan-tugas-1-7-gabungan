# 📚 Laporan Praktikum Aplikasi Berbasis Platform

## Unifikasi 7 Modul Pembelajaran dalam 1 Project Laravel

---

<p align="center">
  <strong>Muhammad Rafiful Hana</strong> — 2311102227 — S1 IF-11-04
</p>

<p align="center">
  Program Studi S1 Informatika — Fakultas Informatika — Telkom University Purwokerto — 2026
</p>

---

## 📋 Daftar Isi

1. [Pendahuluan](#pendahuluan)
2. [Struktur Project](#struktur-project)
3. [Modul 1: HTML — Form Data Mahasiswa](#modul-1-html--form-data-mahasiswa)
4. [Modul 2: CSS — Layout Bootstrap & Custom CSS](#modul-2-css--layout-bootstrap--custom-css)
5. [Modul 3: JavaScript — DOM Manipulation Interaktif](#modul-3-javascript--dom-manipulation-interaktif)
6. [Modul 4: PHP — Login/Register Session-based](#modul-4-php--loginregister-session-based)
7. [Modul 5: AJAX — Web Service dengan jQuery](#modul-5-ajax--web-service-dengan-jquery)
8. [Modul 6: Laravel 1 — Controller & Blade Template](#modul-6-laravel-1--controller--blade-template)
9. [Modul 7: Laravel 2 — Auth dengan Database (Eloquent)](#modul-7-laravel-2--auth-dengan-database-eloquent)
10. [Cara Menjalankan](#cara-menjalankan)
11. [Daftar Route](#daftar-route)
12. [Kesimpulan](#kesimpulan)

---

## Pendahuluan

Project ini merupakan unifikasi dari **7 modul pembelajaran** mata kuliah Aplikasi Berbasis Platform yang telah dipelajari selama satu semester. Tujuan dari project ini adalah menggabungkan seluruh konsep yang telah dipelajari — mulai dari HTML dasar hingga framework Laravel — ke dalam satu aplikasi web terpadu menggunakan **Laravel Framework**.

Setiap modul merepresentasikan materi pembelajaran yang berbeda, mulai dari:
- **HTML** dasar untuk pembuatan form
- **CSS** dengan framework Bootstrap untuk layout
- **JavaScript** untuk manipulasi DOM interaktif
- **PHP** untuk autentikasi berbasis session
- **AJAX** untuk komunikasi asinkron client-server
- **Laravel** tingkat dasar (Controller & Blade)
- **Laravel** tingkat lanjut (Auth dengan Eloquent ORM)

Dengan menggunakan Laravel sebagai framework utama, seluruh modul dapat diintegrasikan dengan rapi menggunakan konsep **MVC (Model-View-Controller)** yang terstruktur dan mudah dikelola.

---

## Struktur Project

```
unified-project/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Controller.php              # Base Controller
│   │       ├── HtmlController.php           # Modul 1: HTML
│   │       ├── CssController.php            # Modul 2: CSS
│   │       ├── JsController.php             # Modul 3: JavaScript
│   │       ├── PhpAuthController.php        # Modul 4: PHP Session Auth
│   │       ├── AjaxController.php           # Modul 5: AJAX
│   │       ├── LatihanController.php        # Modul 6: Laravel 1
│   │       └── LaravelAuthController.php    # Modul 7: Laravel 2
│   └── Models/
│       └── User.php                         # Model untuk Auth
├── resources/
│   └── views/
│       ├── home.blade.php                   # Dashboard utama
│       ├── html/
│       │   ├── form_mahasiswa.blade.php     # Form HTML
│       │   └── form_mahasiswa_result.blade.php  # Hasil form
│       ├── css/
│       │   └── layout.blade.php             # Layout Bootstrap
│       ├── js/
│       │   └── interaktif.blade.php         # JS interaktif
│       ├── ajax/
│       │   └── index.blade.php              # AJAX web service
│       ├── php/
│       │   ├── login.blade.php              # Login PHP
│       │   └── register.blade.php           # Register PHP
│       ├── laravel1/
│       │   ├── v_latihan1.blade.php         # Latihan 1 Blade
│       │   └── v_latihan2.blade.php         # Latihan 2 Blade
│       └── laravel2/
│           ├── login.blade.php              # Login Laravel
│           ├── registration.blade.php       # Register Laravel
│           └── home.blade.php               # Home setelah login
└── routes/
    └── web.php                              # Semua route project
```

---

## Modul 1: HTML — Form Data Mahasiswa

### 📝 Deskripsi

Modul ini mendemonstrasikan penggunaan elemen-elemen dasar HTML untuk membuat **formulir pendataan mahasiswa**. Form ini mencakup berbagai jenis input seperti text, date, radio button, checkbox, select dropdown, dan textarea.

### 🎯 Tujuan Pembelajaran

- Memahami struktur dasar dokumen HTML
- Mengenal berbagai jenis elemen form HTML
- Mampu membuat form dengan input data yang beragam
- Memahami metode pengiriman data (POST)

### 🔧 Komponen yang Digunakan

| Komponen | Elemen HTML | Kegunaan |
|----------|-------------|----------|
| Input Text | `<input type="text">` | NIM, Nama |
| Input Date | `<input type="date">` | Tanggal Lahir |
| Radio Button | `<input type="radio">` | Jenis Kelamin |
| Textarea | `<textarea>` | Alamat |
| Select | `<select>` | Tempat Tinggal |
| Checkbox | `<input type="checkbox">` | Hobi |

### 💻 Kode Utama

```html
<form action="#" method="post">
    <input type="text" name="nim">
    <input type="date" name="tgl_lahir">
    <input type="radio" name="jk" value="Laki-laki">
    <textarea name="alamat" rows="4" cols="30"></textarea>
    <select name="tinggal">
        <option value="Kos">Kos/kontrakan</option>
        <option value="Saudara">Rumah saudara</option>
        <option value="Orang Tua">Rumah orang tua</option>
    </select>
    <input type="checkbox" name="hobi[]" value="Science">
</form>
```

### 📂 File Terkait

- **Controller:** `app/Http/Controllers/HtmlController.php`
- **Views:** `resources/views/html/form_mahasiswa.blade.php`, `form_mahasiswa_result.blade.php`

### 🌐 Route

| Method | URL | Fungsi |
|--------|-----|--------|
| GET | `/html/form-mahasiswa` | Menampilkan form |
| POST | `/html/form-mahasiswa/submit` | Memproses form |

---

## Modul 2: CSS — Layout Bootstrap & Custom CSS

### 🎨 Deskripsi

Modul ini mendemonstrasikan penggunaan **Bootstrap 5** sebagai framework CSS untuk membuat layout halaman web yang responsif, dikombinasikan dengan **custom CSS** untuk kustomisasi tambahan.

### 🎯 Tujuan Pembelajaran

- Memahami sistem grid Bootstrap (row, col-*)
- Mampu menggunakan komponen Bootstrap (Nav, Container)
- Mampu mengkombinasikan Bootstrap dengan CSS kustom
- Memahami konsep layout responsif

### 🔧 Komponen Layout

| Bagian | Class Bootstrap | Deskripsi |
|--------|----------------|-----------|
| Container | `.container` | Pembungkus utama |
| Row | `.row` | Baris grid |
| Kolom | `.col-3`, `.col-6`, `.col-9` | Pembagian kolom |
| Navigasi | `.nav`, `.nav-link` | Menu navigasi vertikal |
| Gambar | `.img-fluid` | Gambar responsif |

### 💻 Custom CSS

```css
.border-box { 
    border: 1px solid #000; 
    min-height: 100px; 
    display: flex; 
    align-items: center; 
    justify-content: center; 
}
.gray-box { 
    background-color: #808080; 
    border: 1px solid #000; 
}
.nav-box { 
    min-height: 400px; 
    align-items: flex-start; 
}
```

### 📂 File Terkait

- **Controller:** `app/Http/Controllers/CssController.php`
- **Views:** `resources/views/css/layout.blade.php`

### 🌐 Route

| Method | URL | Fungsi |
|--------|-----|--------|
| GET | `/css/layout` | Menampilkan layout Bootstrap |

---

## Modul 3: JavaScript — DOM Manipulation Interaktif

### ⚡ Deskripsi

Modul ini mendemonstrasikan penggunaan **JavaScript** untuk memanipulasi DOM (Document Object Model) secara interaktif. Terdapat tiga fungsi utama: perhitungan bilangan ganjil, toggle alignment teks, dan toggle warna sidebar.

### 🎯 Tujuan Pembelajaran

- Memahami konsep DOM manipulation
- Mampu membuat fungsi JavaScript interaktif
- Memahami event handling (onclick)
- Mampu memanipulasi style elemen secara dinamis

### 🔧 Fungsi JavaScript

#### 1. sumOddValues(min, max)
```javascript
function sumOddValues(min, max) {
    let sum = 0;
    for (let i = min; i <= max; i++) {
        if (i % 2 !== 0) {
            sum += i;
        }
    }
    return sum;
}
```
Menghitung jumlah seluruh bilangan ganjil dalam rentang tertentu.

#### 2. toggleAlignment()
```javascript
function toggleAlignment() {
    const content = document.getElementById('main-content');
    content.style.textAlign = (content.style.textAlign === 'center') ? 'right' : 'center';
}
```
Mengubah perataan teks pada area konten secara bergantian antara tengah dan kanan.

#### 3. toggleBackground()
```javascript
function toggleBackground() {
    const box = document.getElementById('sidebar-box');
    const originalColor = '#808080';
    box.style.backgroundColor = (box.style.backgroundColor === 'rgb(128, 128, 128)' || box.style.backgroundColor === '') ? '#ffcc00' : originalColor;
}
```
Mengubah warna sidebar secara bergantian antara abu-abu dan kuning.

### 📂 File Terkait

- **Controller:** `app/Http/Controllers/JsController.php`
- **Views:** `resources/views/js/interaktif.blade.php`

### 🌐 Route

| Method | URL | Fungsi |
|--------|-----|--------|
| GET | `/js/interaktif` | Menampilkan halaman JS interaktif |

---

## Modul 4: PHP — Login/Register Session-based

### 🔐 Deskripsi

Modul ini mendemonstrasikan implementasi **sistem autentikasi sederhana** menggunakan **session PHP** tanpa database. Data user disimpan sementara di session selama browser aktif.

### 🎯 Tujuan Pembelajaran

- Memahami konsep session dalam PHP
- Mampu membuat sistem registrasi user
- Mampu membuat sistem login dengan validasi
- Mampu mengelola session login/logout

### 🔧 Fitur

| Fitur | Deskripsi |
|-------|-----------|
| Register | Mendaftarkan user baru (username & password) |
| Login | Autentikasi user dengan username & password |
| Logout | Menghapus session dan kembali ke halaman login |
| Session Storage | Menyimpan data user sementara di session |

### 💻 Alur Kerja

1. **Register:** User mengisi username dan password → data disimpan di `$_SESSION['users']`
2. **Login:** User memasukkan username dan password → dicocokkan dengan data session
3. **Sukses:** Jika cocok, username disimpan di `$_SESSION['logged_in_user']`
4. **Logout:** Session dihapus dengan `session_destroy()`

### 📂 File Terkait

- **Controller:** `app/Http/Controllers/PhpAuthController.php`
- **Views:** `resources/views/php/login.blade.php`, `register.blade.php`

### 🌐 Route

| Method | URL | Fungsi |
|--------|-----|--------|
| GET | `/php/login` | Menampilkan form login |
| POST | `/php/login` | Memproses login |
| GET | `/php/register` | Menampilkan form register |
| POST | `/php/register` | Memproses register |
| GET | `/php/logout` | Logout dan hapus session |

---

## Modul 5: AJAX — Web Service dengan jQuery

### 🔄 Deskripsi

Modul ini mendemonstrasikan penggunaan **AJAX (Asynchronous JavaScript and XML)** menggunakan **jQuery** untuk berkomunikasi dengan server tanpa perlu me-reload halaman. Setiap pesan yang dikirim akan langsung ditampilkan tanpa refresh.

### 🎯 Tujuan Pembelajaran

- Memahami konsep komunikasi asinkron client-server
- Mampu menggunakan jQuery AJAX untuk GET request
- Mampu menangani response dari server
- Mampu menambah user experience dengan real-time interaction

### 💻 Kode AJAX (jQuery)

```javascript
$(document).ready(function() {
    $("#shoutbutton").click(function() {
        var pesan = $("#msg").val();
        
        if (pesan.trim() === "") {
            // Tampilkan error jika pesan kosong
            return;
        }
        
        $.ajax({
            type: "GET",
            url: "{{ route('ajax.shout') }}",
            data: $("#form1").serialize(),
            success: function(rsp) {
                $("#data").append("<div class='message'>" + rsp + "</div>");
                $("#msg").val("");
            },
            error: function(rsp) {
                alert("Error: " + rsp.status + " - " + rsp.statusText);
            }
        });
    });
});
```

### 🔧 Alur Kerja

1. User mengetik pesan di input field
2. Tombol **Shout!** ditekan (atau tekan Enter)
3. jQuery mengambil data form dengan `serialize()`
4. AJAX mengirim GET request ke server
5. Server (AjaxController) memproses dan mengembalikan response
6. Response ditambahkan ke div `#data` tanpa reload

### 📂 File Terkait

- **Controller:** `app/Http/Controllers/AjaxController.php`
- **Views:** `resources/views/ajax/index.blade.php`

### 🌐 Route

| Method | URL | Fungsi |
|--------|-----|--------|
| GET | `/ajax` | Menampilkan halaman AJAX |
| GET | `/ajax/shout` | Endpoint AJAX untuk memproses pesan |

---

## Modul 6: Laravel 1 — Controller & Blade Template

### 🚀 Deskripsi

Modul ini merupakan pengenalan pertama terhadap **Laravel Framework**, berfokus pada konsep dasar **Model-View-Controller (MVC)**, khususnya bagaimana Controller mengirim data ke View menggunakan **Blade Template Engine**.

### 🎯 Tujuan Pembelajaran

- Memahami arsitektur MVC Laravel
- Mampu membuat Controller dan menghubungkannya dengan Route
- Mampu menggunakan Blade Template Engine untuk menampilkan data
- Mampu mengirim data dari Controller ke View

### 🔧 Komponen

#### 1. Controller (LatihanController)
```php
class LatihanController extends Controller
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

#### 2. Blade Template (v_latihan1.blade.php)
```html
Nama : {{ $nama }}
Asal : {{ $asal }}
```

#### 3. Blade Template dengan Looping (v_latihan2.blade.php)
```html
@foreach($daf_mhs as $mhs)
<tr>
    <td>{{ $no++ }}</td>
    <td>{{ $mhs['nama'] }}</td>
    <td>{{ $mhs['asal'] }}</td>
</tr>
@endforeach
```

### 📂 File Terkait

- **Controller:** `app/Http/Controllers/LatihanController.php`
- **Views:** `resources/views/laravel1/v_latihan1.blade.php`, `v_latihan2.blade.php`

### 🌐 Route

| Method | URL | Fungsi |
|--------|-----|--------|
| GET | `/laravel1/lat1` | Menampilkan data nama & asal |
| GET | `/laravel1/lat1/m2` | Menampilkan daftar mahasiswa |

---

## Modul 7: Laravel 2 — Auth dengan Database (Eloquent)

### 🗄️ Deskripsi

Modul ini merupakan pengembangan dari modul 4 (PHP Auth) dengan menggunakan fitur Laravel yang lebih canggih: **Eloquent ORM** untuk interaksi database, **hashing password** untuk keamanan, **validasi form**, dan **session management** bawaan Laravel.

### 🎯 Tujuan Pembelajaran

- Memahami konsep Eloquent ORM untuk interaksi database
- Mampu membuat sistem registrasi dengan validasi
- Mampu membuat sistem login menggunakan Auth facade
- Memahami pentingnya hashing password untuk keamanan
- Mampu mengelola session login dengan Laravel

### 🔧 Komponen

#### 1. Controller (LaravelAuthController)
```php
class LaravelAuthController extends Controller
{
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

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }
}
```

#### 2. Model User (Eloquent)
```php
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
}
```

### 🔧 Fitur Validasi

| Field | Aturan Validasi | Keterangan |
|-------|----------------|------------|
| name | required, string, max:255 | Nama lengkap user |
| email | required, email, unique:users,email | Email harus unik |
| password | required, min:6, confirmed | Min 6 karakter, harus cocok dengan konfirmasi |

### 🔒 Keamanan

- **Password Hashing:** Menggunakan `Hash::make()` (bcrypt) sebelum disimpan ke database
- **CSRF Protection:** Semua form menggunakan `@csrf` untuk mencegah serangan CSRF
- **Session Regeneration:** Session di-regen setelah login berhasil
- **Validation:** Input divalidasi sebelum diproses

### 📂 File Terkait

- **Controller:** `app/Http/Controllers/LaravelAuthController.php`
- **Model:** `app/Models/User.php`
- **Views:** `resources/views/laravel2/login.blade.php`, `registration.blade.php`, `home.blade.php`

### 🌐 Route

| Method | URL | Fungsi |
|--------|-----|--------|
| GET | `/laravel2/login` | Menampilkan form login |
| POST | `/laravel2/auth` | Memproses login |
| GET | `/laravel2/registration` | Menampilkan form register |
| POST | `/laravel2/register` | Memproses register |
| GET | `/laravel2/home` | Halaman setelah login |
| GET | `/laravel2/logout` | Logout |

---

## Cara Menjalankan

### 📋 Prasyarat

- PHP >= 8.2
- Composer
- Node.js & NPM (opsional, untuk asset building)

### 🚀 Langkah-langkah

```bash
# 1. Clone atau masuk ke direktori project
cd unified-project

# 2. Install dependencies
composer install

# 3. Copy file environment
cp .env.example .env

# 4. Generate application key
php artisan key:generate

# 5. Jalankan migrasi database (SQLite default)
php artisan migrate

# 6. Jalankan development server
php artisan serve
```

Akses aplikasi di: **http://localhost:8000**

---

## Daftar Route

| Method | URL | Nama Route | Controller | Fungsi |
|--------|-----|-----------|------------|--------|
| GET | `/` | `home` | — | Dashboard utama |
| GET | `/html/form-mahasiswa` | `html.form` | HtmlController@formMahasiswa | Form HTML |
| POST | `/html/form-mahasiswa/submit` | `html.form.submit` | HtmlController@submitFormMahasiswa | Proses form |
| GET | `/css/layout` | `css.layout` | CssController@layout | Layout Bootstrap |
| GET | `/js/interaktif` | `js.interaktif` | JsController@interaktif | JS interaktif |
| GET | `/php/login` | `php.login` | PhpAuthController@showLogin | Form login PHP |
| POST | `/php/login` | — | PhpAuthController@login | Proses login PHP |
| GET | `/php/register` | `php.register` | PhpAuthController@showRegister | Form register PHP |
| POST | `/php/register` | — | PhpAuthController@register | Proses register PHP |
| GET | `/php/logout` | `php.logout` | PhpAuthController@logout | Logout PHP |
| GET | `/ajax` | `ajax.index` | AjaxController@index | Halaman AJAX |
| GET | `/ajax/shout` | `ajax.shout` | AjaxController@shout | Endpoint AJAX |
| GET | `/laravel1/lat1` | `laravel1.lat1` | LatihanController@index | Latihan 1 |
| GET | `/laravel1/lat1/m2` | `laravel1.lat2` | LatihanController@method2 | Latihan 2 |
| GET | `/laravel2/login` | `laravel2.login` | LaravelAuthController@showLogin | Form login Laravel |
| POST | `/laravel2/auth` | `laravel2.auth` | LaravelAuthController@auth | Proses login Laravel |
| GET | `/laravel2/registration` | `laravel2.registration` | LaravelAuthController@showRegistration | Form register Laravel |
| POST | `/laravel2/register` | `laravel2.register` | LaravelAuthController@register | Proses register Laravel |
| GET | `/laravel2/home` | `laravel2.home` | LaravelAuthController@home | Home (protected) |
| GET | `/laravel2/logout` | `laravel2.logout` | LaravelAuthController@logout | Logout Laravel |

---

## Kesimpulan

Project unifikasi ini berhasil menggabungkan **7 modul pembelajaran** Aplikasi Berbasis Platform ke dalam satu aplikasi Laravel yang terstruktur. Berikut ringkasan capaian setiap modul:

### 📊 Ringkasan Modul

| Modul | Teknologi | Konsep Utama | Tingkat Kesulitan |
|-------|-----------|-------------|-------------------|
| 1 | HTML | Form elements, input types | ⭐ Dasar |
| 2 | CSS + Bootstrap | Grid system, layout responsif | ⭐⭐ Menengah |
| 3 | JavaScript | DOM manipulation, event handling | ⭐⭐ Menengah |
| 4 | PHP (Session) | Session management, auth sederhana | ⭐⭐ Menengah |
| 5 | jQuery AJAX | Komunikasi asinkron, real-time | ⭐⭐⭐ Mahir |
| 6 | Laravel (MVC) | Controller, Blade template, data passing | ⭐⭐⭐ Mahir |
| 7 | Laravel (Eloquent) | ORM, hashing, validasi, Auth facade | ⭐⭐⭐⭐ Sangat Mahir |

### 🎯 Manfaat

1. **Pembelajaran Bertahap:** Dari HTML dasar hingga Laravel mahir
2. **Konsep MVC:** Seluruh modul terintegrasi dalam arsitektur MVC Laravel
3. **Kode Terstruktur:** Setiap modul dipisahkan dengan controller dan view masing-masing
4. **Dashboard Terpadu:** Semua modul dapat diakses dari satu halaman utama
5. **Database Terkoneksi:** Modul 7 terintegrasi dengan database SQLite melalui Eloquent

### 🔮 Pengembangan Selanjutnya

- Integrasi API eksternal (REST API)
- Implementasi middleware untuk proteksi route
- Penggunaan Vue.js atau React untuk frontend yang lebih interaktif
- Deployment ke server production
- Penambahan testing (Unit & Feature tests)

---

<p align="center">
  <strong>© 2026 Muhammad Rafiful Hana</strong><br>
  Program Studi S1 Informatika — Fakultas Informatika — Telkom University Purwokerto
</p>