<?php

namespace App\Http\Controllers;

use App\ft_fotos;
use App\ot_orden_trabajo;
use App\rep_reporte;
use App\rf_reporte_fotografico;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class OrdenTrabajoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
          return view('OT.inicio');
    }


    public function getCrearOt()
    {
        //
        return view('OT.crearOt');
    }


    protected function validateOt(Request $request)
    {
        $this->validate($request, [
            'fecha_inicio' => 'required',
            'region' => 'required',
            'direccion'=>'required',
            'ciudad' => 'required',
            'descripcion' => 'required',
            'valor' => 'required'
        ]);
    }

    public function store(Request $request)
    {
        //
        $this->validateOt($request);
        $crearOT = $this->createOrdenTrabajo($request->all());

        if (! $crearOT) {
          return redirect()->route('InicioOT')->with('error', "Hubo un problema al crear la orden de trabajo.");
      }

      return redirect()->route('InicioOT')->with('success', "La orden de trabajo ha sido creado exitosamente.");

    }

    protected function createOrdenTrabajo(array $data)
    {
        $id = Auth::id();
        // $usuario=Auth::user()->USU_NOMBRE;
        return ot_orden_trabajo::create([
            'OT_DES' => $data['descripcion'],
            'OT_ESTADO' =>'EN ESPERA',
            'OT_FECHA_CREACION' => Carbon::today(),
            'OT_FECHA_TERMINO' => Carbon::today(),
            'OT_REGION' =>  $data['region'],
            'OT_CIUDAD' =>  $data['ciudad'],
            'OT_DIRECCION' =>  $data['direccion'],
            'OT_VALOR' =>  $data['valor'],
            'OT_USER_ID_CREADOR' => $id,
            'OT_USER_ENCARGADO' => $id,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);
    }


    public function show(ot_orden_trabajo $ot_orden_trabajo)
    {
        //
        $ordenDeTrabajo = DB::table('OT_ORDEN_TRABAJO')->paginate();
        return view('OT.listaOt', compact('ordenDeTrabajo'));
    }


    public function resumen($id )
    {
        //


      $usuario=User::all();

      $ordenDeTrabajo = ot_orden_trabajo::find($id);
      $comprobarExistenciaDeReporte= rep_reporte::where('REP_OT_ID', $id)->get();
      $verReporte=rep_reporte::where('REP_OT_ID', $id)->get();

      return view('OT.resumenOt',compact('ordenDeTrabajo','comprobarExistenciaDeReporte','verReporte'))
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

        ->select('users.USU_NOMBRE','REP_REPORTE.REP_COD','REP_REPORTE.REP_USER_ID')
        ->where('REP_COD',$id )
        ->value('USU_NOMBRE');

      return view('OT.verReporte',compact('DatosReporte','comprobarReporteFotografico','reportefotografico','encargadoDelReporte' ));
    }


    public function FotosDelReporte($id){

      $reporteFotografico = rf_reporte_fotografico::find($id);
      $foto=ft_fotos::where('FT_RPFG_COD',$id)->paginate(5);
      // dd($foto);
      return view('OT.registroFotografico',compact('reporteFotografico','foto'));

    }


}
