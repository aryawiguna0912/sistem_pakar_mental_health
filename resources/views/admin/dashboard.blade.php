@extends('layouts.admin')

@section('content')
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-semibold text-center mb-4">Selamat Datang {{ Auth::user()->name }}</h1>
        <p class="text-lg text-gray-700">
            Selamat datang di dashboard utama, tempat Anda dapat mengelola sistem secara keseluruhan. Akses berbagai fitur dengan menggunakan sidebar di sebelah kiri.
        </p>

        <div class="mt-6">
            <h2 class="text-2xl font-semibold text-gray-800">Dashboard</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <!-- Card for Gejala -->
                <div class="bg-blue-100 p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <h3 class="text-xl font-semibold text-blue-800">Total Gejala</h3>
                <p class="text-3xl font-bold text-blue-600">{{ $totalGejala }}</p>
            </div>

            <!-- Card for Penyakit -->
            <div class="bg-green-100 p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <h3 class="text-xl font-semibold text-green-800">Total Penyakit</h3>
                <p class="text-3xl font-bold text-green-600">{{ $totalPenyakit }}</p>
            </div>

            <!-- Card for Aturan -->
            <div class="bg-yellow-100 p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <h3 class="text-xl font-semibold text-yellow-800">Total Aturan</h3>
                <p class="text-3xl font-bold text-yellow-600">{{ $totalAturan }}</p>
            </div>
            </div>
        </div>
        <div class="mt-6 bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-700">Aktivitas Terbaru</h3>
            <ul>
                @foreach ($aktivitas as $item)
                    <li class="py-2 border-b">
                        <strong>{{ $item->judul }}</strong><br>
                        <span class="text-sm text-gray-600">{{ $item->deskripsi }}</span>
                        <span class="text-xs text-gray-400">{{ $item->created_at->diffForHumans() }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
