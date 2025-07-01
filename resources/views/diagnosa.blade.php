@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-4xl mx-auto">
        <h1 class="text-3xl font-semibold text-center mb-4">Diagnosa Penyakit Mental</h1>
        <p class="text-lg text-gray-700 mb-4">Pilih gejala yang Anda alami untuk memulai diagnosa.</p>
        
        <form action="/diagnosa" method="POST" id="diagnosaForm">
            @csrf
            <div class="space-y-4">
                @foreach($gejalas as $gejala)
                    <label class="block">
                        <input type="checkbox" name="gejala[]" value="{{ $gejala->id }}" class="mr-2"> {{ $gejala->nama_gejala }}
                    </label>
                @endforeach
            </div>

            <div class="mt-6 text-center">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Diagnosa</button>
            </div>
        </form>

        
        <div id="resultModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 hidden flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full">
                <h2 class="text-xl font-semibold mb-4">Hasil Diagnosa</h2>
                <ul id="penyakitList" class="space-y-2">
                    
                </ul>
                <button onclick="closeModal()" class="mt-4 px-4 py-2 bg-red-500 text-white rounded-lg">Tutup</button>
            </div>
        </div>
    </div>

    <script>
        
        const form = document.getElementById('diagnosaForm');
        form.addEventListener('submit', async function(event) {
            event.preventDefault(); 

            const formData = new FormData(form);
                const response = await fetch('/diagnosa', {
                method: 'POST',
                body: formData
            });

            const penyakit = await response.json();

            const penyakitList = document.getElementById('penyakitList');
            penyakitList.innerHTML = ''; 
            penyakit.forEach(p => {
                const li = document.createElement('li');
                li.innerHTML = `
                    <strong>${p.nama_penyakit}</strong>: ${p.deskripsi}
                    <br><em><strong>Solusi:</strong> ${p.solusi}</em>
                `;
                penyakitList.appendChild(li);
            });

            document.getElementById('resultModal').classList.remove('hidden');
        });

        function closeModal() {
            document.getElementById('resultModal').classList.add('hidden');
        }
    </script>
@endsection
