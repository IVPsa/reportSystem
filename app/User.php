<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'USU_NOMBRE',
        'email',
        'password',
        'USU_EMPRESA',
        'USU_TPU_COD',
        'USER_N_CTA_BANCO',
        'USER_BANCO',
        'USER_TP_CTA',
        'USU_RUT',
        'USER_AVATAR'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
