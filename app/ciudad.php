<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    //

    /**
  * El nombre de la tabla en la BD
  *
  * @var string
  */

    protected $table ="COM_COMUNA";

    /**
   * Llave primaria de la tabla
   *
   * @var string
   */
  protected $primaryKey = "COM_COD";

  /**
   * Atributos que pueden ser asignados masivamente
   *
   * @var array
   */
      protected $fillable = [
          'COM_COD',
          'COM_NOMBRE',
          'COM_PRO_COD'
      ];


    public function provincia()
    {
        return $this->hasOne('App\provincia', '{PRO_COD', 'PRO_PROVINCIA');
    }
}
