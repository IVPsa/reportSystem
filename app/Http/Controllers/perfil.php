<?php

namespace App\Http\Controllers;

// MODELOS
use App\User;
use App\ot_orden_trabajo;
use App\rep_reporte;
use App\rf_reporte_fotografico;
use App\ft_fotos;
use Barryvdh\DomPDF\Facade as PDF;


use App\Http\Controllers\Console;
use App\Http\Controllers\Controller;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;


class perfil extends Controller
{
      public function __construct()
      {
          $this->middleware('auth');
      }

        // INICIO FUNCIONES DE DATOS PERSONALES DEL USUARIO
       public function showPerfil(){

         $idUsuario = Auth::id();
         $OTasignadas=ot_orden_trabajo::where('OT_USER_ENCARGADO',$idUsuario)->paginate(5);
         $OTcreadas=ot_orden_trabajo::where('OT_USER_ID_CREADOR',$idUsuario)->paginate(5);
         // $buscarReporte=rep_reporte::where('REP_USER_ID', $idUsuario)->get();
         // $imagenes=ft_fotos::all();
         $fotoPerfil=user::where('id',$idUsuario)->get();
         // dd($fotoPerfil);
         // $ordenDeTrabajo = DB::table('OT_ORDEN_TRABAJO')->get();

         return view('PERFIL.inicioPerfil', compact('OTasignadas','OTcreadas','fotoPerfil' ));
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

         $fotoPerfilAnterior=user::where('id',$id)->value('USER_AVATAR');

         if ($fotoPerfilAnterior <> 'imagenes/sinPerfil.png'){

           Storage::disk('public')->delete($fotoPerfilAnterior);
         }

         $imagenDePerfil=$request->file('imagenPerfil');

         $subirImagenDePerfil = user::where('id',$id)->update([
           'USER_AVATAR'=>$imagenDePerfil->store('imagenes','public')
         ]);

           if (!$subirImagenDePerfil) {
             return redirect()->route('Perfil')->with('error', 'Hubo un error Editar Datos personales');
           }

           return redirect()->route('Perfil')->with('success', 'Datos personales actualizados exitosamente');



       }
       // FIN FUNCIONES DE DATOS PERSONALES DEL USUARIO

       //INICIO DE FUNCIONES DE OT
       public function edicionDeOt($id){


         $comprobarExistenciaDeReporte= rep_reporte::where('REP_OT_ID', $id)->get();
         $ordenDeTrabajoAsignada = ot_orden_trabajo::find($id);
         $verReporte=rep_reporte::where('REP_OT_ID', $id)->get();
         $idUsuario = Auth::id();

         return view('PERFIL.edicionDeOt',compact('ordenDeTrabajoAsignada','comprobarExistenciaDeReporte','verReporte'));

       }

       public function updateOtAsignada(Request $request, $ordenDeTrabajoAsignada ){

         $estado = $request->input('estado');

         $editOtAsignada = ot_orden_trabajo::where('OT_ID',$ordenDeTrabajoAsignada)->update([
           'OT_ESTADO' => $estado
         ]);

         if (!$editOtAsignada) {
           return redirect()->route('OTedicion',$ordenDeTrabajoAsignada)->with('error', 'Hubo un error al modificar OT.');
         }

           return redirect()->route('OTedicion',$ordenDeTrabajoAsignada)->with('success', 'La OT modificada exitosamente.');
       }

       // FIN FUNCIONES DE OT

       // INICIO DE FUNCIONES DE REPORTE
       public function reporte($id){

           $ordenDeTrabajoAsignada = ot_orden_trabajo::find($id);

           return view('PERFIL.reporteCreacion', compact('ordenDeTrabajoAsignada'));
       }

       public function reporteCreacion($ordenDeTrabajoAsignada){

         $numeroOt =$ordenDeTrabajoAsignada;
         $creador = Auth::id();
         $descripcionReporte = ' ';


         $creacionDeReporte = rep_reporte::create([
           'REP_DES'=>$descripcionReporte,
           'REP_FECHA_INICIO'=> Carbon::today(),
           'REP_FECHA_EDICION'=> Carbon::today(),
           'REP_ESTADO'=>'ABIERTO',
           'REP_USER_ID'=>$creador,
           'REP_OT_ID'=>$ordenDeTrabajoAsignada
         ]);


         if (!$creacionDeReporte) {
           return redirect()->route('OTedicion', $numeroOt)->with('error', 'Hubo un error al crear el reporte');
         }

           return redirect()->route('OTedicion', $numeroOt)->with('success', 'El reporte ha sido creado exitosamente, haga click en reporte para editarlo');
       }

       public function reporteEdicion($id){

           $idUsuario=Auth::id();



           $reporte = rep_reporte::find($id);
           //esto posiblemente no tenga una utilidad a largo plazo pero conservar en caso de ser util
           $joinDeUsuarioYreporte = DB::table('REP_REPORTE')
           ->Join('users', 'users.id', '=', 'users.id')
           ->select('users.USU_NOMBRE','REP_REPORTE.REP_COD','REP_REPORTE.REP_USER_ID')
           ->where('REP_COD',$id )
           ->value('USU_NOMBRE');

           $idUsuario = Auth::id();

           $comprobarReporteFotografico = rf_reporte_fotografico::where('RPFG_REP_COD',$id)->get();

           $reportefotografico=rf_reporte_fotografico::find($id);

           return view('PERFIL.reporteEdicion',compact('reporte', 'comprobarReporteFotografico','reportefotografico','joinDeUsuarioYreporte','idUsuario'));
       }

       public function UpdateReporte( Request $request, $id){

          $descripcionReporte=$request->input('descripcionReporte');

           $actualizarReporte = rep_reporte::where('REP_COD',$id)->update([
             'REP_DES'=>$descripcionReporte
           ]);

           if (!$actualizarReporte) {
             return redirect()->route('edicionDeReporte', $id)->with('error', 'Hubo un error al modificar el reporte');
           }

             return redirect()->route('edicionDeReporte', $id)->with('success', 'El reporte ha sido modificado exitosamente');

       }
       //FIN DE FUNCIONES DE REPORTE

        //INICIO FUNCIONES REPORTE FOTOGRAFICO
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
          $foto=ft_fotos::where('FT_RPFG_COD',$id)->paginate(5);

          return view('PERFIL.subirImagenes',compact('reporteFotografico','foto'));

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
            return redirect()->route('ReporteFotografico', $codigoReporte)->with('error', 'imagen no se pudo subir.');
          }

            return redirect()->route('ReporteFotografico', $codigoReporte)->with('success', 'imagen Subida');

        }

        public function eliminarArchivo(Request $request){

          $codigoReporte=$request->input('codigoReporte');
          $id=$request->input('codigoFoto');

          $fotoURL=ft_fotos::where('FT_COD',$id)->value('FT_IMG');

          Storage::disk('public')->delete($fotoURL);

          $eliminarFoto = ft_fotos::where('FT_COD', $id)->delete();

          if (!$eliminarFoto) {
            return redirect()->route('ReporteFotografico', $codigoReporte)->with('error', 'imagen no pudo ser borrada.');
          }

            return redirect()->route('ReporteFotografico', $codigoReporte)->with('success', 'imagen borrada satisfactoriamente');

        }
        public function actualizarDescripcionDeArchivo(Request $request){

          $codigoReporte=$request->input('codigoReporte');
          $id=$request->input('codigoFoto');

          $descripcionFoto=$request->input('fotoDescripcion');

          $actualizarDatosPersonales = ft_fotos::where('FT_COD',$id)->update([
            'FT_DESC'=>$descripcionFoto
          ]);

          if (!$actualizarDatosPersonales) {
            return redirect()->route('ReporteFotografico', $codigoReporte)->with('error', 'Descripcion no pudo ser actualizada.');
          }

            return redirect()->route('ReporteFotografico', $codigoReporte)->with('success', 'Descripcion actualizada satisfactoriamente');

        }

        //FIN FUNCIONES REPORTE FOTOGRAFICO
        public function pdf(Request $request)
        {
            /**
             * toma en cuenta que para ver los mismos
             * datos debemos hacer la misma consulta
            **/

            $id=$request->input('codigoOt');

            $ordenDeTrabajoAsignada = ot_orden_trabajo::where('OT_ID','1');

            $pdf = PDF::loadView('pdfs.pdfOT', compact('ordenDeTrabajoAsignada'));

          return $pdf->download('ot.pdf');
        }

}
