<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
     public function handle(Request $request, Closure $next)
    {
        // Cek apakah user yang login adalah admin
        $user = Auth::user(); // Ambil user yang sedang login

        // Pastikan user terautentikasi dan memiliki peran sebagai admin
        if ($user && $user->email === 'admin@example.com') {  // Bisa ganti dengan cek email dan role
            return $next($request);
        }

        // Jika bukan admin, arahkan ke halaman login
        return redirect('/admin/login')->withErrors(['message' => 'Unauthorized access']);
    }
}
