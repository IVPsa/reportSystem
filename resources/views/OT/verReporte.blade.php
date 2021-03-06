@extends('layouts.app')
@section('content')
@include('layouts.messages')

<h3 class="text-center">REPORTE ID:{{ $DatosReporte->REP_COD}} </h3>

<div class="col-md-12 col-xs-12">

    <div class="row">

        <div class="col-md-12 col-xs-12">

        <div class="form-group row">
          <h5 class="col-md-2 col-xs-12" >OT Nº:</h5>
          <input class="form-control col-10 col-form  col-xs-12" name="numeroOt" readonly type="text" value="{{ $DatosReporte->REP_OT_ID}}">
        </div>

        <div class="form-group row">
          <h5 class="col-md-2 col-xs-12">ENCARGADO:</h5>
          <input class="form-control col-10 col-form  col-xs-12" name="creador" readonly value="{{ $encargadoDelReporte}}" type="text" >
        </div>


        <div class="form-group row">
          <h5 class="col-md-12 col-xs-12 text-center">DESCRIPCION DEL REPORTE</h5>
          <textarea  class="form-control col-12 col-form col-xs-12"   name="descripcionReporte"  rows="10" >{{ $DatosReporte->REP_DES}}</textarea>

        </div>

      </div>

      <div class="container" align="center">
        <br />
        @if ($comprobarReporteFotografico <> "[]")

          @foreach ($comprobarReporteFotografico as $comprobarReporteFotografico)
            <a href="{{route('FotosDelReporte', $comprobarReporteFotografico->RPFG_COD)}}"><button class="btn btn-primary " > REGISTRO FOTOGRAFICO</button></a>
          @endForeach
        @endif
      </div>

  </div>
</div>
<br />
<br />
<br />
<br />

@endsection
