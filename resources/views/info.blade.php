@extends('layouts.app')

@section('title', 'Informasi Donor - RedConnect')

@section('content')
<!-- Info Donor -->
<div class="py-6 px-8">
      <h1 class="text-3xl font-bold text-red-700 text-center">Jadilah Pahlawan, Cukup dengan Donor Darah</h1>
</div>
<div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-red-600 flex flex-col justify-between">
  <div>
    <h2 class="text-2xl font-bold text-red-600 mb-4">Info Donor</h2>
    <p class="text-gray-700 mb-4 text-lg leading-relaxed">
     Apa itu Donor Darah? 
Donor darah adalah kegiatan mendonorkan atau menyumbangkan darah secara sukarela. Donor ini dilakukan untuk memenuhi kebutuhan orang-orang yang memerlukan tambahan darah, seperti penderita trauma berat yang kehilangan banyak darah, anemia, talasemia, hemofilia, hingga leukemia.
Tujuan donor darah adalah untuk kepentingan sosial dan kemanusiaan. Prosedur ini berada di bawah pengawasan Palang Merah Indonesia (PMI) dan telah dijamin keamanannya dalam UU No. 36 Tahun 2009 tentang Kesehatan.
    </p>
    <p class="text-gray-700 text-lg leading-relaxed">
      Jangan ragu untuk menjadi pahlawan bagi orang lain! Setetes darahmu sangat berarti untuk kehidupan orang lain.
      Bersama RedConnect, mari wujudkan gerakan donor darah yang lebih teratur dan terorganisir.
    </p>
  </div>
  <a href="/info-donor" class="inline-block mt-6 bg-red-600 text-white px-4 py-2 rounded-md text-sm hover:bg-red-700 transition">
    Seterusnya →
  </a>
</div>

<!-- Kotak Terpisah: Daftar Pendonor -->
<div class="bg-gray-50 border-l-4 border-red-400 rounded-xl shadow-inner p-6 mt-6">
  <h3 class="text-xl font-semibold text-red-600 mb-4">Data Pendonor</h3>
  
  <ul class="space-y-4">
    <!-- Pendonor 1 -->
    <li class="flex items-center gap-4 bg-white rounded shadow p-3">
      <img src="/img/pendonor1.jpg" alt="Ayu Ramadhani" class="w-14 h-14 rounded-full object-cover shadow" />
      <div class="flex-1">
        <div class="font-semibold text-gray-800">Ayu Ramadhani</div>
        <div class="text-sm text-gray-500">Golongan Darah: A+ | Pendonor sejak 2018</div>
      </div>
    </li>
    
    <!-- Pendonor 2 -->
    <li class="flex items-center gap-4 bg-white rounded shadow p-3">
      <img src="/img/pendonor2.jpg" alt="Budi Santoso" class="w-14 h-14 rounded-full object-cover shadow" />
      <div class="flex-1">
        <div class="font-semibold text-gray-800">Budi Santoso</div>
        <div class="text-sm text-gray-500">Golongan Darah: O+ | Pendonor aktif</div>
      </div>
    </li>
    
    <!-- Pendonor 3 -->
    <li class="flex items-center gap-4 bg-white rounded shadow p-3">
      <img src="/img/pendonor3.jpg" alt="Citra Amelia" class="w-14 h-14 rounded-full object-cover shadow" />
      <div class="flex-1">
        <div class="font-semibold text-gray-800">Citra Amelia</div>
        <div class="text-sm text-gray-500">Golongan Darah: B+ | Pendonor pemula</div>
      </div>
    </li>
    
    <!-- Pendonor 4 -->
    <li class="flex items-center gap-4 bg-white rounded shadow p-3">
      <img src="/img/pendonor4.jpg" alt="Rizky Maulana" class="w-14 h-14 rounded-full object-cover shadow" />
      <div class="flex-1">
        <div class="font-semibold text-gray-800">Rizky Maulana</div>
        <div class="text-sm text-gray-500">Golongan Darah: AB+ | Donor sejak kuliah</div>
      </div>
    </li>
  </ul>
</div>

@endsection
