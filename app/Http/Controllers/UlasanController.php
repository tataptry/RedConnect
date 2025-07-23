<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    // Tampilkan ulasan di halaman publik
    public function index()
    {
        $ulasan = Ulasan::latest()->get();
        return view('beranda', compact('ulasan'));
    }

    // Simpan ulasan dari pengguna
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'info' => 'nullable|string|max:255',
            'review' => 'required|string',
        ]);

        Ulasan::create([
            'name' => $request->name,
            'info' => $request->info,
            'review' => $request->review,
        ]);

        return redirect()->back()->with('success', 'Ulasan berhasil ditambahkan!');
    }

    // Halaman kelola ulasan (admin)
    public function adminIndex()
    {
        $ulasan = Ulasan::latest()->get();
        return view('admin.ulasan', compact('ulasan'));
    }

    // Hapus ulasan
    public function destroy($id)
    {
        Ulasan::findOrFail($id)->delete();
        return redirect()->route('admin.ulasan')->with('success', 'Ulasan berhasil dihapus!');
    }
}
