<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - RedConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Header -->
    <header class="bg-red-600 text-white py-4 shadow">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Admin RedConnect</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-10 px-4 max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-red-700 mb-6">Dashboard Admin</h2>

        <!-- Statistik -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white shadow rounded-lg p-6 border-l-4 border-red-600">
                <h3 class="text-xl font-semibold text-red-600 mb-2">Total Pendonor</h3>
                <p class="text-3xl font-bold text-gray-800">128</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 border-l-4 border-red-600">
                <h3 class="text-xl font-semibold text-red-600 mb-2">Permintaan Darah</h3>
                <p class="text-3xl font-bold text-gray-800">42</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 border-l-4 border-red-600">
                <h3 class="text-xl font-semibold text-red-600 mb-2">Event Donor</h3>
                <p class="text-3xl font-bold text-gray-800">5</p>
            </div>
        </div>

        <!-- Navigasi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <a href="#" class="block bg-white shadow hover:shadow-lg transition p-6 rounded-lg border border-gray-200">
                <h4 class="text-lg font-semibold text-red-700 mb-2">Kelola Data Pendonor</h4>
                <p class="text-gray-600">Lihat dan edit informasi pendonor darah.</p>
            </a>

            <a href="#" class="block bg-white shadow hover:shadow-lg transition p-6 rounded-lg border border-gray-200">
                <h4 class="text-lg font-semibold text-red-700 mb-2">Kelola Jadwal Donor</h4>
                <p class="text-gray-600">Atur dan perbarui jadwal kegiatan donor.</p>
            </a>

            <a href="#" class="block bg-white shadow hover:shadow-lg transition p-6 rounded-lg border border-gray-200">
                <h4 class="text-lg font-semibold text-red-700 mb-2">Permintaan Darah</h4>
                <p class="text-gray-600">Pantau dan proses permintaan darah masuk.</p>
            </a>

            <a href="/" class="block bg-white shadow hover:shadow-lg transition p-6 rounded-lg border border-gray-200">
                <h4 class="text-lg font-semibold text-red-700 mb-2">Kembali ke Beranda</h4>
                <p class="text-gray-600">Keluar dari halaman admin.</p>
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-10 py-4 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} RedConnect. All rights reserved.
    </footer>

</body>
</html>
