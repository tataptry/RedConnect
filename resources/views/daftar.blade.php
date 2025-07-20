@extends('layouts.app')

@section('title', 'Daftar - RedConnect')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-red-600 mb-6">Formulir Donor</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('daftar') }}">
            @csrf

            <!-- Nama -->
            <div class="mb-4">
                <label for="Nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="Nama" id="Nama" required
                    class="mt-1 block w-full px-3 py-2 border rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" />
            </div>

            <!-- Umur -->
            <div class="mb-4">
                <label for="Umur" class="block text-sm font-medium text-gray-700">Umur</label>
                <input type="number" name="Umur" id="Umur" required
                    class="mt-1 block w-full px-3 py-2 border rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" />
            </div>

            <!-- Jenis Kelamin -->
            <div class="mb-4">
                <label for="JenisKelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <select name="JenisKelamin" id="JenisKelamin" required
                    class="mt-1 block w-full px-3 py-2 border rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <!-- No HP -->
            <div class="mb-4">
                <label for="NoHP" class="block text-sm font-medium text-gray-700">No HP</label>
                <input type="tel" name="NoHP" id="NoHP" required
                    class="mt-1 block w-full px-3 py-2 border rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" />
            </div>

            <!-- Golongan Darah -->
            <div class="mb-4">
                <label for="GolDarah" class="block text-sm font-medium text-gray-700">Golongan Darah</label>
                <select name="GolDarah" id="GolDarah" required
                    class="mt-1 block w-full px-3 py-2 border rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500">
                    <option value="">-- Pilih Golongan Darah --</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>

            <!-- Riwayat Penyakit -->
            <div class="mb-4">
                <label for="RiwayatPenyakit" class="block text-sm font-medium text-gray-700">Riwayat Penyakit</label>
                <textarea name="RiwayatPenyakit" id="RiwayatPenyakit" rows="3" required
                    class="mt-1 block w-full px-3 py-2 border rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500"></textarea>
            </div>

            <!-- Pernah Donor -->
            <div class="mb-4">
                <label for="PernahDonor" class="block text-sm font-medium text-gray-700">Pernah Donor?</label>
                <select name="PernahDonor" id="PernahDonor" required
                    class="mt-1 block w-full px-3 py-2 border rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500">
                    <option value="">-- Pilih --</option>
                    <option value="Sudah">Sudah</option>
                    <option value="Belum">Belum</option>
                </select>
            </div>

            <!-- Tombol Submit -->
            <!-- Tombol Submit -->
        <div>
            <button type="submit"
                class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded transition">
               Kirim
             </button>
        </div>

        </form>
    </div>
</div>
@endsection