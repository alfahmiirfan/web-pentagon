<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /*
    | -----------------------------------------------------------------
    | Protected Variables
    | -----------------------------------------------------------------
    */

    protected $fillable = [
        'email',

        'password',
        'name',
    ];

    protected $hidden = [
        'remember_token',
        'password',
    ];

    /*
    | -----------------------------------------------------------------
    | Protected Functions
    | -----------------------------------------------------------------
    */

    /**
     * @return array
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
