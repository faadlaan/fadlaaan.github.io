<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $quarded = ['id_siswa'];
    protected $fillable = [
        'nis',
        'nama',
        'jurusan'
    ];
}
