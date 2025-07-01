<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Diagnosa Penyakit Mental</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

    <!-- Navbar -->
     <nav class="bg-red-500 p-4">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 text-white text-2xl font-semibold">Sistem Diagnosa Penyakit Mental</div>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Menambahkan class aktif dengan Blade directives -->
                        <a href="/" class="text-white px-3 py-2 rounded-md text-sm font-medium {{ Request::is('/') ? 'bg-red-700' : '' }} hover:bg-red-700">Beranda</a>
                        <a href="/diagnosa" class="text-white px-3 py-2 rounded-md text-sm font-medium {{ Request::is('diagnosa') ? 'bg-red-700' : '' }} hover:bg-red-700">Diagnosa</a>
                        <a href="/tentang" class="text-white px-3 py-2 rounded-md text-sm font-medium {{ Request::is('tentang') ? 'bg-red-700' : '' }} hover:bg-red-700">Tentang</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-red-500 text-white py-6 mt-10">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-sm">&copy; 2025 Sistem Diagnosa Penyakit Mental || Mahasiswa Kupu Kupu.</p>
            <p class="text-sm">Dibuat oleh Mahasiswa UTB Bandung || by Kelompok 6 || Teknik Informatika. <a href="/tentang" class="underline">Tentang Kami</a></p>
           
        </div>
    </footer>

</body>
</html>
