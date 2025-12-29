<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserData extends Authenticatable
{
    use Notifiable;

    protected $table = 'data';

    protected $fillable = [
        'Name',
        'Email',
        'Password',
    ];

    protected $hidden = [
        'Password',
        'remember_token',
    ];

    protected $casts = [
        'Password' => 'hashed',
    ];

    public $timestamps = false;
}
