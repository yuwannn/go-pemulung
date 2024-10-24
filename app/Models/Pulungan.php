<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulungan extends Model
{
    use HasFactory;

    protected $table = 'pulungans';

    protected $fillable = [
        'pemulung_id',
        'berat_pulungan',
        'tipe_sampah',
        'tanggal_kumpul',
    ];

    // Relasi ke Pemulung
    public function pemulungs()
    {
        return $this->belongsTo(Pemulung::class, 'pemulung_id');
    }

    // Relasi ke Penukaran
    public function penukarans()
    {
        return $this->hasOne(Penukaran::class, 'pulungan_id');
    }
}
