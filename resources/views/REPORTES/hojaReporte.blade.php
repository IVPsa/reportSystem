
@extends('layouts.app')
@section('content')
<h1 class="text-center">REPORTE Nº{{$DatosReporte->REP_COD}}</h1>

<table cellpadding="5" align="center">

  <tr>
    <td>  <h5 class="text-right">OT Nº:</h5></td>
    <td><input type="text" class="form-control" name="" readonly value="{{$DatosReporte->REP_OT_ID}}"></td>
  </tr>



  <tr>
    <td>  <h5 class="text-right">CREADOR:</h5></td>
    <td><input type="text" class="form-control" name="" readonly value="{{$encargadoDelReporte}}"></td>
  </tr>

</table>

<div class="row">
  <div class="col-md-12 col-xs-12">

    <div class="form-group row">
      <h5 class="col-md-12 col-xs-12 text-center">DESCRIPCION DEL REPORTE</h5>
      <textarea  class="form-control col-12 col-form  col-xs-12" readonly rows="10" >{{$DatosReporte->REP_DES}}</textarea>

    </div>

  </div>
</div>

<div class="container" align="center">
  <br />
  @if ($comprobarReporteFotografico == "[]")

  @else
    @foreach ($comprobarReporteFotografico as $comprobarReporteFotografico)
      <a href="{{route('VerReporteFotografico', $comprobarReporteFotografico->RPFG_COD)}}"><button class="btn btn-primary " > REGISTRO FOTOGRAFICO</button></a>
    @endForeach
  @endif
</div>



<br />
<br />

<br />
<br />
<br />
<br />

@endsection
