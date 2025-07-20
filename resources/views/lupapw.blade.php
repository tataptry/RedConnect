@extends('layouts.app')

@section('title', 'Lupa Password - RedConnect')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-red-600 mb-6">RedConnect</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('lupapw') }}"><center>
            @csrf
            <div class="w-center">
                <img src="{{ asset('assets/img/padlock.png') }}" alt="gembok"
                class="object-cover h-20 md:h-20" />
            </div>

            <p class="text-center font-semibold mt-4">
               Reset Your Password
            </p>
            
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2"></label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"
                    placeholder="masukkan email anda">
            </div>

            <div>
                <button type="submit"
                    class="w-40 mt-2 bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded transition">
                    Kirim Link Reset 
                </button></center>

            </div>
        </form>
    </div>
</div>
@endsection
