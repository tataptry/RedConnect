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
            'Nama' => 'required|string',
            'Umur' => 'required|numeric',
            'JenisKelamin' => 'required',
            'NoHP' => 'required|string',
            'GolDarah' => 'required|string',
            'RiwayatPenyakit' => 'required|string',
            'PernahDonor' => 'required|string',
        ]);

        // Simpan ke database
        Pendonor::create([
            'nama' => $validated['Nama'],
            'umur' => $validated['Umur'],
            'jenis_kelamin' => $validated['JenisKelamin'],
            'no_hp' => $validated['NoHP'],
            'golongan_darah' => $validated['GolDarah'],
            'riwayat_penyakit' => $validated['RiwayatPenyakit'],
            'pernah_donor' => $validated['PernahDonor'],
        ]);

        return redirect('/')->with('success', 'Data berhasil dikirim!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendonorController extends Controller
{
    //
}
