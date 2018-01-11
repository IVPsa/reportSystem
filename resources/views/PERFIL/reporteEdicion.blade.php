@extends('layouts.app')
@section('content')

<h3 class="text-center">REPORTE Nº:#####</h3>

<div class="col-md-12 col-xs-12">
  <div class="row">

      <div class="col-md-12 col-xs-12">

        <div class="form-group row">
          <h5 class="col-md-2 col-xs-12" >OT Nº:</h5>
          <input class="form-control col-10 col-form  col-xs-12" readonly type="text" >
        </div>

        <div class="form-group row">
          <h5 class="col-md-2 col-xs-12">CREADOR:</h5>
          <input class="form-control col-10 col-form  col-xs-12"  readonly type="text" >
        </div>

        <div class="form-group row">
          <h5 class="col-md-2 col-xs-12">EMPRESA:</h5>
          <input class="form-control col-10 col-form  col-xs-12"  readonly type="text" >
        </div>

        <div class="form-group row">
          <h5 class="col-md-12 col-xs-12 text-center">DESCRIPCION DEL REPORTE</h5>
          <textarea  class="form-control col-12 col-form  col-xs-12" rows="10" ></textarea>

        </div>

        <div class="container" align="center">

          <a href="{{route('subirImagenes')}}"><button class="btn btn-primary " > REGISTRO FOTOGRAFICO</button>
        </div>

      </div>
  </div>
</div>
<br />
<br />
<br />
<br />

@endsection
