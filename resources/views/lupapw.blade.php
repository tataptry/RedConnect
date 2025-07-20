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

        <form method="POST" action="{{ route('lupapw') }}">
            @csrf

            <p class="text-center mt-4">
                Bermasalah dengan password?
            </p>

            <div>
                <center><button type="submit"
                    class="w-40 mt-2 bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded transition">
                    Kirim Link Reset 
                </button></center>

            </div>
        </form>
    </div>
</div>
@endsection
