@extends('layouts.app')

@section('title', 'Ajukan Permintaan Darah')

@section('content')
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6 mt-8">
    <h2 class="text-2xl font-bold text-red-600 mb-4">Ajukan Permintaan Darah</h2>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
            <ul class="list-disc list-inside">
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
                <option value="">Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Jumlah Kantong</label>
            <input type="number" name="jumlah" class="w-full border rounded p-2" min="1" value="1" required>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Keterangan (opsional)</label>
            <textarea name="keterangan" class="w-full border rounded p-2" rows="3"></textarea>
        </div>
        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Kirim Permintaan</button>
    </form>
</div>
@endsection
