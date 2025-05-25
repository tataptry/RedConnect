<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Pendonor - RedConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-red-50 text-red-900 font-sans min-h-screen flex flex-col items-center pt-10">

    <h1 class="text-3xl font-bold mb-6">Form Pendaftaran Pendonor</h1>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-4 rounded mb-6 max-w-md w-full text-center font-semibold">
            {{ session('success') }}
        </div>
    @endif

    @if(!isset($pendonor))
        <form method="" action="" class="bg-white p-6 rounded shadow max-w-md w-full space-y-4">
            <div>
                <label for="name" class="block font-medium">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded px-3 py-2">
               
            </div>

            <div>
                <label for="email" class="block font-medium">Email</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div>
                <label for="blood_type" class="block font-medium">Golongan Darah</label>
                <input type="text" id="blood_type" name="blood_type" class="w-full border border-gray-300 rounded px-3 py-2" value="">
                
            </div>

            <div>
                <label for="phone" class="block font-medium">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" class="w-full border border-gray-300 rounded px-3 py-2" value="">
            </div>

            <button type="submit" class="bg-red-700 text-white px-4 py-2 rounded hover:bg-red-800 transition w-full">
                <a href="{{ route('beranda') }}">Daftar</a>
            </button>
        </form>
    @else
        <div class="bg-white p-6 rounded shadow max-w-md w-full space-y-4 text-center">
            <h2 class="text-2xl font-semibold mb-4">Profil Pendonor</h2>

            <p><strong>Nama Lengkap:</strong> </p>
            <p><strong>Email:</strong> </p>
            <p><strong>Golongan Darah:</strong> </p>
            <p><strong>Nomor Telepon:</strong> </p>

            <a href="{{ route('beranda') }}" class="inline-block mt-6 bg-red-700 text-white px-4 py-2 rounded hover:bg-red-800 transition">
                Daftar Pendonor Baru
            </a>
        </div>
    @endif

</body>
</html>
