<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\AturanController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/diagnosa', [DiagnosaController::class, 'show']);
Route::post('/diagnosa', [DiagnosaController::class, 'diagnose']);


Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AdminController::class, 'login'])->name('login.submit');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout')->middleware('auth');

Route::resource('/gejala', GejalaController::class);
Route::resource('/penyakit', PenyakitController::class);
Route::resource('/aturan', AturanController::class);