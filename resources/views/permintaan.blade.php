@extends('layouts.app')

@section('title', 'Permintaan Darah')

@section('content')
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6 mt-6">
    <h2 class="text-2xl font-bold text-red-700 mb-4">Ajukan Permintaan Darah</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('permintaan.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-medium">Nama</label>
            <input type="text" name="nama" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Kontak</label>
            <input type="text" name="kontak" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Golongan Darah</label>
            <select name="golongan" class="w-full border rounded p-2" required>
                <option value="">-- Pilih Golongan --</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">
            Kirim Permintaan
        </button>
    </form>
</div>
@endsection
