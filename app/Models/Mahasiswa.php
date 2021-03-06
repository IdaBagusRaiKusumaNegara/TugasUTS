<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'jenkel', 'tempat', 'tgllahir', 'id_jurusan', 'angkatan'
    ];

    public function jurusan(){
        return $this->belongsTo('App\Models\Jurusan', 'id_jurusan');
    }
}
