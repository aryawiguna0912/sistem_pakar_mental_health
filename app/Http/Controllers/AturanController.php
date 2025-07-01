<?php
namespace App\Http\Controllers;

use App\Models\Aturan;
use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;

class AturanController extends Controller
{
    
    public function index()
    {
        $aturans = Aturan::with(['gejala', 'penyakit'])->get();
        return view('admin.aturan.index', compact('aturans'));
    }

    
    public function create()
    {
        $gejalas = Gejala::all();
        $penyakits = Penyakit::all();
        return view('admin.aturan.create', compact('gejalas', 'penyakits'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama_aturan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gejala_id' => 'required|exists:gejalas,id',
            'penyakit_id' => 'required|exists:penyakit,id',
        ]);

        Aturan::create($request->all());

        return redirect()->route('aturan.index')->with('success', 'Aturan berhasil ditambahkan!');
    }

    
    public function edit(Aturan $aturan)
    {
        $gejalas = Gejala::all();
        $penyakits = Penyakit::all();
        return view('admin.aturan.edit', compact('aturan', 'gejalas', 'penyakits'));
    }

    
    public function update(Request $request, Aturan $aturan)
    {
        $request->validate([
            'nama_aturan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gejala_id' => 'required|exists:gejalas,id',
            'penyakit_id' => 'required|exists:penyakit,id',
        ]);

        $aturan->update($request->all());

        return redirect()->route('aturan.index')->with('success', 'Aturan berhasil diperbarui!');
    }

    
    public function destroy(Aturan $aturan)
    {
        $aturan->delete();

        return redirect()->route('aturan.index')->with('success', 'Aturan berhasil dihapus!');
    }
}
