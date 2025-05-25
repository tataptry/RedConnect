@extends('layouts.app')

@section('title', 'Lanjutan Info Donor - RedConnect')

@section('content')
<div class="min-h-screen bg-gray-50 px-4 py-8 flex flex-col items-center space-y-8">

  <!-- Syarat Donor Darah -->
  <div class="w-full max-w-4xl bg-white shadow-md rounded-xl border-l-4 border-red-600 p-6 space-y-4">
    <h2 class="text-2xl font-bold text-red-600">Syarat Donor Darah</h2>
    <ul class="list-disc list-inside text-gray-700 leading-relaxed">
      <li>Berusia 17–60 tahun bagi yang baru pertama kali mendonorkan darah.</li>
      <li>Dalam kondisi sehat, baik jasmani maupun rohani.</li>
      <li>Pendonor berusia 60 tahun atau lebih dari 65 tahun memerlukan perhatian khusus.</li>
      <li>Tekanan darah normal: 100/70–150/80 mmHg.</li>
      <li>Suhu tubuh antara 36,6–37,5°C.</li>
      <li>Denyut nadi: 50–100 kali per menit.</li>
      <li>Berat badan minimal 45 kg.</li>
      <li>Kadar hemoglobin: 12,5–17 g/dL, tidak lebih dari 20 g/dL.</li>
      <li>Bersedia mendonorkan darah secara sukarela (mengisi formulir persetujuan).</li>
      <li>Jarak minimal dari donor darah terakhir: 3 bulan.</li>
    </ul>
  </div>

  <!-- Manfaat Donor Darah -->
  <div class="w-full max-w-4xl bg-white shadow-md rounded-xl border-l-4 border-red-600 p-6 space-y-4">
    <h2 class="text-2xl font-bold text-red-600">🩺 Manfaat Donor Darah</h2>
    <ol class="list-decimal list-inside text-gray-700 leading-relaxed space-y-2">
      <li>
        <strong>Mengurangi Kadar Kolesterol:</strong> Menurunkan kadar LDL & trigliserida, mengurangi risiko aterosklerosis.
      </li>
      <li>
        <strong>Menjaga Kesehatan Jantung:</strong> Menstabilkan detak jantung, mengurangi risiko stroke, serangan jantung, dan kanker.
      </li>
      <li>
        <strong>Meningkatkan Produksi Eritrosit Baru:</strong> Merangsang sumsum tulang untuk membentuk sel darah merah baru yang lebih sehat.
      </li>
      <li>
        <strong>Deteksi Dini Penyakit:</strong> Pemeriksaan gratis sebelum donor dapat mendeteksi penyakit seperti malaria, hepatitis, HIV, dll.
      </li>
      <li>
        <strong>Membantu Kesehatan Mental:</strong> Memberi perasaan positif dan kepuasan karena bisa membantu sesama.
      </li>
    </ol>
  </div>

  <!-- Tombol Kembali -->
  <div class="w-full max-w-4xl text-left">
    <a href="{{ route('info') }}" class="text-sm text-red-600 hover:underline">
      ← Kembali ke halaman sebelumnya
    </a>
  </div>

</div>
@endsection
