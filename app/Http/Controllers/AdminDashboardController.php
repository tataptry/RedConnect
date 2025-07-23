<?php

namespace App\Http\Controllers;

use App\Models\Pendonor;
use App\Models\PermintaanDarah; // <-- Tambahkan ini

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalPendonor = Pendonor::count();
        $permintaanDarah = PermintaanDarah::count(); // ambil total permintaan
        return view('admin.dashboard', compact('totalPendonor', 'permintaanDarah'));
    }
}

