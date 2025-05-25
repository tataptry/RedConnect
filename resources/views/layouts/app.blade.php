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
</html>
