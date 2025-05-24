<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedConnect</title>
    @vite('resources/css/app.css') <!-- Pastikan Vite aktif -->
</head>
<body class="bg-gray-50 text-gray-800">

<header class="bg-red-600 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">RedConnect</h1>

        <!-- Navigasi Desktop -->
        <nav class="space-x-6 hidden md:flex items-center">
            <a href="/form" class="hover:underline">Form Donor</a>
            <a href="/edukasi" class="hover:underline">Edukasi</a>
            <a href="/kontak" class="hover:underline">Kontak</a>

            <!-- Ikon Profil -->
            <a href="/profil" class="ml-2 hover:text-gray-200" aria-label="Profil">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24">
                    <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8V22h19.2v-2.8c0-3.2-6.4-4.8-9.6-4.8z"/>
                </svg>
            </a>
        </nav>

        <!-- Tombol Mobile Menu -->
        <button class="md:hidden focus:outline-none" id="menuBtn">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="md:hidden hidden px-4 pb-4 space-y-2">
        <a href="/form" class="block py-2">Form Donor</a>
        <a href="/edukasi" class="block py-2">Edukasi</a>
        <a href="/kontak" class="block py-2">Kontak</a>
        <a href="/profil" class="block py-2">Profil</a>
    </div>
</header>

<script>
    // Toggle menu mobile
    document.getElementById('menuBtn').addEventListener('click', () => {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
</script>

    <!-- CONTENT -->
    <main class="p-4">
        @yield('content')
    </main>
    
  <!-- Kontak & Footer -->
<footer id="kontak" class="bg-gray-800 text-white py-8 px-6">
    <div class="max-w-4xl mx-auto text-center space-y-3">
        <h3 class="text-xl font-semibold">Hubungi Kami</h3>
        <p>Email: <a href="mailto:info@donornow.org" class="underline hover:text-red-400">info@RedConnect.org</a></p>

        <div class="flex justify-center gap-6 text-white mt-4">
            <a href="https://instagram.com/donornow" target="_blank" aria-label="Instagram" class="hover:text-red-400">
                <i data-feather="instagram" class="w-6 h-6"></i>
            </a>
            <a href="https://facebook.com/donornow" target="_blank" aria-label="Facebook" class="hover:text-blue-400">
                <i data-feather="facebook" class="w-6 h-6"></i>
            </a>
            <a href="https://twitter.com/donornow" target="_blank" aria-label="Twitter" class="hover:text-blue-300">
                <i data-feather="twitter" class="w-6 h-6"></i>
            </a>
        </div>

        <p class="text-sm mt-4">&copy; {{ date('Y') }} RedConnect. Semua hak dilindungi.</p>
    </div>

    <!-- Feather Icons Script -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>feather.replace()</script>
</footer>

</body>
</html>