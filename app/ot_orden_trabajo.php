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

    protected $table ="OT_ORDEN_TRABAJO"

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
          'OT_DES'
      ];

      public function User()
      {
          return $this->hasMany('App\User', '{USER_ID', 'USERS');
      }

}
