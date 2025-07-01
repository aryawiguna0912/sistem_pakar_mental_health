<?php
namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Aktivitas;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
   
    public function index()
    {
        $gejalas = Gejala::all();
        return view('admin.gejala.index', compact('gejalas'));
    }

    
    public function create()
    {
        return view('admin.gejala.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama_gejala' => 'required|string|max:255',
        ]);

         $gejala = Gejala::create($request->all());
         Aktivitas::create([
            'judul' => 'Tambah Gejala',
            'deskripsi' => 'Admin menambahkan gejala baru: ' . $gejala->nama_gejala,
        ]);
        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil ditambahkan!');
    }

    
    public function edit(Gejala $gejala)
    {
        return view('admin.gejala.edit', compact('gejala'));
    }

    
    public function update(Request $request, Gejala $gejala)
    {
        $request->validate([
            'nama_gejala' => 'required|string|max:255',
        ]);

        $gejala->update($request->all());

        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil diperbarui!');
    }

    
    public function destroy(Gejala $gejala)
    {
        $gejala->delete();

        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil dihapus!');
    }
}
