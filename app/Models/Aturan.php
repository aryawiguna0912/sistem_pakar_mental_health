<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    use HasFactory;
     protected $fillable = ['nama_aturan', 'deskripsi', 'id_gejala', 'id_penyakit'];

 
    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'id_gejala');
    }

  
    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'id_penyakit');
    }
}
