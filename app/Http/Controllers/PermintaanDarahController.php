<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PermintaanDarah;

class PermintaanDarahController extends Controller
{
    public function create()
    {
        return view('permintaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kontak' => 'required|string|max:20',
            'golongan' => 'required|string|max:3',
            'jumlah' => 'required|integer|min:1',
            'keterangan' => 'nullable|string'
        ]);

        PermintaanDarah::create([
            'nama' => $request->nama,
            'kontak' => $request->kontak,
            'golongan' => $request->golongan,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('beranda')->with('success', 'Permintaan darah berhasil diajukan!');
    }
}
