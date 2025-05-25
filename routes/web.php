<?php

use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/form', function () {
    return view('form');
});
Route::post('/form-submit', function (Request $request) {
    // Validasi & simpan (saat ini hanya contoh)
    return back()->with('success', 'Form berhasil dikirim!');
})->name('form.submit');