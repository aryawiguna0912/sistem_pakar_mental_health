<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use App\Models\Aktivitas;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    
    public function index()
    {
        $penyakits = Penyakit::all();
        return view('admin.penyakit.index', compact('penyakits'));
    }

    
    public function create()
    {
        return view('admin.penyakit.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama_penyakit' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'solusi' => 'nullable|string',
        ]);

        $penyakit = Penyakit::create($request->all());
         Aktivitas::create([
            'judul' => 'Tambah Penyakit',
            'deskripsi' => 'Admin menambahkan penyakit baru: ' . $penyakit->nama_penyakit,
        ]);
        return redirect()->route('penyakit.index')->with('success', 'Penyakit berhasil ditambahkan!');
    }

    
    public function edit(Penyakit $penyakit)
    {
        return view('admin.penyakit.edit', compact('penyakit'));
    }

    
    public function update(Request $request, Penyakit $penyakit)
    {
        $request->validate([
            'nama_penyakit' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'solusi' => 'nullable|string',
        ]);

        $penyakit->update($request->all());

        return redirect()->route('penyakit.index')->with('success', 'Penyakit berhasil diperbarui!');
    }

    
    public function destroy(Penyakit $penyakit)
    {
        $penyakit->delete();

        return redirect()->route('penyakit.index')->with('success', 'Penyakit berhasil dihapus!');
    }
}


