@extends('layouts.admin')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-semibold mb-6">Edit Penyakit</h1>
        <form action="{{ route('penyakit.update', $penyakit) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama_penyakit" class="block text-sm font-medium text-gray-700">Nama Penyakit</label>
                <input type="text" name="nama_penyakit" id="nama_penyakit" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ $penyakit->nama_penyakit }}" required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>{{ $penyakit->deskripsi }}</textarea>
            </div>
            <div class="mb-4">
                <label for="solusi" class="block text-sm font-medium text-gray-700">Solusi</label>
                <textarea name="solusi" id="solusi" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ $penyakit->solusi }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Perbarui</button>
        </form>
    </div>
@endsection
