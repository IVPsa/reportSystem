<?php

namespace App\Http\Controllers;
use App\ft_fotos;
use App\ot_orden_trabajo;
use App\rep_reporte;
use App\rf_reporte_fotografico;
use App\User;

use App\region;
use App\provincia;
use App\ciudad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Resources\OT_Api;

class APIcontroller extends Controller
{
    //OT

        public function ListadoDeOt()
        {
            //
            $ordenDeTrabajo = ot_orden_trabajo::all();
            return response()->json($ordenDeTrabajo, 200);


        }

        public function BuscarOt($id)
        {
            //
            $usuario=User::all();

            $ordenDeTrabajo = ot_orden_trabajo::find($id);
            $comprobarExistenciaDeReporte= rep_reporte::where('REP_OT_ID', $id)->get();
            $verReporte=rep_reporte::where('REP_OT_ID', $id)->get();

            $idCiudad = ot_orden_trabajo::where('OT_ID', $id)->value('OT_COM_COD');

            return response()->json($ordenDeTrabajo, 200);


        }

        public function eliminarOT($id)
        {
            //
            $usuario=User::all();

            $ordenDeTrabajo = ot_orden_trabajo::find($id);
            $comprobarExistenciaDeReporte= rep_reporte::where('REP_OT_ID', $id)->get();
            $verReporte=rep_reporte::where('REP_OT_ID', $id)->get();

            $idCiudad = ot_orden_trabajo::where('OT_ID', $id)->value('OT_COM_COD');

            return response()->json($ordenDeTrabajo, 200);


        }

        public function crearOT(Request $request)
        {
            //

        }
    //OT

}
