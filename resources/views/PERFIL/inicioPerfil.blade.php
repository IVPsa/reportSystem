@extends('layouts.app')
@section('content')

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

@if ($message = Session::get('success'))
<div class="alert alert-success" data-dismiss="alert" aria-label="Close" >
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <p>{{ $message }}</p>
</div>
@endif

<div class="row">
  <div class="col-md-2 col-xs-12">
    <img src="http://via.placeholder.com/350x350"  class="img-thumbnail" alt="Cinque Terre">
    <br />
    <button type="button" class="btn btn-primary btn-lg">ACTUALIZAR FOTO </button>

  </div>

  <div class="col-md-10 col-xs-12">

    <h1 class="display-6 ">DATOS PERSONALES</h1>

    <table class="table" >
      <tr>
        <td >
          <h4 class="text-right">NOMBRE:</h4>
        </td>
        <td>
            <input class="form-control"  type="text" value=" {{ Auth::user()->USU_NOMBRE }}">
        </td>
      </tr>

      <tr>
        <td>
          <h4 class="text-right">EMPRESA:</h4>
        </td>
        <td>
            <input class="form-control" type="text" value="{{ Auth::user()->USU_EMPRESA }}" >
        </td>
      </tr>

      <tr>
        <td>
          <h4 class="text-right">RUT:</h4>
        </td>
        <td>
            <input class="form-control" type="text" placeholder="no inscrito">
        </td>
      </tr>
      <tr>
        <td>
          <h4 class="text-right">EMAIL:</h4>
        </td>
        <td>
            <input class="form-control" type="text" value="{{ Auth::user()->email }}" >
        </td>
      </tr>
      <tr>
        <td>

        </td>
        <td>
            <button type="button" class="btn btn-primary">ACTUALIZAR DATOS</button>
        </td>
      </tr>
    </table>



  </div>
</div>

<div class="row">
  <div class="col-md-2 col-xs-10">

  </div>

  <div class="col-md-10 col-xs-12">

    <h1 class="display-6 ">DATOS BANCARIOS</h1>


    <table class="table" >
      <tr>
        <td>
          <h4 class="text-right">Nº CUENTA:</h4>
        </td>
        <td>
            <input class="form-control"   type="text" value="{{ Auth::user()->USER_N_CTA_BANCO }}">
        </td>
      </tr>

      <tr>
        <td>
          <h4 class="text-right">TIPO DE CUENTA:</h4>
        </td>
        <td>
          <select class="form-control"   name="" >
            <option selected>{{ Auth::user()->USER_TP_CTA }}</option>
            <option></option>
            <option></option>
            <option></option>
          </select>
        </td>
      </tr>

      <tr>

          <td>
            <h4 class="text-right">BANCO:</h4>
          </td>
          <td>
              <input class="form-control" type="text" value="{{ Auth::user()->USER_BANCO }}" >
          </td>
      </tr>
      <tr>
        <td>

        </td>
        <td>
            <button type="button" class="btn btn-primary">ACTUALIZAR DATOS</button>
        </td>
      </tr>
    </table>


  </div>
</div>

<div class="row">
  <div class="col-md-12 col-xs-12">
    <h1 class="display-6 text-center">OT's ASIGNADAS</h1>

    <div class="table-responsive">
      <table class="table table-bordered" align="center">
        <tr>
          <td>ID</td>
          <td>DESCRIPCION</td>
          <td>FECHA INICIO</td>
          <td>FECHA TERMINO</td>
          <td width="100px" colspan="3">ACCION</td>
        </tr>
        @foreach($OTasignadas as $OTasignadas)
        <tr>
          <td>{{$OTasignadas->OT_ID}}</td>
          <td>{{$OTasignadas->OT_DES}}</td>
          <td>{{$OTasignadas->OT_FECHA_CREACION}}</td>
          <td>{{$OTasignadas->OT_FECHA_TERMINO}}</td>
          <td>
            <a href="{{route('OTedicion', $OTasignadas->OT_ID)}}"  data-toggle="tooltip"p data-lacement="top" title="VER OT">
              <button class="btn btn-xs btn-success"> <i class="fa fa-play" style="font-size:20px;"></i></button>
            </a>
            @if ($buscarReporte == "[]" )
            <a href="#" data-toggle="tooltip" data-lacement="top" title="AUN NO SE HA CREADO UN REPORTE">
              <button type="button" class="btn btn-xs btn-primary"><i class="fa fa-clipboard" style="font-size:20px;"></i></button>
            </a>
            @endif
            <!-- <a href="{{route('edicionDeReporte', $OTasignadas->OT_ID)}}" data-toggle="tooltip"p data-lacement="top" title="VER REPORTE">
              <button type="button" class="btn btn-xs btn-primary"><i class="fa fa-clipboard" style="font-size:20px;"></i></button>
            </a> -->

              <button type="button" class="btn btn-xs btn-primary"><i class="fa fa-photo" style="font-size:20px;"></i></button>

          </td>
        </tr>
        @endforeach
      </table>
    </div>

  </div>
</div>

<div class="row">
  <div class="col-md-12 col-xs-12">
    <h1 class="display-6 text-center">OT's CREADAS</h1>

    <div class="table-responsive">
      <table class="table table-bordered" align="center">
        <tr>
          <td>ID</td>
          <td>DESCRIPCION</td>
          <td>FECHA INICIO</td>
          <td>FECHA TERMINO</td>
          <td width="100px">ACCION</td>
        </tr>
        @foreach($OTcreadas as $OTcreadas)
        <tr>
          <td>{{$OTcreadas->OT_ID}}</td>
          <td>{{$OTcreadas->OT_DES}}</td>
          <td>{{$OTcreadas->OT_FECHA_TERMINO}}</td>
          <td>{{$OTcreadas->OT_FECHA_CREACION}}</td>
          <td><a  href="{{route('resumen', $OTcreadas->OT_ID)}}"  <button type="button" class="btn btn-primary">EDITAR</button></td>
        </tr>
        @endforeach

      </table>
    </div>

  </div>
</div>


@endsection
