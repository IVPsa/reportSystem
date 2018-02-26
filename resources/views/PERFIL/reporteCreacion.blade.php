@extends('layouts.app')
@section('content')

<h3 class="text-center">CREACION DE REPORTE </h3>

<div class="col-md-12 col-xs-12">
  <form action="{{ route('reporteCreacion', $ordenDeTrabajoAsignada->OT_ID) }}" method="post">
    {{ csrf_field() }}
    <div class="row">

        <div class="col-md-12 col-xs-12">

          <div class="form-group row">
            <h5 class="col-md-2 col-xs-12" >OT Nº:</h5>
            <input class="form-control col-10 col-form  col-xs-12" name="numeroOt" readonly type="text" value="{{$ordenDeTrabajoAsignada->OT_ID}}">
          </div>

          <div class="form-group row">
            <h5 class="col-md-2 col-xs-12">ENCARGADO:</h5>
            <input class="form-control col-10 col-form  col-xs-12" name="creador" readonly value="{{$ordenDeTrabajoAsignada->OT_USER_ENCARGADO}}" type="text" >
          </div>

          <!-- <div class="form-group row">
            <h5 class="col-md-2 col-xs-12">EMPRESA:</h5>
            <input class="form-control col-10 col-form  col-xs-12"  readonly type="text" >
          </div> -->

          <div class="form-group row">
            <h5 class="col-md-12 col-xs-12 text-center">DESCRIPCION DEL REPORTE</h5>
            <textarea  class="form-control col-12 col-form col-xs-12"   name="descripcionReporte" required  rows="10" ></textarea>

          </div>

          <div class="container" align="center">
            <button type="submit"  class="btn btn-primary ">CREAR REPORTE</button>
            <BR />
            <BR />

          </div>

        </div>

    </div>
  </form>
</div>
<br />
<br />
<br />
<br />

@endsection
