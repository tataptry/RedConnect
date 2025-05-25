<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendonor;

class PendonorController extends Controller
{
    public function daftar(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'blood_type' => 'required|string|max:3',
                'phone' => 'required|string|max:20',
            ]);

            $pendonor = Pendonor::create($validated);

            // Tampilkan halaman daftar dengan data profil pendonor yang baru saja didaftarkan
            return view('daftar', [
                'pendonor' => $pendonor,
                'success' => 'Terima kasih telah mendaftar sebagai pendonor!',
            ]);
        }

        // Jika GET request, tampilkan form kosong
        return view('daftar');
    }
}
