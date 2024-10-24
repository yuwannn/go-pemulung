<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemulung extends Model
{
    use HasFactory;

    protected $table = 'pemulungs';

    protected $fillable = [
        'user_id',
        'total_saldo',
        'total_koin',
    ];

    // Relasi ke User
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke Pulungan
    public function pulungans()
    {
        return $this->hasMany(Pulungan::class, 'pemulung_id');
    }
}
