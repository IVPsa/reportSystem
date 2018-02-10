<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rep_reporte extends Model
{
    //
    /**
  * El nombre de la tabla en la BD
  *
  * @var string
  */

    protected $table ="REP_REPORTE";

    /**
   * Llave primaria de la tabla
   *
   * @var string
   */
  protected $primaryKey = "REP_COD";

  /**
   * Atributos que pueden ser asignados masivamente
   *
   * @var array
   */
      protected $fillable = [
          'REP_DES',
          'REP_FECHA_EDICION',
          'REP_FECHA_INICIO',
          'REP_ESTADO',
          'REP_USER_ID',
          'REP_OT_ID'
      ];


    public function ot_orden_trabajo()
    {
        return $this->hasOne('App\ot_orden_trabajo', '{OT_ID', 'OT_ORDEN_TRABAJO');
    }

    public function User()
    {
        return $this->hasOne('App\User', '{USER_ID', 'USERS');
    }
}
