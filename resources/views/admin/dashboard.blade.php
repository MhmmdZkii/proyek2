<style>
    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-top: 20px;
    }

    .card {
        background-color: #f4f4f4;
        border-radius: 10px;
        overflow: hidden;
        margin: 15px;
        width: 300px;
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 20px;
        background-color: #0F1C2F;
        color: white;
    }

    .card-title {
        font-size: 20px;
        text-align: center;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 14px;
    }

    .list-group-item {
        background-color: transparent;
        color: #fff;
    }

    .tombol a {
        background-color: #19bf00;
        border-radius: 20px;
        display: block;
        padding: 5px;
        text-align: center;
        color: white;
        text-decoration: none;
        margin-top: 10px;
    }

    .tombol a:hover {
        background-color: #158e02;
    }
</style>

<x-app-layout>
    <div x-data="{ open: true }" class="flex min-h-screen">
        <!-- Sidebar Wrapper with Alpine.js -->
        <button @click="open = !open" class="p-2 bg-gray-800 text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Sidebar -->
        <div x-show="open" class="w-64 bg-gray-800 text-white min-h-screen transition-all duration-300">
            @include('partials.sidebar')
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 bg-gray-100">
            <!-- Welcome Message -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("Hello!, ") }} {{ Auth::check() ? Auth::user()->name : 'Guest' }}
                    </div>
                </div>
            </div>

            <!-- Katalog Kamar -->
            <div class="mt-4 card-container">
                @if ($kamars->isEmpty())
                    <div class="text-center w-full">
                        <p class="text-gray-700">Tidak ada kamar tersedia.</p>
                    </div>
                @else
                    @foreach ($kamars as $kamar)
                        <div class="card" data-id="{{ $kamar->id }}">
                            <a href="{{ route('kamar.show', $kamar->id) }}">
                                <img src="{{ asset($kamar->foto) }}" class="card-img-top" alt="Foto Kamar">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $kamar->no_kamar }}</h5>
                                    <p class="card-text">{{ $kamar->deskripsi }}</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Harga:</strong> Rp{{ number_format($kamar->harga, 2) }}/Bulan</li>
                                        <li class="list-group-item"><strong>Lokasi:</strong> {{ $kamar->lokasi }}</li>
                                    </ul>
                                    <div class="tombol">
                                        <a href="{{ route('payment', $kamar->id) }}" class="">Sewa</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        @include('layouts.footer')
    </footer>
</x-app-layout>
