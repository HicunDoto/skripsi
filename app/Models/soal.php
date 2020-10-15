<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    protected $table = 'soal';
    protected $fillable = ['soal','keterangan','kategori','aktif_soal'];
}
