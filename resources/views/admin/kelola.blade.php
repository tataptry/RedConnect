<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Pendonor - RedConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-red-700 text-white p-6 space-y-4">
            <h2 class="text-2xl font-bold mb-6">Admin RedConnect</h2>
            <nav class="space-y-2">
                <a href="{{ url('/admin/dashboard') }}" class="block py-2 px-3 rounded hover:bg-red-600">Dashboard</a>
                <a href="{{ url('/admin/kelola') }}" class="block py-2 px-3 rounded bg-red-600">Kelola Pendonor</a>
                <a href="{{ url('/admin/jadwal') }}" class="block py-2 px-3 rounded hover:bg-red-600">Kelola Jadwal Donor</a>
                <a href="{{ url('/') }}" class="block py-2 px-3 rounded hover:bg-red-600">Kembali ke Beranda</a>
            </nav>
        </aside>

        <!-- Konten Utama -->
        <main class="flex-1 p-10">
            <h1 class="text-3xl font-bold text-red-700 mb-6">Data Pendonor</h1>

            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-300 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if(count($pendonors) > 0)
            <div class="overflow-x-auto bg-white rounded-lg shadow p-4">
                <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
                    <thead class="bg-red-600 text-white">
                        <tr>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Umur</th>
                            <th class="px-4 py-2">Jenis Kelamin</th>
                            <th class="px-4 py-2">No HP</th>
                            <th class="px-4 py-2">Golongan Darah</th>
                            <th class="px-4 py-2">Riwayat Penyakit</th>
                            <th class="px-4 py-2">Pernah Donor</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
    @foreach($pendonors as $pendonor)
    <tr>
        <td class="px-4 py-2">{{ $pendonor->nama }}</td>
        <td class="px-4 py-2">{{ $pendonor->umur }}</td>
        <td class="px-4 py-2">{{ $pendonor->jenis_kelamin }}</td>
        <td class="px-4 py-2">{{ $pendonor->no_hp }}</td>
        <td class="px-4 py-2">{{ $pendonor->golongan_darah }}</td>
        <td class="px-4 py-2">{{ $pendonor->riwayat_penyakit }}</td>
        <td class="px-4 py-2">{{ $pendonor->pernah_donor }}</td>
        <td class="px-4 py-2">
            <form action="{{ url('/admin/kelola/' . $pendonor->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
                </table>
            </div>
            @else
                <p class="text-gray-600">Belum ada data pendonor.</p>
            @endif
        </main>
    </div>

</body>
</html>
