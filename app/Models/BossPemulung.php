<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BossPemulung extends Model
{
    use HasFactory;

    protected $table= 'boss_pemulungs';

    protected $fillable = [
        'user_id',
        'saldo',
    ];

    // Relasi User
    public function users() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi Penukaran
    public function penukarans()
    {
        return $this->hasMany(Penukaran::class, 'boss_id');
    }
}
