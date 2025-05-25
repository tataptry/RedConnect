<header class="bg-red-600 text-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center"> 
        <h1 class="text-xl font-bold">RedConnect</h1> 
 
        <!-- Navigasi Desktop -->
        <nav class="space-x-6 hidden md:flex items-center">
            <a href="{{ route('beranda') }}" class="hover:underline">Beranda</a>
            <a href="/tentang-kami" class="hover:underline">Tentang Kami</a>
            <a href="/Kebijakan" class="hover:underline">Kebijakan</a>

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
        <a href="{{ route('beranda') }}" class="block py-2">Beranda</a>
        <a href="/tentang kami" class="block py-2">Tentang Kami</a>
        <a href="/Kebijakan" class="block py-2">Kebijakan</a>
    </div>
</header>

<script>
    // Toggle menu mobile 
    document.getElementById('menuBtn').addEventListener('click', () => { 
        document.getElementById('mobileMenu').classList.toggle('hidden'); 
    }); 
</script>