@extends('layouts.app')

@section('title', 'Beranda - RedConnect')

@section('content')
    <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center md:items-start  py-12 px-6 gap-8">
    <!-- Bagian Kiri: Gambar -->
        <div class="md:w-1/2 w-full flex justify-center md:justify-start px-0">
    <div class="w-full md:w-96 rounded-lg overflow-hidden shadow-lg">
        <img src="{{ asset('assets/img/beranda.jpg') }}" alt="Logo Donor Darah Indonesia"
             class="object-cover w-full h-72 md:h-96" />
    </div>
</div>


   <!-- Bagian Kanan: Teks -->
<div class="md:w-1/2 space-y-3 pt-6 md:pt-0">
    <h1 class="text-4xl font-bold text-red-700">Selamat Datang di RedConnect</h1>
   <p class="text-gray-700 text-lg" style="text-align: justify;">

        RedConnect hadir untuk mempermudah proses donor darah dan meningkatkan kesadaran masyarakat tentang pentingnya donor darah. Bergabunglah dengan kami untuk membantu menyelamatkan nyawa dan menyebarkan kebaikan. Kamu tidak perlu jubah atau kekuatan super untuk jadi pahlawan. Cukup datang ke lokasi donor, dan berikan sedikit waktumu. Darah yang kamu berikan adalah harapan bagi mereka yang tak kamu kenal.
    </p>
</div>
    </div>

    <!-- Info Donor & Jadwal Donor -->
    <section class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Info Donor -->
            <div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-red-600 flex flex-col justify-between">
                <div>
                    <h2 class="text-xl font-semibold text-red-600 mb-2">Info Donor</h2>
                    <p class="text-gray-700 mb-4">
                        Donor darah dapat membantu menyelamatkan nyawa hingga tiga orang. Prosesnya cepat, aman, dan bermanfaat tidak hanya bagi penerima tetapi juga pendonor.
                    </p>
                </div>
                <a href="{{ route('info') }}"
                   class="inline-block mt-auto bg-red-600 text-white px-4 py-2 rounded-md text-sm hover:bg-red-700 transition">
                    Seterusnya →
                </a>
            </div>

            <!-- Jadwal Donor -->
            <div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-red-600 flex flex-col justify-between">
                <div>
                    <h2 class="text-xl font-semibold text-red-600 mb-2">Jadwal Donor</h2>
                    <ul class="text-gray-700 list-disc list-inside mb-4">
                        <li>Senin - Jumat: 09.00 - 15.00</li>
                        <li>Sabtu: 09.00 - 12.00</li>
                        <li>Lokasi: PMI Kota Terdekat</li>
                    </ul>
                </div>
                <a href="/jadwal-donor"
                   class="inline-block mt-auto bg-red-600 text-white px-4 py-2 rounded-md text-sm hover:bg-red-700 transition">
                    Seterusnya →
                </a>
            </div>
        </div>
    </section>

    <!-- Carousel Ulasan -->
    <section class="bg-red-50 py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold text-center text-red-700 mb-12">Ulasan Para Pendonor</h2>

            <div class="relative">
                <div id="carousel" class="flex overflow-x-auto scroll-smooth gap-6 snap-x snap-mandatory pb-4">
                    @foreach ([
                        ['name' => 'Ayu Ramadhani', 'info' => 'Pendonor sejak 2018', 'review' => 'Donor darah membuatku merasa lebih sehat dan bermanfaat.', 'img' => '/assets/img/ava2.png'],
                        ['name' => 'Budi Santoso', 'info' => 'Pendonor aktif', 'review' => 'Rasanya luar biasa ketika tahu darah kita bisa menyelamatkan nyawa.', 'img' => '/assets/img/ava1.png'],
                        ['name' => 'Citra Amelia', 'info' => 'Pendonor pemula', 'review' => 'Awalnya takut, tapi ternyata donor darah sangat nyaman.', 'img' => '/assets/img/ava3.png'],
                        ['name' => 'Dewi Kartika', 'info' => 'Donor rutin tiap 3 bulan', 'review' => 'Saya merasa lebih fit setelah rutin mendonor. Ini juga jadi kebiasaan baik.', 'img' => '/assets/img/ava4.png'],
                        ['name' => 'Rizky Maulana', 'info' => 'Pendonor sejak kuliah', 'review' => 'Donor darah adalah kontribusi kecil dengan dampak besar bagi sesama.', 'img' => '/assets/img/ava5.png'],
                    ] as $pendonor)
                        <div class="min-w-full md:min-w-[50%] lg:min-w-[33%] bg-white p-6 rounded-xl shadow text-center snap-start">
                            <img src="{{ $pendonor['img'] }}" alt="{{ $pendonor['name'] }}" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover" />
                            <h3 class="text-lg font-semibold text-red-600">{{ $pendonor['name'] }}</h3>
                            <p class="text-gray-500 text-sm mb-2">{{ $pendonor['info'] }}</p>
                            <p class="text-gray-700 text-sm">"{{ $pendonor['review'] }}"</p>
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-center mt-6 gap-4">
                    <button onclick="scrollCarousel(-1)" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">&larr;</button>
                    <button onclick="scrollCarousel(1)" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">&rarr;</button>
                </div>
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
    
    <!-- Lokasi Donor -->
    <section class="bg-red-50 py-12 px-4">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <div>
                <h2 class="text-2xl font-bold text-red-700 mb-4">Lokasi Donor Darah di Pontianak</h2>
                <ul class="space-y-4 text-gray-700">
                    <li>
                        <strong>PMI Kota Pontianak</strong><br>
                        Jl. Gusti Sulung Lelanang No.25, Kota Pontianak, Kalimantan Barat 78121<br>
                        Telp: (0561) 734991
                    </li>
                    <li>
                        <strong>PMI Provinsi Kalimantan Barat</strong><br>
                        Jl. Ahmad Yani No.12, Pontianak Selatan, Pontianak<br>
                        Telp: (0561) 736402
                    </li>
                </ul>
            </div>

            <!-- Google Maps -->
            <div class="w-full h-80 rounded-lg shadow overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7720758027684!2d109.335148!3d-0.026635899999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d596cf0e2ab7f%3A0x7f23652b3ddc6b1c!2sPalang%20Merah%20Indonesia%20(PMI)%20Kota%20Pontianak!5e0!3m2!1sen!2sid!4v1716646482557!5m2!1sen!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
@endsection
