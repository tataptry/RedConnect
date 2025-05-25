<header id="mainHeader" class="bg-red-600 text-white shadow-md sticky top-0 z-50 transition-transform duration-300 transform">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center"> 
        <h1 class="text-xl font-bold">RedConnect</h1> 

        <!-- Navigasi Desktop -->
        <nav class="space-x-6 hidden md:flex items-center">
            <a href="{{ route('beranda') }}" class="hover:underline">Beranda</a>
            <a href="{{ url('/tentang-kami') }}" class="hover:underline">Tentang Kami</a>
            <a href="{{ url('/kebijakan') }}" class="hover:underline">Kebijakan</a>

            <!-- Ikon Profil -->
            <a href="{{ route('profil') }}" class="ml-2 hover:text-gray-200" aria-label="Profil">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24">
                    <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8V22h19.2v-2.8c0-3.2-6.4-4.8-9.6-4.8z"/>
                </svg>
            </a>
        </nav>

        <!-- Tombol Mobile -->
        <button id="menuBtn" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden px-4 pb-4 space-y-2">
        <a href="{{ route('beranda') }}" class="block py-2">Beranda</a>
        <a href="{{ url('/tentang-kami') }}" class="block py-2">Tentang Kami</a>
        <a href="{{ url('/kebijakan') }}" class="block py-2">Kebijakan</a>
        <a href="{{ route('profil') }}" class="block py-2">Profil</a>
    </div>
</header>
