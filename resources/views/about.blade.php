@extends('layouts.app')

@section('title', 'Tentang Kami - RedConnect')

@section('content')

<!-- Section: Tentang Kami -->
<section class="py-16 px-6 bg-white">
  <div class="max-w-5xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-red-700 mb-6">Tentang Kami</h2>
    <p class="text-gray-700 text-lg leading-relaxed">
      RedConnect adalah platform digital yang didedikasikan untuk menghubungkan para pendonor darah dengan mereka yang membutuhkan secara cepat, aman, dan mudah.
      Kami percaya bahwa setiap tetes darah adalah harapan, dan dengan teknologi, kita bisa menyelamatkan lebih banyak nyawa.
    </p>
  </div>
</section>

<!-- Section: Manfaat Aplikasi -->
<section class="bg-red-50 py-16 px-6">
  <div class="max-w-6xl mx-auto">
    <h3 class="text-2xl font-bold text-center text-red-700 mb-10">Manfaat Menggunakan Aplikasi RedConnect</h3>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <!-- Manfaat 1 -->
      <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-lg transition">
        <h4 class="text-xl font-semibold text-red-600 mb-2">Mempercepat Proses Pencocokan</h4>
        <p class="text-gray-700">
          Kami berupaya mempercepat proses pencocokan antara pendonor dan penerima darah, terutama dalam situasi darurat yang membutuhkan penanganan segera.
        </p>
      </div>

      <!-- Manfaat 2 -->
      <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-lg transition">
        <h4 class="text-xl font-semibold text-red-600 mb-2">Meningkatkan Partisipasi</h4>
        <p class="text-gray-700">
          Kami ingin meningkatkan kesadaran dan partisipasi aktif masyarakat terhadap kegiatan donor darah melalui edukasi dan kemudahan akses digital.
        </p>
      </div>

      <!-- Manfaat 3 -->
      <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-lg transition">
        <h4 class="text-xl font-semibold text-red-600 mb-2">Membangun Jaringan Kolaboratif</h4>
        <p class="text-gray-700">
          Kami menjalin kerja sama dengan PMI, rumah sakit, universitas, dan komunitas untuk memperluas jangkauan dan dampak positif donor darah.
        </p>
      </div>

      <!-- Manfaat 4 -->
      <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-lg transition">
        <h4 class="text-xl font-semibold text-red-600 mb-2">Fitur Digital Inovatif</h4>
        <p class="text-gray-700">
          Kami mengembangkan fitur seperti notifikasi kebutuhan darah, rekam donor pribadi, dan sistem penghargaan kontribusi kemanusiaan berbasis data.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Section: Visi Kami -->
<section class="bg-white py-16 px-6">
  <div class="max-w-5xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-red-700 mb-6">Visi Misi</h2>
    <p class="text-gray-700 text-lg leading-relaxed text-center">
      Menjadi platform digital terpercaya yang mampu mengintegrasikan seluruh ekosistem donor darah di Indonesia, serta mendorong gaya hidup sehat dan peduli sesama melalui tindakan nyata dan berkelanjutan.
    </p>
  </div>
</section>

<!-- Mitra dan Kolaborasi -->
<section class="bg-white py-16 px-6">
  <div class="max-w-5xl mx-auto space-y-8">
    <h2 class="text-3xl font-bold text-red-700 mb-6">Mitra & Kolaborasi</h2>

    <!-- PMI -->
    <div>
      <h4 class="text-xl font-semibold text-red-600 mb-2">Palang Merah Indonesia (PMI)</h4>
      <p class="text-gray-700">
        RedConnect mendukung penuh kerja sama dengan PMI sebagai lembaga utama dalam penyediaan dan distribusi darah di Indonesia.
      </p>
    </div>

    <!-- Dinas Kesehatan -->
    <div>
      <h4 class="text-xl font-semibold text-red-600 mb-2">Dinas Kesehatan</h4>
      <p class="text-gray-700">
        Bekerja sama dalam edukasi, regulasi, dan pelaksanaan kampanye donor darah kepada masyarakat.
      </p>
    </div>

    <!-- Rumah Sakit -->
    <div>
      <h4 class="text-xl font-semibold text-red-600 mb-2">Rumah Sakit & Puskesmas</h4>
      <p class="text-gray-700">
        Terintegrasi langsung dengan fasilitas kesehatan untuk mempercepat proses pencocokan darah secara real-time.
      </p>
    </div>

    <!-- Sekolah -->
    <div>
      <h4 class="text-xl font-semibold text-red-600 mb-2">Sekolah & Universitas</h4>
      <p class="text-gray-700">
        Mitra strategis kami dalam membentuk generasi muda yang sadar dan aktif dalam kegiatan donor darah.
      </p>
    </div>

    <!-- Komunitas -->
    <div>
      <h4 class="text-xl font-semibold text-red-600 mb-2">Komunitas & Organisasi Sosial</h4>
      <p class="text-gray-700">
        Kami terbuka untuk berkolaborasi dalam penyelenggaraan event donor darah dan kampanye sosial, baik skala lokal maupun nasional, yang terhubung langsung dengan sistem RedConnect.
      </p>
    </div>
  </div>
</section>

@endsection
