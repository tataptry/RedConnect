<?php

use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

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

/// Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('about');
});

//Halaman Kebijakan
Route::get('/Kebijakan', function () {
    return view('policy'); 
});

//Halaman lanjutan info donor
Route::get('/info-donor-lanjutan', function () {
    return view('info-donor-lanjutan');
})->name('info.donor.lanjutan');

// Halaman Pendaftaran
Route::get('/daftar', function () {
    return view('daftar');
});
// Menyimpan Data Pendaftar (contoh)
Route::post('/daftar', [PendonorController::class, 'store'])->name('pendonor.store');
Route::get('/profil/{id}', [PendonorController::class, 'show'])->name('pendonor.show');