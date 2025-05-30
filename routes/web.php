<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendonorController;

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

//Halaman Kebijakan
Route::get('/Kebijakan', function () {
    return view('policy'); // <-- sesuai nama file
})->name('kebijakan');