@extends('layouts.app')

@section('title', 'Jadwal Donor - RedConnect')

@section('content')
<section class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-red-700 mb-8">Jadwal Donor Darah</h1>

    <div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-red-600">
        <h2 class="text-xl font-semibold text-red-600 mb-4">Jadwal dan Lokasi</h2>
        <ul class="text-gray-700 list-disc list-inside space-y-2">
            <li><span class="font-semibold">Senin - Jumat:</span> 09.00 - 15.00</li>
            <li><span class="font-semibold">Sabtu:</span> 09.00 - 12.00</li>
            <li><span class="font-semibold">Lokasi:</span> Unit Transfusi Darah PMI Kota Terdekat</li>
            <li><span class="font-semibold">Syarat:</span> Sehat jasmani & rohani, berusia 17-60 tahun, berat badan minimal 45kg</li>
        </ul>

        <p class="text-gray-600 mt-6">
            Untuk informasi lokasi kegiatan donor darah mobile, silakan pantau media sosial resmi PMI setempat atau hubungi kami.
        </p>
    </div>
</section>
@endsection
