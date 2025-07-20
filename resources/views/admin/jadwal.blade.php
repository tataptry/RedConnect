<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Jadwal Donor - Admin RedConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-red-700 text-white min-h-screen p-6">
        <h2 class="text-2xl font-bold mb-8">RedConnect Admin</h2>
        <nav class="space-y-4 text-sm">
            <a href="{{ url('/admin/dashboard') }}" class="block py-2 px-3 rounded hover:bg-red-600">Dashboard</a>
            <a href="{{ url('/admin/pendonor') }}" class="block py-2 px-3 rounded hover:bg-red-600">Kelola Pendonor</a>
            <a href="{{ url('/admin/jadwal') }}" class="block py-2 px-3 rounded bg-red-800">Kelola Jadwal Donor</a>
            <a href="{{ url('/') }}" class="block py-2 px-3 rounded hover:bg-red-600">Kembali ke Beranda</a>
        </nav>
    </aside>

    <!-- Content -->
    <main class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-red-700">Kelola Jadwal Donor</h1>
            <a href="#" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">+ Tambah Jadwal</a>
        </div>

        <!-- Jadwal Table -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <table class="min-w-full table-auto text-sm">
                <thead class="bg-gray-200 text-left">
                    <tr>
                        <th class="px-6 py-3">Tanggal</th>
                        <th class="px-6 py-3">Waktu</th>
                        <th class="px-6 py-3">Lokasi</th>
                        <th class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Dummy data jadwal --}}
                    <tr class="border-t">
                        <td class="px-6 py-4">2025-07-25</td>
                        <td class="px-6 py-4">09:00 - 12:00</td>
                        <td class="px-6 py-4">RSUD Kota Makmur</td>
                        <td class="px-6 py-4 space-x-2">
                            <a href="#" class="text-blue-600 hover:underline">Edit</a>
                            <a href="#" class="text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-6 py-4">2025-08-01</td>
                        <td class="px-6 py-4">13:00 - 15:30</td>
                        <td class="px-6 py-4">Puskesmas Sukamaju</td>
                        <td class="px-6 py-4 space-x-2">
                            <a href="#" class="text-blue-600 hover:underline">Edit</a>
                            <a href="#" class="text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
