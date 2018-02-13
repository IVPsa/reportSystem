@extends('layouts.app')
@section('content')

<h3 class="text-center">REPORTE ID: {{$reporte->REP_COD}}</h3>
  
<div class="col-md-12 col-xs-12">

    <div class="row">

        <div class="col-md-12 col-xs-12">

        <div class="form-group row">
          <h5 class="col-md-2 col-xs-12" >OT Nº:</h5>
          <input class="form-control col-10 col-form  col-xs-12" name="numeroOt" readonly type="text" value="{{$reporte->REP_OT_ID}}">
        </div>

        <div class="form-group row">
          <h5 class="col-md-2 col-xs-12">ENCARGADO:</h5>
          <input class="form-control col-10 col-form  col-xs-12" name="creador" readonly value="{{$reporte->REP_USER_ID}}" type="text" >
        </div>

        <!-- <div class="form-group row">
          <h5 class="col-md-2 col-xs-12">EMPRESA:</h5>
          <input class="form-control col-10 col-form  col-xs-12"  readonly type="text" >
        </div> -->

        <div class="form-group row">
          <h5 class="col-md-12 col-xs-12 text-center">DESCRIPCION DEL REPORTE</h5>
          <textarea  class="form-control col-12 col-form col-xs-12"   name="descripcionReporte"  rows="10" >{{$reporte->REP_DES}}</textarea>

        </div>

        <div class="container" align="center">
          <button type="submit"  class="btn btn-primary ">ACTUALIZAR REPORTE</button>
          <BR />
          <BR />
          <a href="{{route('subirImagenes')}}"><button class="btn btn-primary " > REGISTRO FOTOGRAFICO</button></a>
        </div>

      </div>

  </div>
</div>
<br />
<br />
<br />
<br />

@endsection
