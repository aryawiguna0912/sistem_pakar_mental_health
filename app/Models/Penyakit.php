<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
     protected $fillable = ['nama_penyakit', 'deskripsi','solusi'];

    
    public function aturans()
    {
        return $this->hasMany(Aturan::class);
    }
    
}
