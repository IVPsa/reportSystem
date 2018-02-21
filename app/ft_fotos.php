<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ft_fotos extends Model
{
    //
  protected $table ="FT_FOTOS";

  protected $primaryKey = "FT_COD";

  protected $fillable = [


          'FT_DESC',
          'FT_IMG',
          'FT_RPFG_COD'
      ];

      public function RPFG_REPORTE_FOTOGRAFICO()
      {
          return $this->hasOne('App\rf_reporte_fotografico', '{REP_COD', 'REP_REPORTE');
      }


}
