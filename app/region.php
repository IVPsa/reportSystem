<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    //

  protected $table ="REG_REGION";

  /**
 * Llave primaria de la tabla
 *
 * @var string
 */

  protected $primaryKey = "REG_COD";
  
  /**
  * Atributos que pueden ser asignados masivamente
  *
  * @var array
  */

  protected $fillable = [
      'REG_COD',
      'REG_NOMBRE',
      'ISO_3166_2_CL',
  ];
}
