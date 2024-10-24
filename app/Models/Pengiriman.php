<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $table = 'pengirimen';

    protected $fillable = [
        'tujuan_pengiriman',
        'asal_pengiriman',
        'harga_kirim',
        'status',
        'berat_barang',
        'jarak_pengiriman',
        'no_resi',
    ];
}
