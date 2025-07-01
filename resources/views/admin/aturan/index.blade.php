@extends('layouts.admin')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-semibold mb-6">Daftar Aturan</h1>
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('aturan.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 mb-4 inline-block">Tambah Aturan</a>
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Gejala</th>
                    <th class="border px-4 py-2">Penyakit</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aturans as $aturan)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $aturan->gejala->nama_gejala }}</td>
                        <td class="border px-4 py-2">{{ $aturan->penyakit->nama_penyakit }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('aturan.edit', $aturan) }}" class="text-yellow-500 hover:underline">Edit</a>
                            <form action="{{ route('aturan.destroy', $aturan) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
