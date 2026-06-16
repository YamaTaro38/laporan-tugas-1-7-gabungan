<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\CssController;
use App\Http\Controllers\JsController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\PhpAuthController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\LaravelAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes - Unified Project
|--------------------------------------------------------------------------
| Menggabungkan seluruh modul dari 7 project:
| 1. HTML       - Form Data Mahasiswa
| 2. CSS        - Layout Bootstrap & Custom CSS
| 3. JavaScript - Interaktif DOM Manipulation
| 4. PHP        - Login/Register Session-based
| 5. AJAX       - Web Service dengan jQuery
| 6. Laravel 1  - Controller & Blade Template
| 7. Laravel 2  - Auth dengan Database (Eloquent)
*/

// ==========================================
// Halaman Utama (Home / Dashboard)
// ==========================================
Route::get('/', function () {
    return view('home');
})->name('home');

// ==========================================
// MODUL 1: HTML - Form Data Mahasiswa
// ==========================================
Route::prefix('html')->group(function () {
    Route::get('/form-mahasiswa', [HtmlController::class, 'formMahasiswa'])->name('html.form');
    Route::post('/form-mahasiswa/submit', [HtmlController::class, 'submitFormMahasiswa'])->name('html.form.submit');
});

// ==========================================
// MODUL 2: CSS - Layout Bootstrap
// ==========================================
Route::prefix('css')->group(function () {
    Route::get('/layout', [CssController::class, 'layout'])->name('css.layout');
});

// ==========================================
// MODUL 3: JavaScript - DOM Interaktif
// ==========================================
Route::prefix('js')->group(function () {
    Route::get('/interaktif', [JsController::class, 'interaktif'])->name('js.interaktif');
});

// ==========================================
// MODUL 4: PHP - Session-based Auth
// ==========================================
Route::prefix('php')->group(function () {
    Route::get('/login', [PhpAuthController::class, 'showLogin'])->name('php.login');
    Route::post('/login', [PhpAuthController::class, 'login']);
    Route::get('/register', [PhpAuthController::class, 'showRegister'])->name('php.register');
    Route::post('/register', [PhpAuthController::class, 'register']);
    Route::get('/logout', [PhpAuthController::class, 'logout'])->name('php.logout');
});

// ==========================================
// MODUL 5: AJAX - Web Service
// ==========================================
Route::prefix('ajax')->group(function () {
    Route::get('/', [AjaxController::class, 'index'])->name('ajax.index');
    Route::get('/shout', [AjaxController::class, 'shout'])->name('ajax.shout');
});

// ==========================================
// MODUL 6: Laravel 1 - Controller & Blade
// ==========================================
Route::prefix('laravel1')->group(function () {
    Route::get('/lat1', [LatihanController::class, 'index'])->name('laravel1.lat1');
    Route::get('/lat1/m2', [LatihanController::class, 'method2'])->name('laravel1.lat2');
});

// ==========================================
// MODUL 7: Laravel 2 - Auth (Eloquent)
// ==========================================
Route::prefix('laravel2')->group(function () {
    Route::get('/login', [LaravelAuthController::class, 'showLogin'])->name('laravel2.login');
    Route::post('/auth', [LaravelAuthController::class, 'auth'])->name('laravel2.auth');
    Route::get('/registration', [LaravelAuthController::class, 'showRegistration'])->name('laravel2.registration');
    Route::post('/register', [LaravelAuthController::class, 'register'])->name('laravel2.register');
    Route::get('/home', [LaravelAuthController::class, 'home'])->name('laravel2.home');
    Route::get('/logout', [LaravelAuthController::class, 'logout'])->name('laravel2.logout');
});