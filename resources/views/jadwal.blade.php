@extends('layouts.app') 
 
@section('title', 'Jadwal Donor - RedConnect') 
 
@section('content') 
<section class="max-w-6xl mx-auto px-4 py-12"> 
    <h1 class="text-3xl font-bold text-red-700 mb-8">Jadwal Donor Darah</h1> 
 
    <div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-red-600"> 
        <h2 class="text-xl font-semibold text-red-600 mb-4">Jadwal dan Lokasi</h2> 
        <ul class="text-gray-700 list-disc list-inside space-y-2"> 
            <li><span class="font-semibold">Senin:</span> 08.30 - 14.00</li> 
            <li><span class="font-semibold">Selasa:</span> 09.00 - 15.00</li> 
            <li><span class="font-semibold">Rabu:</span> 09.00 - 13.30</li> 
            <li><span class="font-semibold">Kamis:</span> 10.00 - 16.00</li> 
            <li><span class="font-semibold">Jumat:</span> 08.00 - 11.30</li> 
            <li><span class="font-semibold">Sabtu:</span> 09.00 - 12.00</li> 
            <li><span class="font-semibold">Minggu:</span> Tutup</li> 
            <li><span class="font-semibold">Lokasi:</span> Unit Transfusi Darah PMI Kota Pontianak, Jl. Ahmad Yani No. 24, Pontianak</li> 
        </ul> 
 
        <p class="text-gray-600 mt-6"> 
            Untuk informasi kegiatan donor darah mobile di wilayah Pontianak dan sekitarnya, silakan pantau media sosial resmi PMI Kota Pontianak atau hubungi kami melalui kontak yang tersedia. 
        </p> 
    </div> 
</section> 
@endsection