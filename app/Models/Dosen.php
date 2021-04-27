<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = "dosens";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama_dsn', 'jkl_dsn', 'tmpt_dsn', 'tgl_dsn', 'status_peg','id_jurusan'
    ];

    public function jurusan(){
        return $this->belongsTo('App\Models\Jurusan', 'id_jurusan');
    }

}
