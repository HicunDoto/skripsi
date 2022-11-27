<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
    protected $table = 'flag';
    protected $fillable = ['flag','edukasi','id_soal'];

    public function soal()
    {
        return $this->hasOne(App\Models\Soal::class);
    }
}
