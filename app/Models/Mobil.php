<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';

    protected $fillable = [
        'merek',
        'tipe',
        'warna',
        'jumlah_roda',
        'nomor_mesin',
        'gambar'
    ];
}
