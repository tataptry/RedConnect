<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendonorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminPendonorController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\PermintaanDarahController;
use App\Http\Controllers\UlasanController;

// HALAMAN UTAMA
Route::get('/', [UlasanController::class, 'index'])->name('beranda');
Route::get('/jadwal-donor', fn() => view('jadwal'))->name('jadwal');
Route::get('/info-donor', fn() => view('info'))->name('info');
Route::get('/info-donor-lanjutan', fn() => view('info-donor-lanjutan'))->name('info.donor.lanjutan');
Route::get('/tentang-kami', fn() => view('about'));
Route::get('/daftar', fn() => view('daftar'));
Route::post('/daftar', [PendonorController::class, 'store'])->name('daftar');
Route::get('/Kebijakan', fn() => view('policy'))->name('kebijakan');


Route::get('/permintaan', [PermintaanDarahController::class, 'create'])->name('permintaan.create');
Route::post('/permintaan', [PermintaanDarahController::class, 'store'])->name('permintaan.store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// DASHBOARD ADMIN

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::post('/permintaan', [PermintaanDarahController::class, 'store'])->name('permintaan.store');
Route::get('/admin/kelola', [AdminPendonorController::class, 'index'])->name('kelola');
Route::delete('/admin/kelola/{id}', [AdminPendonorController::class, 'destroy'])->name('pendonor.destroy');

// ULASAN
Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan.index');
Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');

// ADMIN ULASAN
Route::get('/admin/ulasan', [UlasanController::class, 'adminIndex'])->name('admin.ulasan');
Route::delete('/admin/ulasan/{id}', [UlasanController::class, 'destroy'])->name('admin.ulasan.destroy');

// LOGOUT
Route::get('/logout', function () {
    return redirect()->route('beranda'); // kembali ke beranda
})->name('logout');
