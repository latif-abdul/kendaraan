<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class kendaraan extends Eloquent
{
    use HasFactory;
    protected $connection = "mongodb";
    protected $collection = "kendaraan";

    protected $fillable = [
        "tahun_keluaran",
        "warna",
        "harga",
        "mesin",
        "tipe_suspensi",
        "tipe_transmisi",
        "kapasitas_penumpang",
        "tipe",
        "jenis_kendaraan",
        "stok",
        "terjual"
    ];
}
