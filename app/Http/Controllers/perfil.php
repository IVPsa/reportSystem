<?php

namespace App\Http\Controllers;

// MODELOS
use App\User;
use App\ot_orden_trabajo;
use App\rep_reporte;
use App\rf_reporte_fotografico;
use App\ft_fotos;


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
         $imagenes=ft_fotos::all();
         $fotoPerfil=user::where('id',$idUsuario)->get();
         // dd($fotoPerfil);
         // $ordenDeTrabajo = DB::table('OT_ORDEN_TRABAJO')->get();

         return view('PERFIL.inicioPerfil', compact('OTasignadas','OTcreadas','buscarReporte','imagenes','fotoPerfil' ));
       }


       public function edicionDeOt($id){
         //Aqui colocar una conducion que permita saber si la ot tiene un reporte creado

         $comprobarExistenciaDeReporte= rep_reporte::where('REP_OT_ID', $id)->get();
         $ordenDeTrabajoAsignada = ot_orden_trabajo::find($id);
         $verReporte=rep_reporte::where('REP_OT_ID', $id)->get();

         // dd($ordenDeTrabajoAsignada);

         return view('PERFIL.edicionDeOt',compact('ordenDeTrabajoAsignada','comprobarExistenciaDeReporte','verReporte'));
         // )->with('verReporte',$verReporte)

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
           return redirect()->route('OTedicion', $numeroOt)->with('error', 'Hubo un error al crear el reporte');
         }

           return redirect()->route('OTedicion', $numeroOt)->with('success', 'El reporte ha sido creado exitosamente, haga click en reporte para editarlo');
       }

       public function reporteEdicion($id){
         // $reporte = DB::table('rep_reporte')->where('REP_OT_ID',$id)->get();
           $reporte = rep_reporte::find($id);
           $comprobarReporteFotografico = rf_reporte_fotografico::where('RPFG_REP_COD',$id)->get();

           $reportefotografico=rf_reporte_fotografico::find($id);

           return view('PERFIL.reporteEdicion',compact('reporte', 'comprobarReporteFotografico','reportefotografico'));
       }

       public function actualizarDatosPersonales(Request $request){
         $id = Auth::id();

         $rut=$request->input('rut');
         $email=$request->input('email');
         $nombre=$request->input('nombre');


         $actualizarDatosPersonales = user::where('id',$id)->update([
           'USU_RUT'=>$rut,
           'email'=>$email,
           'USU_NOMBRE'=>$nombre,
         ]);

         if (!$actualizarDatosPersonales) {
           return redirect()->route('Perfil')->with('error', 'Hubo un error Editar Datos personales');
         }

           return redirect()->route('Perfil')->with('success', 'Datos personales actualizados exitosamente');

       }

      public function actualizarDatosBancarios(Request $request){

        $id = Auth::id();
        $nCuenta=$request->input('nCuenta');
        $tipoCta=$request->input('tipoCta');
        $banco=$request->input('banco');


        $actualizarDatosBancarios = user::where('id',$id)->update([
          'USER_N_CTA_BANCO'=>$nCuenta,
          'USER_BANCO'=>$banco,
          'USER_TP_CTA'=>$tipoCta,
        ]);

        if (!$actualizarDatosBancarios) {
          return redirect()->route('Perfil')->with('error', 'Hubo un error Editar Datos personales');
        }

          return redirect()->route('Perfil')->with('success', 'Datos personales actualizados exitosamente');

      }

      public function subirFotoDePerfil(Request $request){

        $id = Auth::id();
        $imagenDePerfil=$request->file('imagenPerfil');

        $subirImagenDePerfil = user::where('id',$id)->update([
          'USER_AVATAR'=>$imagenDePerfil->store('imagenes','public')
        ]);

        if (!$subirImagenDePerfil) {
          return redirect()->route('Perfil')->with('error', 'Hubo un error Editar Datos personales');
        }

          return redirect()->route('Perfil')->with('success', 'Datos personales actualizados exitosamente');


      }

      public function CrearReporteFotografico(Request $request, $id){

        $numero=$request->input('numeroOt');

        $crearReporteFotogarfico= rf_reporte_fotografico::Create([
          'RPFG_OT_ID'=> $numero,
          'RPFG_REP_COD'=>$id
        ]);

        if (!$crearReporteFotogarfico) {
          return redirect()->route('edicionDeReporte', $id)->with('success', 'Hubo un error al crear el reporte fotografico');
        }

          return redirect()->route('edicionDeReporte', $id)->with('success', 'Reporte fotografico creado exitosamente');
      }

      public function ReporteFotografico($id){

        $reporteFotografico = rf_reporte_fotografico::find($id);
        $fotos=ft_fotos::where('FT_RPFG_COD',$id)->get();

        return view('PERFIL.subirImagenes',compact('reporteFotografico','fotos'));


      }

      public function subirArchivo(Request $request){

        $mensaje=$request->input('descripcionImagen');
        $image=$request->file('image');
        $codigoReporte=$request->input('codigoReporte');

        $subirimagen= ft_fotos::Create([
          'FT_IMG'=>$image->store('fotosReportes','public'),
          'FT_DESC'=> $mensaje,
          'FT_RPFG_COD'=>$codigoReporte
        ]);

        if (!$subirimagen) {
          return redirect()->route('ReporteFotografico', $codigoReporte)->with('error', 'imagen mala.');
        }

          return redirect()->route('ReporteFotografico', $codigoReporte)->with('success', 'imagen buena');


      }



}
