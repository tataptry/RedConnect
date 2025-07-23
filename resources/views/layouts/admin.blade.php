<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin - RedConnect')</title>
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
            <a href="{{ url('/admin/ulasan') }}" class="block py-2 px-3 rounded hover:bg-red-600 {{ request()->is('admin/ulasan') ? 'bg-red-800' : '' }}">
                Kelola Ulasan
            </a>
            <a href="{{ url('/') }}" class="block py-2 px-3 rounded hover:bg-red-600">
                Logout
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        @yield('content')
    </main>

</body>
</html>
