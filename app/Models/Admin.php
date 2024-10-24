<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';

    protected $fillable = [
        'username',
        'password',
        'email',
        'phone_number',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
