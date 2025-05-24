<?php

use Illuminate\Http\Request;

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

//Halaman Tentang Kami
Route::get('/tentang', function () {
    return view('tentang');
});

// Halaman Pendaftaran
Route::get('/daftar', function () {
    return view('daftar');
});
// Menyimpan Data Pendaftar (contoh)
Route::post('/daftar', [PendonorController::class, 'store'])->name('pendonor.store');