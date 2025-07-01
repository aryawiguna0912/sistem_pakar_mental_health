<?php
namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Aturan;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function show()
    {
       
        $gejalas = Gejala::all();
        return view('diagnosa', compact('gejalas'));
    }

    public function diagnose(Request $request)
    {
    
    $gejalaIds = $request->input('gejala');
    $penyakitIds = [];

    foreach ($gejalaIds as $gejalaId) {
        $aturan = Aturan::where('id_gejala', $gejalaId)->get();
        foreach ($aturan as $rule) {
            if (!in_array($rule->id_penyakit, $penyakitIds)) {
                $penyakitIds[] = $rule->id_penyakit;
            }
        }
    }

    // Ambil data penyakit yang terhubung dengan gejala yang dipilih
    $penyakit = Penyakit::whereIn('id', $penyakitIds)->get();

    // Mengembalikan hasil diagnosa dalam format JSON
    return response()->json($penyakit);
    }
}
