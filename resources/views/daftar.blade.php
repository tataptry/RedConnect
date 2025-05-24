@extends('layouts.app')

@section('title', 'Daftar Pendonor - RedConnect')

@section('content')
<section class="bg-white py-16 px-4">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-red-700 mb-4 text-center">Formulir Pendaftaran Pendonor</h2>
        <p class="text-gray-700 text-center mb-8">
            Lengkapi data di bawah ini untuk menjadi bagian dari para pahlawan yang rela membantu sesama.
        </p>
        @if (session('success'))
    <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-4 text-center">
        {{ session('success') }}
    </div>
@endif

        <form action="{{ route('pendonor.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-red-50 p-6 rounded-lg shadow">
            @csrf
            <div>
                <label for="name" class="block font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div>
                <label for="email" class="block font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div>
                <label for="blood_type" class="block font-medium text-gray-700">Golongan Darah</label>
                <select name="blood_type" id="blood_type" class="w-full px-4 py-2 border rounded" required>
                    <option value="">Pilih</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div>
                <label for="phone" class="block font-medium text-gray-700">Nomor Telepon</label>
                <input type="text" name="phone" id="phone" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="md:col-span-2">
                <button type="submit" class="w-full bg-red-600 text-white py-3 rounded hover:bg-red-700 transition">
                    Daftar Sekarang
                </button>
            </div>
        </form>
    </div>
</section>
@if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
        <ul class="list-disc pl-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
