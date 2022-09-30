<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kendaraan;

class Motor extends Kendaraan
{
    use HasFactory;
    protected $fillable = [
        'mesin',
        'tipe_suspensi',
        'tipe_transmisi',
    ];
}
