<header class="bg-red-600 text-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">RedConnect</h1>

        <!-- Navigasi Desktop -->
        <nav class="space-x-6 hidden md:flex items-center">
            <a href="{{ route('beranda') }}" class="hover:underline">Beranda</a>
            <a href="/tentang-kami" class="hover:underline">Tentang Kami</a>
            <a href="/Kebijakan" class="hover:underline">Kebijakan</a>
            @guest
            <a href="{{ route('login') }}"
             class="bg-white text-red-600 font-semibold px-4 py-2 rounded hover:bg-red-100 transition">
            Login
             </a>
            @endguest
        </nav>

        <!-- Tombol Mobile Menu -->
        <button class="md:hidden focus:outline-none" id="menuBtn" aria-expanded="false" aria-controls="mobileMenu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="md:hidden hidden bg-red-600 px-4 pb-4 pt-2 space-y-2 transition-all duration-300">
        <a href="{{ route('beranda') }}" class="block py-2 border-b border-white/20">Beranda</a>
        <a href="/tentang-kami" class="block py-2 border-b border-white/20">Tentang Kami</a>
        <a href="/Kebijakan" class="block py-2">Kebijakan</a>
    </div>
</header>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');

        // Update aria-expanded for accessibility
        const expanded = menuBtn.getAttribute('aria-expanded') === 'true';
        menuBtn.setAttribute('aria-expanded', !expanded);
    });
</script>
