<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeUsuario extends Model
{
    //
    protected $table ="TPU_TIPO_USUARIO";

    protected $primaryKey = "TPU_COD";

    protected $fillable = [

      'TPU_COD',
      'TPU_DES'
    ];

}
