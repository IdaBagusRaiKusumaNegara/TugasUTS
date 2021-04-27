<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    use HasFactory;
    protected $table = "krs";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'mata_kuliah', 'sks', 'id_prodi', 'smtr', 'id_dosen'
    ];

    public function dosen(){
        return $this->belongsTo('App\Models\Dosen', 'id_dosen');
    }
    public function prodi(){
        return $this->belongsTo('App\Models\Prodi', 'id_prodi');
    }
}
