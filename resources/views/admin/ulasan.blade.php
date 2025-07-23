<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Ulasan - RedConnect</title>
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
            <a href="{{ route('logout') }}" class="block py-2 px-3 rounded hover:bg-red-600">Logout</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <h1 class="text-3xl font-bold text-red-700 mb-6">Kelola Ulasan Pengguna</h1>

        @if(session('success'))
            <p class="mb-4 text-green-600">{{ session('success') }}</p>
        @endif

        <div class="bg-white shadow rounded-lg p-6">
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-red-600 text-white">
                        <th class="px-4 py-2 border">No</th>
                        <th class="px-4 py-2 border">Nama</th>
                        <th class="px-4 py-2 border">Info</th>
                        <th class="px-4 py-2 border">Ulasan</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ulasan as $index => $u)
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                            <td class="border px-4 py-2">{{ $u->name }}</td>
                            <td class="border px-4 py-2">{{ $u->info }}</td>
                            <td class="border px-4 py-2">{{ $u->review }}</td>
                            <td class="border px-4 py-2 text-center">
                                <form action="{{ route('admin.ulasan.destroy', $u->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus ulasan ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if($ulasan->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center py-4 text-gray-500">Belum ada ulasan.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>
