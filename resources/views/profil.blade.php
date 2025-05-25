<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil Pendonor - RedConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-red-50 text-red-900 font-sans min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-red-700 text-white text-center py-6 font-bold text-2xl tracking-widest shadow-md">
        RedConnect - Profil Pendonor
    </header>

    <!-- Main Content -->
    <main class="flex-grow max-w-xl mx-auto bg-white rounded-lg shadow-lg p-8 mt-10">

        <h1 class="text-3xl font-semibold mb-6 border-b-2 border-red-700 pb-2">
            Data Profil Pendonor
        </h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-700 text-green-800 px-4 py-3 rounded mb-6 font-semibold text-center">
                {{ session('success') }}
            </div>
        @endif

        @if(isset($pendonor))
            <div class="mb-4">
                <span class="font-bold inline-block w-40">Nama Lengkap:</span>
                <span>{{ $pendonor->name }}</span>
            </div>

            <div class="mb-4">
                <span class="font-bold inline-block w-40">Email:</span>
                <span>{{ $pendonor->email }}</span>
            </div>

            <div class="mb-4">
                <span class="font-bold inline-block w-40">Golongan Darah:</span>
                <span>{{ $pendonor->blood_type }}</span>
            </div>

            <div class="mb-6">
                <span class="font-bold inline-block w-40">Nomor Telepon:</span>
                <span>{{ $pendonor->phone }}</span>
            </div>
        @else
            <p class="text-red-700 font-semibold">Data pendonor tidak ditemukan.</p>
        @endif

        <a href="{{ url('/') }}"
           class="inline-block bg-red-700 hover:bg-red-800 text-white font-semibold py-3 px-6 rounded transition-colors duration-300">
            Kembali ke Beranda
        </a>

    </main>

    <!-- Footer -->
    <footer class="text-center text-red-700 text-sm py-6 mt-10 border-t border-red-700">
        &copy; 2025 RedConnect. Semua hak dilindungi.
    </footer>

</body>
</html>
