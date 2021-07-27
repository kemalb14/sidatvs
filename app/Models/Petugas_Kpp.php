<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Petugas_Kpp extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'petugas_kpp';

    protected $fillable = [
        'name',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
