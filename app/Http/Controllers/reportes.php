<?php

namespace App\Http\Controllers;

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
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;


class reportes extends Controller
{
    //
    public function showReportes(){

           $idUsuario = Auth::id();
           $buscarReporte= DB::table('REP_REPORTE')->paginate(15);

           return view('REPORTES.reportes', compact('buscarReporte'));
    }

    public function VerReporte($id){

      $DatosReporte=rep_reporte::find($id);
      $comprobarReporteFotografico = rf_reporte_fotografico::where('RPFG_REP_COD',$id)->get();

      $reportefotografico=rf_reporte_fotografico::find($id);


      $encargadoDelReporte = DB::table('REP_REPORTE')
      ->Join('users', 'users.id', '=', 'users.id')
      ->select('users.USER_NOMBRE','REP_REPORTE.REP_COD','REP_REPORTE.REP_USER_ID')
      ->where('REP_COD',$id )
      ->value('USER_NOMBRE');


      return view('REPORTES.hojaReporte',compact('DatosReporte','comprobarReporteFotografico','reportefotografico','encargadoDelReporte' ));
    }

    public function reporteFotografico($id){

      $reporteFotografico = rf_reporte_fotografico::find($id);
      $foto=ft_fotos::where('FT_RPFG_COD',$id)->paginate(5);

      return view('REPORTES.ReporteFotografico',compact('reporteFotografico','foto'));

    }
}
