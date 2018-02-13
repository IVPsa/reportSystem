<?php

namespace App\Http\Controllers;

use App\user;
use App\ot_orden_trabajo;
use App\rep_reporte;
use App\Http\Controllers\Console;
use App\Http\Controllers\Controller;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class perfil extends Controller
{

       public function showPerfil(){

         $idUsuario = Auth::id();
         $OTasignadas=ot_orden_trabajo::where('OT_USER_ENCARGADO',$idUsuario)->get();
         $OTcreadas=ot_orden_trabajo::where('OT_USER_ID_CREADOR',$idUsuario)->get();
         $buscarReporte=rep_reporte::where('REP_USER_ID', $idUsuario)->get();
         // $ordenDeTrabajo = DB::table('OT_ORDEN_TRABAJO')->get();

         return view('PERFIL.inicioPerfil', compact('OTasignadas','OTcreadas','buscarReporte' ));
       }


       public function edicionDeOt($id){
         //Aqui colocar una conducion que permita saber si la ot tiene un reporte creado

         $comprobarExistenciaDeReporte= rep_reporte::where('REP_OT_ID', $id)->get();
         $ordenDeTrabajoAsignada = ot_orden_trabajo::find($id);

         return view('PERFIL.edicionDeOt',compact('ordenDeTrabajoAsignada','comprobarExistenciaDeReporte'));

       }

       public function updateOtAsignada(Request $request, $ordenDeTrabajoAsignada ){

         $estado = $request->input('estado');

         $editOtAsignada = ot_orden_trabajo::where('OT_ID',$ordenDeTrabajoAsignada)->update([
           'OT_ESTADO' => $estado
         ]);

         if (!$editOtAsignada) {
           return redirect()->route('Perfil')->with('error', 'Hubo un error al modificar OT.');
         }

           return redirect()->route('Perfil')->with('success', 'La OT modificada exitosamente.');
       }

       public function reporte($id){

           $ordenDeTrabajoAsignada = ot_orden_trabajo::find($id);

           return view('PERFIL.reporteCreacion', compact('ordenDeTrabajoAsignada'));
       }


       public function reporteCreacion(Request $request, $ordenDeTrabajoAsignada ){

         $numeroOt = $request->input('numeroOt');
         $creador = $request->input('creador');
         $descripcionReporte = $request->input('descripcionReporte');
         $Usu = Auth::id();

         $creacionDeReporte = rep_reporte::create([
           'REP_DES'=>$descripcionReporte,
           'REP_FECHA_INICIO'=> Carbon::today(),
           'REP_FECHA_EDICION'=> Carbon::today(),
           'REP_ESTADO'=>'ABIERTO',
           'REP_USER_ID'=>$Usu,
           'REP_OT_ID'=>$ordenDeTrabajoAsignada
         ]);


         if (!$creacionDeReporte) {
           return redirect()->route('Perfil')->with('error', 'Hubo un error al crear el reporte');
         }

           return redirect()->route('Perfil')->with('success', 'El reporte ha sido creado exitosamente, haga click en reporte para editarlo');
       }

       public function reporteEdicion($id){

           $reporte = rep_reporte::find($id);

           return view('PERFIL.reporteEdicion', compact('reporte'));
       }


}
