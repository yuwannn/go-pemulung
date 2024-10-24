<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penukaran extends Model
{
    use HasFactory;

    protected $table = 'penukarans';

    protected $fillable = [
        'boss_id',
        'pulungan_id',
        'status',
        'tanggal_tuker',
        'berat_tuker',
        'saldo_hasil_tuker',
        'koin',
    ];

    // Relasi ke Pulungan
    public function pulungans()
    {
        return $this->belongsTo(Pulungan::class, 'pulungan_id');
    }

    // Relasi ke Boss Pemulung
    public function boss_pemulungs()
    {
        return $this->belongsTo(BossPemulung::class, 'boss_id');
    }

    // Relasi ke Pengiriman
    public function pengirimans()
    {
        return $this->hasOne(Pengiriman::class, 'penukaran_id');
    }
}
