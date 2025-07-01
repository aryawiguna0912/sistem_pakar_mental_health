<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<body class="bg-gray-100">

    <!-- Sidebar and Main Content -->
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 p-6 flex-none">
            <h2 class="text-2xl font-bold text-center mb-8">Admin Panel</h2>
            <ul>
                <li><a href="{{ url('/dashboard') }}" class="block py-2 px-4 rounded {{ Route::currentRouteName() == 'dashboard' ? 'bg-gray-700' : 'hover:bg-gray-700' }}">Dashboard</a></li>
                <li><a href="{{ url('/gejala') }}" class="block py-2 px-4 rounded {{ Route::is('gejala.*') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">Gejala</a></li>
                <li><a href="{{ url('/penyakit') }}" class="block py-2 px-4 rounded {{ Route::is('penyakit.*') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">Penyakit</a></li>
                <li><a href="{{ url('/aturan') }}" class="block py-2 px-4 rounded {{ Route::is('aturan.*') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">Aturan</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="get">
                        @csrf
                        <button type="submit" class="block py-2 px-4 rounded w-full text-left hover:bg-gray-700">Logout</button>
                    </form>
                </li>
            </ul>
        </div>

        
        <div class="flex-1 p-8 overflow-y-auto">
            @yield('content')  
        </div>
    </div>

</body>
</html>
