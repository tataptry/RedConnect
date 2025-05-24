<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendonor;

class PendonorController extends Controller
{
     public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'blood_type' => 'required|string|max:3',
            'phone' => 'required|string|max:20',
        ]);

        // Simpan ke database
        Pendonor::create($validated);

        // Redirect dengan pesan sukses
        return redirect('/daftar')->with('success', 'Terima kasih telah mendaftar sebagai pendonor!');
    }
}
