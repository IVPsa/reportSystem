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


use App\Http\Resources\OT_API as OT_APIs;

class OrdenTrabajoController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        //
          return view('OT.inicio');
    }


    public function getCrearOt()
    {
        //
        $region = region::all();
        $provincias = provincia::all();
        $ciudades = ciudad::all();

        return view('OT.crearOt',compact('region','provincias','ciudades'));
        // ->with('region', $region)
        // ->with('provincias', $provincias)
        // ->with('ciudades', $ciudades);
         //
    }


    protected function validateOt(Request $request)
    {
        $this->validate($request, [
            'fecha_inicio' => 'required',
            'region' => 'required',
            'direccion'=>'required',
            'ciudad' => 'required|int',
            'descripcion' => 'required',
            'valor' => 'required'
        ]);
    }

    public function store(Request $request)
    {
        //
        $id = Auth::id();

        $crearOT = ot_orden_trabajo::create([
            'OT_DES' => $request->input('descripcion'),
            'OT_ESTADO' =>'EN ESPERA',
            'OT_FECHA_CREACION' => Carbon::today(),
            'OT_FECHA_TERMINO' => Carbon::today(),
            'OT_COM_COD' =>  $request->input('ciudad'),
            'OT_DIRECCION' => $request->input('direccion'),
            'OT_VALOR' =>  $request->input('valor'),
            'OT_USER_ID_CREADOR' => $id,
            'OT_USER_ENCARGADO' => $id,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);


        if (! $crearOT) {
          return redirect()->route('InicioOT')->with('error', "Hubo un problema al crear la orden de trabajo.");
      }

      return redirect()->route('InicioOT')->with('success', "La orden de trabajo ha sido creado exitosamente.");

    }



    public function show(ot_orden_trabajo $ot_orden_trabajo)
    {
        //
        $ordenDeTrabajo = DB::table('OT_ORDEN_TRABAJO')->paginate();
        return view('OT.listaOt', compact('ordenDeTrabajo'));
    }

    public function LISTADO()
    {
        //
        $ordenDeTrabajo = ot_orden_trabajo::all();
        return response()->json($ordenDeTrabajo, 200);
    }


    public function resumen($id )
    {
        //


      $usuario=User::all();

      $ordenDeTrabajo = ot_orden_trabajo::find($id);
      $comprobarExistenciaDeReporte= rep_reporte::where('REP_OT_ID', $id)->get();
      $verReporte=rep_reporte::where('REP_OT_ID', $id)->get();

      $idCiudad = ot_orden_trabajo::where('OT_ID', $id)->value('OT_COM_COD');


      //
      // $ciudad = DB::table('OT_ORDEN_TRABAJO')
      // ->Join('COM_COMUNA', 'OT_ORDEN_TRABAJO.OT_COM_COD', '=', 'COM_COMUNA.COM_COD')
      // ->select('OT_ORDEN_TRABAJO.OT_COM_COD','COM_COMUNA.COM_COD','COM_COMUNA.COM_NOMBRE')
      // ->where('OT_COM_COD',$idCiudad )->get();

      $ciudad=DB::table('COM_COMUNA')->select('COM_NOMBRE')->where('COM_COD',$idCiudad)->value('COM_NOMBRE');

      $idProvincia=DB::table('COM_COMUNA')->select('COM_PRO_COD')->where('COM_COD',$idCiudad)->value('COM_PRO_COD');

      $nombreProvincia=DB::table('PRO_PROVINCIA')->select('PRO_NOMBRE')->where('PRO_COD',$idProvincia)->value('PRO_NOMBRE');

      $idRegion=DB::table('PRO_PROVINCIA')->select('PRO_REG_COD')->where('PRO_COD',$idProvincia)->value('PRO_REG_COD');

      $nombreRegion=DB::table('REG_REGION')->select('REG_NOMBRE')->where('REG_COD', $idRegion)->value('REG_NOMBRE');

      return view('OT.resumenOt',compact('ordenDeTrabajo','comprobarExistenciaDeReporte','verReporte','ciudad','nombreProvincia','nombreRegion'))
      ->with('usuario', $usuario);
    }


    public function update(Request $request, $ordenDeTrabajo )
    {


      $estado = $request->input('estado');
      $encargado = $request->input('encargado');

      $editOt = ot_orden_trabajo::where('OT_ID',$ordenDeTrabajo)->update([
        'OT_ESTADO' => $estado,
        'OT_USER_ENCARGADO' => $encargado
      ]);



      if (!$editOt) {
        return redirect()->route('resumen', compact('ordenDeTrabajo'))->with('error', 'Hubo un error al modificar OT.');
      }

        return redirect()->route('resumen', compact('ordenDeTrabajo'))->with('success', 'La OT modificada exitosamente.');
    }


    public function destroy( $id)
    {

        $usuario = Auth::id();

        $rpfg=rf_reporte_fotografico::where('RPFG_OT_ID',$id)->value('RPFG_COD');

        if($rpfg==[])
        {

          $elimnarReporte=rep_reporte::where('REP_OT_ID',$id)->delete();

          $eliminarOt= ot_orden_trabajo::find($id)->delete();
        }

        else{

          $eliminarFotos = ft_fotos::where('FT_RPFG_COD', $rpfg)->delete();

          $elimnarReporteFotografico= rf_reporte_fotografico::where('RPFG_OT_ID',$id)->delete();

          $elimnarReporte=rep_reporte::where('REP_OT_ID',$id)->delete();

          $eliminarOt= ot_orden_trabajo::find($id)->delete();

        }


        if (!$eliminarOt)
        {
          return redirect()->route('listaOt')->with('error', "Hubo un problema al eliminar la orden de trabajo.");
        }

        return redirect()->route('listaOt')->with('success', "La orden de trabajo ha sido eliminada exitosamente.");
    }

    public function verReporte($id){

      $DatosReporte=rep_reporte::find($id);
      $comprobarReporteFotografico = rf_reporte_fotografico::where('RPFG_REP_COD',$id)->get();

      $reportefotografico=rf_reporte_fotografico::find($id);


        $encargadoDelReporte = DB::table('REP_REPORTE')
        ->Join('users', 'users.id', '=', 'users.id')

        ->select('users.USER_NOMBRE','REP_REPORTE.REP_COD','REP_REPORTE.REP_USER_ID')
        ->where('REP_COD',$id )
        ->value('USER_NOMBRE');

      return view('OT.verReporte',compact('DatosReporte','comprobarReporteFotografico','reportefotografico','encargadoDelReporte' ));
    }


    public function FotosDelReporte($id){

      $reporteFotografico = rf_reporte_fotografico::find($id);
      $foto=ft_fotos::where('FT_RPFG_COD',$id)->paginate(5);
      // dd($foto);
      return view('OT.registroFotografico',compact('reporteFotografico','foto'));

    }


}
