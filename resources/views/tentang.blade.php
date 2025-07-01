@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-4xl mx-auto">
        <h1 class="text-3xl font-semibold text-center mb-4">Tentang Kami</h1>
        <p class="text-lg text-gray-700 mb-6 text-center">
            Kami adalah tim pengembang yang berfokus pada pembuatan sistem diagnosa penyakit mental yang dapat membantu masyarakat memahami gangguan mental lebih baik. 
            Berikut adalah anggota kami dan sedikit tentang kami.
        </p>

        <!-- Informasi Kelompok -->
        <div class="space-y-8">
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-blue-500">Anggota Kelompok</h2>
                <p class="text-lg text-gray-700 mt-2"></p>
            </div>

            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
              
                <div class="text-center">
                    <img src="https://mmc.tirto.id/image/share/socmed/2016/12/23/sssss_ratio-16x9.jpg" alt="Anggota 1" class="w-32 h-32 object-cover rounded-full mx-auto shadow-lg">
                    <h3 class="mt-4 text-xl font-semibold text-blue-500">Arya Wiguna</h3>
                    <p class="text-gray-700 mt-2">Mahasiswa Teknik Informatika || UTB Bandung || Angkatan 21</p>
                </div>
                
                <div class="text-center">
                    <img src="https://d1tgyzt3mf06m9.cloudfront.net/v3-staging/2023/09/karakter-anime-naruto-mimpi-jadi-hokage-Cover.png" alt="Anggota 2" class="w-32 h-32 object-cover rounded-full mx-auto shadow-lg">
                    <h3 class="mt-4 text-xl font-semibold text-blue-500">Fadhly Raynaldi</h3>
                    <p class="text-gray-700 mt-2">Mahasiswa Teknik Informatika || UTB Bandung || Angkatan 21</p>
                </div>
                <div class="text-center">
                    <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/953/2025/05/27/Kakashi-Hatake-sering-telat-di-anime-Naruto-413569089.jpg" alt="Anggota 2" class="w-32 h-32 object-cover rounded-full mx-auto shadow-lg">
                    <h3 class="mt-4 text-xl font-semibold text-blue-500">Riski Maulana</h3>
                    <p class="text-gray-700 mt-2">Mahasiswa Teknik Informatika || UTB Bandung || Angkatan 21</p>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="text-center">
                    <img src="https://i.pinimg.com/236x/8b/a0/ee/8ba0ee48e33086d78384dff595a1d97e.jpg" alt="Anggota 1" class="w-32 h-32 object-cover rounded-full mx-auto shadow-lg">
                    <h3 class="mt-4 text-xl font-semibold text-blue-500">Dadi</h3>
                    <p class="text-gray-700 mt-2">Mahasiswa Teknik Informatika || UTB Bandung || Angkatan 21</p>
                </div>
                
                <div class="text-center">
                    <img src="https://asset-2.tstatic.net/jogja/foto/bank/images/Jiraiya.jpg" alt="Anggota 2" class="w-32 h-32 object-cover rounded-full mx-auto shadow-lg">
                    <h3 class="mt-4 text-xl font-semibold text-blue-500">Muhamad Tiansyah Dewa</h3>
                    <p class="text-gray-700 mt-2">Mahasiswa Teknik Informatika || UTB Bandung || Angkatan 21</p>
                </div>
                 <div class="text-center">
                    <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/953/2024/06/26/Shino-Aburame-dengan-kacamata-900542717.jpg" alt="Anggota 3" class="w-32 h-32 object-cover rounded-full mx-auto shadow-lg">
                    <h3 class="mt-4 text-xl font-semibold text-blue-500">Dani Nurdiana</h3>
                    <p class="text-gray-700 mt-2">Mahasiswa Teknik Informatika || UTB Bandung || Angkatan 21</p>
                </div>
            </div>
        </div>

        <!-- Info Kelompok -->
        <div class="mt-12 text-center">
            <h2 class="text-2xl font-semibold text-blue-500">Tentang Tim Kami</h2>
            <p class="text-lg text-gray-700 mt-4">
                Kami adalah tim yang bersemangat untuk membantu masyarakat lebih memahami masalah kesehatan mental. Melalui aplikasi ini, kami berharap dapat memberikan dampak positif dalam meningkatkan kesadaran dan dukungan terhadap orang-orang yang menderita penyakit mental.
            </p>
        </div>
    </div>
@endsection
