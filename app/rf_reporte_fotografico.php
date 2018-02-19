<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rf_reporte_fotografico extends Model
{
    //

    protected $table ="RPFG_REPORTE_FOTOGRAFICO";

    protected $primaryKey = "RPFG_COD";

    protected $fillable = [

      'RPFG_OT_ID',
      'RPFG_REP_COD'
    ];

    public function ot_orden_trabajo()
    {
        return $this->hasOne('App\ot_orden_trabajo', '{OT_ID', 'OT_ORDEN_TRABAJO');
    }

    public function rep_reporte()
    {
        return $this->hasOne('App\rep_reporte', '{REP_COD', 'REP_REPORTE');
    }
}
