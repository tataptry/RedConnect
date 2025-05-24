@extends('uts.app')

@section('content')
    <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-semibold mb-4 text-red-600">Formulir Donor Darah</h2>
        <p class="mb-6 text-gray-600">Silakan isi data berikut untuk mendaftar sebagai pendonor darah.</p>
        @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
        <form action="{{ route('form.submit') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 font-medium">Nama Lengkap</label>
                <input type="text" name="nama" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>

            <div>
                <label class="block mb-1 font-medium">Usia</label>
                <input type="number" name="usia" required min="17"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>

            <div>
                <label class="block mb-1 font-medium">Golongan Darah</label>
                <select name="golongan" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    <option value="">-- Pilih --</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>

            <div>
                <label class="block mb-1 font-medium">Tanggal Donor</label>
                <input type="date" name="tanggal" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded">
                    Kirim
                </button>
            </div>
        </form>
    </div>
@endsection