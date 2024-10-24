<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatTransaksi extends Model
{
    use HasFactory;

    protected $table = 'riwayat_transaksi';

    protected $fillable = [
        'pemulung_id',
        'jumlah_saldo',
        'tanggal_transaksi',
    ];

    // Relasi ke Pemulung
    public function pemulung()
    {
        return $this->belongsTo(Pemulung::class, 'pemulung_id');
    }
}
