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
        'id', 'mata_kuliah', 'sks', 'prodi', 'smtr', 'dosen'
    ];
}
