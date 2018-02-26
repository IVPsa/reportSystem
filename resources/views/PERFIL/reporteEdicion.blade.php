@extends('layouts.app')
@section('content')
@include('layouts.messages')
<h3 class="text-center">REPORTE ID: {{$reporte->REP_COD}}</h3>

<div class="col-md-12 col-xs-12">

  <div class="row">

          <div class="col-md-12 col-xs-12">

            <form action="{{route('UpdateReporte',$reporte->REP_COD)}}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <input  hidden name="numeroOt" value="{{$reporte->REP_OT_ID}}">
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

                </div>
            </form>
          </div>

          <div class="container" align="center">
            <br />
            @if ($comprobarReporteFotografico == "[]")
              <form action="{{route('CrearReporteFotografico',$reporte->REP_COD)}}" method="post">
                {{ csrf_field() }}
                <input  hidden name="numeroOt" value="{{$reporte->REP_OT_ID}}">
                <button type="submit" class="btn btn-primary " > CREAR  REPORTE FOTOGRAFICO</button>
              </form>
            @else
              @foreach ($comprobarReporteFotografico as $comprobarReporteFotografico)
                <a href="{{route('ReporteFotografico', $comprobarReporteFotografico->RPFG_COD)}}"><button class="btn btn-primary " > REGISTRO FOTOGRAFICO</button></a>
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
