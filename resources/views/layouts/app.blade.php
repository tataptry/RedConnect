<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'RedConnect')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    @include('partials.header')

    <main class="p-6 min-h-screen">
        @yield('content')
    </main>

    @include('partials.footer')
    
</body>
<script>
    document.getElementById('menuBtn').addEventListener('click', () => {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });

    // Scroll detection
    let lastScroll = 0;
    const header = document.getElementById('mainHeader');

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll > lastScroll && currentScroll > 60) {
            header.classList.add('-translate-y-full'); // sembunyikan
        } else {
            header.classList.remove('-translate-y-full'); // tampilkan
        }

        lastScroll = currentScroll;
    });
</script>

</html>
