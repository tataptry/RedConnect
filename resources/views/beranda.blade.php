@extends('layouts.app')

@section('title', 'Beranda - RedConnect')

@section('content')
    <!-- Hero Section -->
    <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center md:items-start py-16 px-6 gap-12">
        <!-- Gambar -->
        <div class="md:w-1/2 w-full flex justify-center md:justify-start">
            <div class="w-full md:w-96 rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('assets/img/beranda.jpg') }}" alt="Logo Donor Darah Indonesia" class="object-cover w-full h-72 md:h-96" />
            </div>
        </div>
        <!-- Teks -->
        <div class="md:w-1/2 space-y-5">
            <h1 class="text-4xl font-bold text-red-700 leading-tight">Selamat Datang di RedConnect</h1>
            <p class="text-gray-700 text-lg leading-relaxed text-justify">
                RedConnect hadir untuk mempermudah proses donor darah dan meningkatkan kesadaran masyarakat tentang pentingnya donor darah. 
                Bergabunglah dengan kami untuk membantu menyelamatkan nyawa dan menyebarkan kebaikan. 
                Kamu tidak perlu jubah atau kekuatan super untuk jadi pahlawan. Cukup datang ke lokasi donor, dan berikan sedikit waktumu. 
                Darah yang kamu berikan adalah harapan bagi mereka yang tak kamu kenal.
            </p>
        </div>
    </div>

    <!-- Info Donor & Jadwal -->
    <section class="max-w-6xl mx-auto px-6 py-12">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Info Donor -->
            <div class="bg-white shadow-md rounded-xl p-8 border-l-4 border-red-600 flex flex-col justify-between">
                <div>
                    <h2 class="text-2xl font-semibold text-red-600 mb-4">Info Donor</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Donor darah dapat membantu menyelamatkan nyawa hingga tiga orang. 
                        Prosesnya cepat, aman, dan bermanfaat tidak hanya bagi penerima tetapi juga pendonor.
                    </p>
                </div>
                <a href="{{ route('info') }}" class="inline-block mt-6 bg-red-600 text-white px-5 py-3 rounded-md text-sm font-medium hover:bg-red-700 transition">
                    Seterusnya →
                </a>
            </div>
            <!-- Jadwal Donor -->
            <div class="bg-white shadow-md rounded-xl p-8 border-l-4 border-red-600 flex flex-col justify-between">
                <div>
                    <h2 class="text-2xl font-semibold text-red-600 mb-4">Jadwal Donor</h2>
                    <ul class="text-gray-700 list-disc list-inside leading-relaxed space-y-2">
                        <li>Senin - Jumat: 09.00 - 15.00</li>
                        <li>Sabtu: 09.00 - 12.00</li>
                        <li>Lokasi: PMI Kota Terdekat</li>
                    </ul>
                </div>
                <a href="/jadwal-donor" class="inline-block mt-6 bg-red-600 text-white px-5 py-3 rounded-md text-sm font-medium hover:bg-red-700 transition">
                    Seterusnya →
                </a>
            </div>
        </div>
    </section>

    <!-- Daftar Donor & Permintaan Darah -->
    <section class="max-w-3xl mx-auto px-6 py-12">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Daftar Donor -->
            <div class="flex-1 shadow-lg rounded-xl px-6 py-6 bg-red-600 flex items-center justify-center hover:scale-105 transition-transform duration-200">
                <a href="{{ route('daftar') }}" class="text-xl font-bold text-center text-white">
                    Daftar Donor Sekarang
                </a>
            </div>
            <!-- Permintaan Darah -->
            <div class="flex-1 shadow-lg rounded-xl px-6 py-6 bg-red-500 flex items-center justify-center hover:scale-105 transition-transform duration-200">
                <a href="{{ route('permintaan.create') }}" class="text-xl font-bold text-center text-white transition">
                    Ajukan Permintaan Darah
                </a>
            </div>
        </div>
    </section>

    <!-- Carousel Ulasan -->
    <section class="bg-red-50 py-16 px-6">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl font-bold text-center text-red-700 mb-12">Ulasan Para Pendonor</h2>
            <div class="relative">
                <div id="carousel" class="flex overflow-x-auto scroll-smooth gap-6 snap-x snap-mandatory pb-4">
                    @foreach ($ulasan as $pendonor)
                        <div class="min-w-full md:min-w-[50%] lg:min-w-[33%] bg-white p-6 rounded-xl shadow text-center snap-start">
                            <div class="w-24 h-24 mx-auto mb-4 flex items-center justify-center rounded-full bg-red-200 text-red-700 text-3xl font-bold">
                                {{ strtoupper(substr($pendonor->name,0,1)) }}
                            </div>
                            <h3 class="text-lg font-semibold text-red-600">{{ $pendonor->name }}</h3>
                            <p class="text-gray-500 text-sm mb-2">{{ $pendonor->info }}</p>
                            <p class="text-gray-700 text-sm leading-relaxed">"{{ $pendonor->review }}"</p>
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-center mt-8 gap-6">
                    <button onclick="scrollCarousel(-1)" class="bg-red-600 text-white px-5 py-2 rounded hover:bg-red-700">&larr;</button>
                    <button onclick="scrollCarousel(1)" class="bg-red-600 text-white px-5 py-2 rounded hover:bg-red-700">&rarr;</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Ulasan -->
    <section class="max-w-xl mx-auto bg-white shadow-md rounded-xl p-8 mt-12">
        <h3 class="text-2xl font-bold text-red-700 mb-6">Tulis Ulasan Anda</h3>
        @if(session('success'))
            <p class="text-green-600 mb-4">{{ session('success') }}</p>
        @endif
        <form action="{{ route('ulasan.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium">Nama</label>
                <input type="text" name="name" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block font-medium">Info (opsional)</label>
                <input type="text" name="info" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block font-medium">Ulasan</label>
                <textarea name="review" class="w-full border rounded p-2" rows="4" required></textarea>
            </div>
            <button type="submit" class="bg-red-500 text-white px-5 py-3 rounded hover:bg-red-700">
                Kirim Ulasan
            </button>
        </form>
    </section>

    <!-- Lokasi Donor -->
    <section class="bg-red-50 py-16 px-6 mt-12">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            <div>
                <h2 class="text-3xl font-bold text-red-700 mb-6">Lokasi Donor Darah di Pontianak</h2>
                <ul class="space-y-6 text-gray-700 leading-relaxed">
                    <li>
                        <strong>PMI Kota Pontianak</strong><br>
                        Jl. Gusti Sulung Lelanang No.25, Kota Pontianak, Kalimantan Barat 78121<br>
                        Telp: (0561) 734991
                    </li>
                </ul>
            </div>
            <div class="w-full h-80 rounded-lg shadow overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8169718958475!2d109.3420606!3d-0.0471062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59fa572cb141%3A0x89ed4076cb0d4441!2sPMI%20Kota%20Pontianak!5e0!3m2!1sid!2sid!4v1753011215458!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Script Carousel -->
    <script>
        function scrollCarousel(direction) {
            const carousel = document.getElementById("carousel");
            const scrollAmount = carousel.offsetWidth;
            carousel.scrollBy({
                left: scrollAmount * direction,
                behavior: 'smooth'
            });
        }
    </script>
@endsection
