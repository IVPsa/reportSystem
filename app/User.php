<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable
{
    
    use HasApiTokens, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'USER_NOMBRE',
        'email',
        'password',
        'USU_EMPRESA',
        'USER_TPU_COD',
        'USER_N_CTA_BANCO',
        'USER_BANCO',
        'USER_TP_CTA',
        'USER_RUT',
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

    public function TipoDeUsuario()
    {
        return $this->hasOne('App\TipoDeUsuario', '{TPU_COD', 'TPU_DES');
    }
}
