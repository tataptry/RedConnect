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
  <a href="{{ route('info.donor.lanjutan') }}" class="inline-block mt-6 bg-red-600 text-white px-4 py-2 rounded-md text-sm hover:bg-red-700 transition">
  Seterusnya →
</a>
</div>


@endsection