<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendonorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminPendonorController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Halaman Utama
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

//Halaman Jadwal Donor
Route::get('/jadwal-donor', function () {
    return view('jadwal');
})->name('jadwal');

// Halaman Info Donor
Route::get('/info-donor', function () {
    return view('info');
})->name('info');

Route::get('/info-donor-lanjutan', function () {
    return view('info-donor-lanjutan');
})->name('info.donor.lanjutan');

/// Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('about');
});

// Tampilkan halaman form (jika perlu)
Route::get('/daftar', function () {
    return view('daftar'); // ganti dengan nama blade form kamu
});

// Terima form pendaftaran pendonor
Route::post('/daftar', [PendonorController::class, 'store'])->name('daftar');

//Halaman Kebijakan
Route::get('/Kebijakan', function () {
    return view('policy'); // <-- sesuai nama file
})->name('kebijakan');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/kelola', function () {
    return view('admin.kelola');
})->name('kelola');

Route::get('/admin/kelola', [AdminPendonorController::class, 'index']);
Route::delete('/admin/kelola/{id}', [AdminPendonorController::class, 'destroy'])->name('pendonor.destroy');