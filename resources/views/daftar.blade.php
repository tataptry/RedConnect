<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Pendonor - RedConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-red-50 text-red-900 font-sans min-h-screen flex flex-col">

    <main class="flex-grow max-w-xl mx-auto bg-white rounded-lg shadow-lg p-8 mt-10">

        <h1 class="text-3xl font-semibold mb-6 border-b-2 border-red-700 pb-2">
            Form Pendaftaran Pendonor
        </h1>

        @if ($errors->any())
            <div class="mb-6 bg-red-100 border border-red-700 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pendonor.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block font-semibold mb-1">Nama Lengkap:</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required
                       class="w-full border border-red-700 rounded px-3 py-2" />
            </div>
            <div>
                <label for="email" class="block font-semibold mb-1">Email:</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required
                       class="w-full border border-red-700 rounded px-3 py-2" />
            </div>
            <div>
                <label for="blood_type" class="block font-semibold mb-1">Golongan Darah:</label>
                <select id="blood_type" name="blood_type" required
                        class="w-full border border-red-700 rounded px-3 py-2">
                    <option value="">-- Pilih Golongan Darah --</option>
                    <option value="A+" {{ old('blood_type') == 'A+' ? 'selected' : '' }}>A+</option>
                    <option value="A-" {{ old('blood_type') == 'A-' ? 'selected' : '' }}>A-</option>
                    <option value="B+" {{ old('blood_type') == 'B+' ? 'selected' : '' }}>B+</option>
                    <option value="B-" {{ old('blood_type') == 'B-' ? 'selected' : '' }}>B-</option>
                    <option value="AB+" {{ old('blood_type') == 'AB+' ? 'selected' : '' }}>AB+</option>
                    <option value="AB-" {{ old('blood_type') == 'AB-' ? 'selected' : '' }}>AB-</option>
                    <option value="O+" {{ old('blood_type') == 'O+' ? 'selected' : '' }}>O+</option>
                    <option value="O-" {{ old('blood_type') == 'O-' ? 'selected' : '' }}>O-</option>
                </select>
            </div>
            <div>
                <label for="phone" class="block font-semibold mb-1">Nomor Telepon:</label>
                <input id="phone" name="phone" type="text" value="{{ old('phone') }}" required
                       class="w-full border border-red-700 rounded px-3 py-2" />
            </div>

            <button type="submit" class="bg-red-700 hover:bg-red-800 text-white font-semibold py-3 px-6 rounded">
                Daftar
            </button>
        </form>

    </main>

</body>
</html>
