<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - RedConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-red-700 text-white min-h-screen p-6 shadow-lg">
        <h2 class="text-2xl font-bold mb-8">RedConnect Admin</h2>
        <nav class="space-y-4 text-sm">
            <a href="{{ url('/admin/dashboard') }}" class="block py-2 px-3 rounded hover:bg-red-600 {{ request()->is('admin/dashboard') ? 'bg-red-800' : '' }}">
                Dashboard
            </a>
            <a href="{{ url('/admin/kelola') }}" class="block py-2 px-3 rounded hover:bg-red-600 {{ request()->is('admin/kelola') ? 'bg-red-800' : '' }}">
                Kelola Pendonor
            </a>
            <a href="{{ url('/') }}" class="block py-2 px-3 rounded hover:bg-red-600">
                Logout
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <h1 class="text-3xl font-bold text-red-700 mb-6">Dashboard Admin</h1>

        <!-- Statistik -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white shadow rounded-lg p-6 border-l-4 border-red-600">
                <h3 class="text-xl font-semibold text-red-600 mb-2">Total Pendonor</h3>
                <p class="text-3xl font-bold text-gray-800">50</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 border-l-4 border-red-600">
                <h3 class="text-xl font-semibold text-red-600 mb-2">Permintaan Darah</h3>
                <p class="text-3xl font-bold text-gray-800">10</p>
            </div>
        </div>
    </main>

</body>
</html>