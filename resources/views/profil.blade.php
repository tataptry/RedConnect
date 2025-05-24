@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-xl font-bold text-red-600 mb-4">Profil Pendonor</h2>
    <ul class="space-y-2">
        <li><strong>Nama:</strong> {{ $donor->name }}</li>
        <li><strong>Email:</strong> {{ $donor->email }}</li>
        <li><strong>Golongan Darah:</strong> {{ $donor->blood_type }}</li>
        <li><strong>Telepon:</strong> {{ $donor->phone ?? '-' }}</li>
    </ul>
</div>
@endsection
