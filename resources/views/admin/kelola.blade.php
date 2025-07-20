<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - RedConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-red-700 text-white p-6 space-y-4">
            <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
            <nav class="space-y-2">
                <a href="{{ url('/admin/dashboard') }}" class="block py-2 px-3 rounded hover:bg-red-600">Dashboard</a>
                <a href="{{ url('/admin/kelola') }}" class="block py-2 px-3 rounded hover:bg-red-600">Kelola Pendonor</a>
                <a href="{{ url('/admin/jadwal') }}" class="block py-2 px-3 rounded hover:bg-red-600">Kelola Jadwal Donor</a>
                <a href="{{ url('/') }}" class="block py-2 px-3 rounded hover:bg-red-600">Kembali ke Beranda</a>
            </nav>
        </aside>

        <!-- Konten -->
        <main class="flex-1 p-10">
            <h1 class="text-3xl font-bold text-red-700 mb-6">Selamat Datang, Admin!</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <a href="{{ url('/admin/kelola') }}" class="bg-white p-6 rounded-lg shadow hover:shadow-md border border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Data Pendonor</h2>
                    <p class="text-gray-600 text-sm">Kelola informasi pendonor darah.</p>
                </a>

                <a href="{{ url('/admin/jadwal') }}" class="bg-white p-6 rounded-lg shadow hover:shadow-md border border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Jadwal Donor</h2>
                    <p class="text-gray-600 text-sm">Atur jadwal dan lokasi kegiatan donor.</p>
                </a>
            </div>
        </main>
    </div>

</body>
</html>
