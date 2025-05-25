@extends('layouts.app')

@section('title', 'Tentang Kami - RedConnect')

@section('content')
<div class="max-w-6xl mx-auto py-12 px-4">
  <div class="mb-10 text-center">
    <h1 class="text-4xl font-bold text-red-700 mb-4">Tentang Kami</h1>
    <p class="text-gray-700 text-lg leading-relaxed max-w-3xl mx-auto">
      <span class="font-semibold">RedConnect</span> adalah platform digital yang didedikasikan untuk menghubungkan para pendonor darah dengan mereka yang membutuhkan secara cepat, aman, dan mudah. Kami percaya bahwa setiap tetes darah adalah harapan, dan dengan teknologi, kita bisa menyelamatkan lebih banyak nyawa.
    </p>
  </div>

  {{-- Misi --}}
  <div class="grid md:grid-cols-2 gap-6 mb-10">
    <div class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-2xl font-semibold text-red-600 mb-3"> Mempercepat Proses Pencocokan</h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        Kami berupaya mempercepat proses pencocokan antara pendonor dan penerima darah, terutama dalam situasi darurat yang membutuhkan penanganan segera.
      </p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-2xl font-semibold text-red-600 mb-3"> Meningkatkan Partisipasi</h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        Kami ingin meningkatkan kesadaran dan partisipasi aktif masyarakat terhadap kegiatan donor darah melalui edukasi dan kemudahan akses digital.
      </p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-2xl font-semibold text-red-600 mb-3"> Membangun Jaringan Kolaboratif</h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        Kami menjalin kerja sama dengan PMI, rumah sakit, universitas, dan komunitas untuk memperluas jangkauan dan dampak positif donor darah.
      </p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-2xl font-semibold text-red-600 mb-3">Fitur Digital Inovatif</h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        Kami mengembangkan fitur seperti notifikasi kebutuhan darah, rekam donor pribadi, dan sistem penghargaan kontribusi kemanusiaan berbasis data.
      </p>
    </div>
  </div>

  {{-- Visi --}}
  <div class="bg-white shadow-md rounded-lg p-6 mb-10">
    <h2 class="text-2xl font-semibold text-red-600 mb-3"> Visi Kami</h2>
    <p class="text-gray-700 text-lg leading-relaxed">
      Menjadi platform digital terpercaya yang mampu mengintegrasikan seluruh ekosistem donor darah di Indonesia, serta mendorong gaya hidup sehat dan peduli sesama melalui tindakan nyata dan berkelanjutan.
    </p>
  </div>

  {{-- Kolaborasi --}}
  <div class="grid md:grid-cols-2 gap-6 mb-10">
    <div class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-2xl font-semibold text-red-600 mb-3"> Palang Merah Indonesia (PMI)</h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        RedConnect mendukung penuh kerja sama dengan PMI sebagai lembaga utama dalam penyediaan dan distribusi darah di Indonesia.
      </p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-2xl font-semibold text-red-600 mb-3">Dinas Kesehatan</h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        Bekerja sama dalam edukasi, regulasi, dan pelaksanaan kampanye donor darah kepada masyarakat.
      </p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-2xl font-semibold text-red-600 mb-3"> Rumah Sakit & Puskesmas</h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        Terintegrasi langsung dengan fasilitas kesehatan untuk mempercepat proses pencocokan darah secara real-time.
      </p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-2xl font-semibold text-red-600 mb-3"> Sekolah & Universitas</h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        Mitra strategis kami dalam membentuk generasi muda yang sadar dan aktif dalam kegiatan donor darah.
      </p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6 md:col-span-2">
      <h2 class="text-2xl font-semibold text-red-600 mb-3"> Komunitas & Organisasi Sosial</h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        Kami terbuka untuk berkolaborasi dalam penyelenggaraan event donor darah dan kampanye sosial, baik skala lokal maupun nasional, yang terhubung langsung dengan sistem RedConnect.
      </p>
    </div>
  </div>

  {{-- Penutup --}}
  <div class="text-center mt-10">
    <p class="text-gray-700 text-lg font-medium">
      Bersama RedConnect, jadilah bagian dari gerakan kebaikan yang nyata. Karena setetes darahmu sangat berarti bagi yang membutuhkan.
    </p>
  </div>
</div>
@endsection
