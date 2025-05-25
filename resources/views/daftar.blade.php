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
        <form method="POST" action="{{ route('pendonor.daftar') }}" class="bg-white p-6 rounded shadow max-w-md w-full space-y-4">
            @csrf

            <div>
                <label for="name" class="block font-medium">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('name') }}">
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block font-medium">Email</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="blood_type" class="block font-medium">Golongan Darah</label>
                <input type="text" id="blood_type" name="blood_type" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('blood_type') }}">
                @error('blood_type')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="phone" class="block font-medium">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('phone') }}">
                @error('phone')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-red-700 text-white px-4 py-2 rounded hover:bg-red-800 transition w-full">
                Daftar
            </button>
        </form>
    @else
        <div class="bg-white p-6 rounded shadow max-w-md w-full space-y-4 text-center">
            <h2 class="text-2xl font-semibold mb-4">Profil Pendonor</h2>

            <p><strong>Nama Lengkap:</strong> {{ $pendonor->name }}</p>
            <p><strong>Email:</strong> {{ $pendonor->email }}</p>
            <p><strong>Golongan Darah:</strong> {{ $pendonor->blood_type }}</p>
            <p><strong>Nomor Telepon:</strong> {{ $pendonor->phone }}</p>

            <a href="{{ route('pendonor.daftar') }}" class="inline-block mt-6 bg-red-700 text-white px-4 py-2 rounded hover:bg-red-800 transition">
                Daftar Pendonor Baru
            </a>
        </div>
    @endif

</body>
</html>
