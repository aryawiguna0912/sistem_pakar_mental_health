@extends('layouts.admin')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-semibold mb-6">Tambah/Edit Aturan</h1>
        <form action="{{ isset($aturan) ? route('aturan.update', $aturan) : route('aturan.store') }}" method="POST">
            @csrf
            @if (isset($aturan))
                @method('PUT')
            @endif
            <div class="mb-4">
                <label for="nama_aturan" class="block text-sm font-medium text-gray-700">Nama Aturan</label>
                <input type="text" name="nama_aturan" id="nama_aturan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ $aturan->nama_aturan ?? '' }}" required>
            </div>
            <div class="mb-4">
                <label for="gejala_id" class="block text-sm font-medium text-gray-700">Gejala</label>
                <select name="gejala_id" id="gejala_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    <option value="">Pilih Gejala</option>
                    @foreach ($gejalas as $gejala)
                        <option value="{{ $gejala->id }}" {{ isset($aturan) && $aturan->gejala_id == $gejala->id ? 'selected' : '' }}>{{ $gejala->nama_gejala }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="penyakit_id" class="block text-sm font-medium text-gray-700">Penyakit</label>
                <select name="penyakit_id" id="penyakit_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    <option value="">Pilih Penyakit</option>
                    @foreach ($penyakits as $penyakit)
                        <option value="{{ $penyakit->id }}" {{ isset($aturan) && $aturan->penyakit_id == $penyakit->id ? 'selected' : '' }}>{{ $penyakit->nama_penyakit }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>{{ $aturan->deskripsi ?? '' }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Simpan</button>
        </form>
    </div>
@endsection
