<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kendaraan;

class Mobil extends Kendaraan
{
    use HasFactory;
    protected $fillable = [
        'mesin',
        'kapasitas_penumpang',
        'tipe',
    ];
}
