<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendonor;

class PendonorController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'blood_type' => 'required|string|max:3',
            'phone' => 'required|string|max:20',
        ]);

        $pendonor = Pendonor::create($validated);

        // Redirect ke halaman profil dengan id pendonor dan kirim pesan sukses
        return redirect()->route('pendonor.show', $pendonor->id)
                         ->with('success', 'Terima kasih telah mendaftar sebagai pendonor!');
    }

    public function show($id)
    {
        $pendonor = Pendonor::findOrFail($id);
        return view('profil', compact('pendonor'));
    }
}
