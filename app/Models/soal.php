<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table = 'soals';
    protected $fillable = ['nama_soal','kategori','nilai','keterangan','clue','aktif_soal','waktu'];

    public function flag()
    {
        return $this->hasOne(App\Models\Flag::class);
    }
    
}
