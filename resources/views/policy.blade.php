@extends('layouts.app')

@section('title', 'Kebijakan Layanan - RedConnect')

@section('content')
<div class="min-h-screen bg-gray-50 px-4 py-10 flex items-center justify-center">
  <div class="w-full max-w-2xl bg-white rounded-lg shadow p-8 space-y-8">

    <div>
      <h1 class="text-3xl font-bold text-red-700 text-center">Kebijakan Penggunaan Layanan</h1>
      <p class="text-center font-italic text-gray-500 text-sm mt-1">Diperbarui pada 25 Mei 2025</p>
    </div>

    <!-- Bagian: Pembuka -->
    <div class="space-y-4 text-gray-700 text-justify">
      <p class="font-semibold">Selamat Datang di RedConnect!</p>
      <p>
        Terima kasih telah menggunakan layanan kami (selanjutnya disebut “Layanan”). Layanan ini disediakan oleh RedConnect, yang beralamat di Jl. Kemanusiaan No.10, Jakarta Pusat, Indonesia.
      </p>
    </div>

    <!-- Bagian: Penggunaan Layanan -->
    <div>
      <h2 class="text-xl font-semibold text-red-600 mb-2">Penggunaan Layanan</h2>
      <div class="space-y-3 text-gray-700 text-justify">
        <p>Dengan menggunakan Layanan RedConnect, Anda (“Pengguna”) dianggap telah membaca, memahami, dan menyetujui seluruh syarat dan ketentuan yang berlaku.</p>
        <p>Kami dapat mengirimkan notifikasi penting melalui email atau nomor handphone Anda. Anda bebas menolak, namun kami tidak bertanggung jawab atas kerugian karena informasi yang tidak tersampaikan.</p>
        <p>RedConnect tidak bertanggung jawab atas kerugian akibat data yang salah atau penyalahgunaan informasi oleh pihak lain.</p>
        <p>Informasi dalam layanan dapat berubah tanpa pemberitahuan sebelumnya. Kami tidak bertanggung jawab atas kerugian langsung atau tidak langsung yang ditimbulkan.</p>
      </div>
    </div>

    <!-- Bagian: Akses Mobile -->
    <div>
      <h2 class="text-xl font-semibold text-red-600 mb-2">Akses Melalui Perangkat Mobile</h2>
      <p class="text-gray-700 text-justify">
        Beberapa fitur tersedia melalui perangkat mobile. Harap tidak menggunakan layanan dalam kondisi berbahaya seperti saat mengemudi.
      </p>
    </div>

    <!-- Bagian: Akun RedConnect -->
    <div>
      <h2 class="text-xl font-semibold text-red-600 mb-2">Akun RedConnect</h2>
      <div class="space-y-3 text-gray-700 text-justify">
        <p>Beberapa fitur hanya bisa digunakan jika Anda memiliki akun RedConnect. Anda bertanggung jawab atas keamanan akun Anda sendiri.</p>
        <p>Anda dapat meminta penghapusan akun dan data pribadi kapan saja melalui email resmi yang terdaftar.</p>
      </div>
    </div>

    <!-- Bagian: Poin & Reward -->
    <div>
      <h2 class="text-xl font-semibold text-red-600 mb-2">Poin & Penghargaan</h2>
      <p class="text-gray-700 text-justify">
        RedConnect dapat memberikan Poin untuk aktivitas tertentu, seperti donor darah. Poin dapat ditukarkan dengan Reward yang tersedia. Ketentuan dapat berubah sewaktu-waktu.
      </p>
    </div>

    <!-- Bagian: Perubahan & Penghentian -->
    <div>
      <h2 class="text-xl font-semibold text-red-600 mb-2">Perubahan & Penghentian Layanan</h2>
      <div class="space-y-3 text-gray-700 text-justify">
        <p>Kami terus menyempurnakan layanan. Fitur dapat ditambahkan, diubah, atau dihentikan baik sementara maupun permanen.</p>
        <p>Pengguna dapat berhenti menggunakan layanan kapan saja. Jika kami menghentikan layanan, kami akan memberikan pemberitahuan dan kesempatan untuk menghapus data.</p>
      </div>
    </div>

    <!-- Bagian: Tentang Kebijakan -->
    <div>
      <h2 class="text-xl font-semibold text-red-600 mb-2"> Tentang Kebijakan Ini</h2>
      <p class="text-gray-700 text-justify">
        RedConnect dapat memperbarui kebijakan ini tanpa pemberitahuan sebelumnya. Kami sarankan Anda mengecek halaman ini secara berkala. Jika tidak setuju dengan kebijakan yang berlaku, mohon hentikan penggunaan layanan.
      </p>
    </div>

    <!-- Kontak -->
    <div class="text-center text-sm text-gray-500 pt-6 border-t">
      Email: info@redconnect.org <br>
      Telp: +62 812-3456-7890
    </div>

  </div>
</div>
@endsection
