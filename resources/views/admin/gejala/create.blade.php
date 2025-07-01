@extends('layouts.admin')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-semibold mb-6">Tambah Gejala</h1>
        <form action="{{ route('gejala.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_gejala" class="block text-sm font-medium text-gray-700">Nama Gejala</label>
                <input type="text" name="nama_gejala" id="nama_gejala" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Simpan</button>
        </form>
    </div>
@endsection
