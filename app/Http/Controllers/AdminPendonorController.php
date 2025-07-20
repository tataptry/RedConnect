<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendonor;

class AdminPendonorController extends Controller
{
    public function index()
    {
        $pendonors = Pendonor::all();
        return view('admin.kelola', compact('pendonors'));
    }

    public function destroy($id)
    {
        $pendonor = Pendonor::findOrFail($id);
        $pendonor->delete();

        return redirect('/admin/kelola')->with('success', 'Data pendonor berhasil dihapus.');
    }
}
