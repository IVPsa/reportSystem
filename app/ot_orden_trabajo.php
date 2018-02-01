<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ot_orden_trabajo extends Model
{
    //
    //
    /**
  * El nombre de la tabla en la BD
  *
  * @var string
  */

    protected $table ="OT_ORDEN_TRABAJO";

    /**
   * Llave primaria de la tabla
   *
   * @var string
   */
  protected $primaryKey = "OT_ID";

  /**
   * Atributos que pueden ser asignados masivamente
   *
   * @var array
   */
      protected $fillable = [

          // 'OT_FOLIO',
          'OT_DES',
          'OT_ESTADO',
          'OT_FECHA_CREACION',
          'OT_FECHA_TERMINO',
          'OT_REGION',
          'OT_CIUDAD',
          'OT_DIRECCION',
          'OT_VALOR',
          'OT_USER_ID_CREADOR',
          'OT_USER_ENCARGADO'

      ];



      public function User()
      {
          return $this->hasOne('App\User', '{USER_ID', 'USERS');
      }

}
