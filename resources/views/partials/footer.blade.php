<!-- Kontak & Footer -->
<footer id="kontak" class="bg-gray-800 text-white py-4 px-4">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between">

        <!-- Copyright kiri bawah -->
        <p class="text-sm">&copy; {{ date('Y') }} RedConnect. Semua hak dilindungi.</p>

        <!-- Sosial Media + Email di kanan bawah -->
        <div class="flex items-center gap-6 mt-3 md:mt-0 flex-wrap">
            <!-- Ikon Sosial Media -->
            <div class="flex items-center gap-4">
                <a href="https://instagram.com/donornow" target="_blank" aria-label="Instagram" class="hover:text-red-400">
                    <i data-feather="instagram" class="w-5 h-5"></i>
                </a>
                <a href="https://facebook.com/donornow" target="_blank" aria-label="Facebook" class="hover:text-blue-400">
                    <i data-feather="facebook" class="w-5 h-5"></i>
                </a>
                <a href="https://twitter.com/donornow" target="_blank" aria-label="Twitter" class="hover:text-blue-300">
                    <i data-feather="twitter" class="w-5 h-5"></i>
                </a>
            </div>

            <!-- Email di sebelah kanan ikon -->
            <p class="text-sm">
                Email: <a href="mailto:info@RedConnect.org" class="underline hover:text-red-400">info@RedConnect.org</a>
            </p>
        </div>
    </div>

    <!-- Feather Icons Script -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>feather.replace()</script>
</footer>
