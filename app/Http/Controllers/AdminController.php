<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Aktivitas;
use App\Models\Aturan;

class AdminController extends Controller
{
    
    public function showLoginForm()
    {
        return view('admin.login');
    }

    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
            return redirect()->route('dashboard')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['email' => 'Email atau password tidak valid'])->with('error', 'Login gagal!');
    }

   
    public function dashboard()
    {
        $totalGejala = Gejala::count();
        $totalPenyakit = Penyakit::count();
        $totalAturan = Aturan::count();
        $aktivitas = Aktivitas::latest()->take(3)->get();

        return view('admin.dashboard', compact('totalGejala', 'totalPenyakit','aktivitas', 'totalAturan'));
    }
    public function logout()
    {
        \Auth::logout();
        return redirect()->route('login');
    }
}
