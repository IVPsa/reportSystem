<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provincia extends Model
{
    //
    /**
  * El nombre de la tabla en la BD
  *
  * @var string
  */

    protected $table ="PRO_PROVINCIA";

    /**
   * Llave primaria de la tabla
   *
   * @var string
   */
  protected $primaryKey = "PRO_COD";

  /**
   * Atributos que pueden ser asignados masivamente
   *
   * @var array
   */
      protected $fillable = [
          'PRO_COD',
          'PRO_NOMBRE',
          'PRO_REG_COD'
      ];


    public function region()
    {
        return $this->hasOne('App\region', '{REG_COD', 'REG_REGION');
    }
}
