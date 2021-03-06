
@extends('layouts.app')
@section('content')
@include('layouts.messages')
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>


<div class="row">

    <div class="col-md-2 col-xs-12">

      <img  src="storage/{{ $fotoPerfil }}" width="200" height="300" />

      <br />
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#subirAvatar" data-backdrop="static">ACTUALIZAR FOTO </button>
      @include('modals.subirAvatar')
    </div>




  <div class="col-md-10 col-xs-12">
    <h1 class="display-6 ">DATOS PERSONALES</h1>

    <br />
    <form action="{{ route('actualizarDatosPersonales')}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <table class="table" >
            <tr>
              <td >
                <h4 class="text-right">NOMBRE:</h4>
              </td>
              <td>
                  <input class="form-control"  type="text" name="nombre" value="{{ Auth::user()->USER_NOMBRE }}">
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
                  <input class="form-control" name="rut" type="text" placeholder="no inscrito" value="{{ Auth::user()->USER_RUT }}">
              </td>
            </tr>
            <tr>
              <td>
                <h4 class="text-right">EMAIL:</h4>
              </td>
              <td>
                  <input class="form-control" name="email" type="email" value="{{ Auth::user()->email }}" >
              </td>
            </tr>
            <tr>

              <td colspan="2" align="center">
                  <button type="submit" class="btn btn-primary">ACTUALIZAR DATOS</button>
              </td>
            </tr>
          </table>

    </form>

  </div>

</div>

<div class="row">
  <div class="col-md-2 col-xs-10">
  </div>

  <div class="col-md-10 col-xs-12">
    <form action="{{ route('actualizarDatosBancarios')}}" method="post">
      {{ csrf_field() }}
      {{ method_field('PATCH') }}

      <h1 class="display-6 ">DATOS BANCARIOS</h1>


      <table class="table" >
        <tr>
          <td>
            <h4 class="text-right">Nº CUENTA:</h4>
          </td>
          <td>
              <input class="form-control" name="nCuenta"   type="text" value="{{ Auth::user()->USER_N_CTA_BANCO }}">
          </td>
        </tr>

        <tr>
          <td>
            <h4 class="text-right">TIPO DE CUENTA:</h4>
          </td>
          <td>
            <select class="form-control"   name="tipoCta" >
              <option selected>{{ Auth::user()->USER_TP_CTA }}</option>
              <option>CORRIENTE</option>
              <option>AHORRO</option>
              <option>RUT</option>
            </select>
          </td>
        </tr>

        <tr>

            <td>
              <h4 class="text-right">BANCO:</h4>
            </td>
            <td>
              <select class="form-control"   name="banco" >
                <option selected>{{ Auth::user()->USER_BANCO }}</option>
                <option>BANCO ESTADO</option>
                <option>BCI</option>
                <option>BBVA</option>
              </select>
            </td>
        </tr>
        <tr>

          <td colspan="2" align="center">
              <button type="submit" class="btn btn-primary">ACTUALIZAR DATOS</button>
          </td>
        </tr>
      </table>

    </form>

  </div>
</div>
@if ($tipoDeUsuario==2)
<div class="row">
  <div class="col-md-12 col-xs-12">
    <h1 class="display-6 text-center">OT's ASIGNADAS</h1>

    <div class="table-responsive">
      <table class="table table-hover table-dark table-bordered table-striped" align="center">

        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>DESCRIPCION</th>
            <th>FECHA INICIO</th>
            <th>FECHA TERMINO</th>
            <th width="100px" colspan="1">ACCION</th>
          </tr>
        </thead>
        @foreach($OTasignadas as $OTasignada)
        <tr>
          <td>{{$OTasignada->OT_ID}}</td>
          <td>{{$OTasignada->OT_DES}}</td>
          <td>{{$OTasignada->OT_FECHA_CREACION}}</td>
          <td>{{$OTasignada->OT_FECHA_TERMINO}}</td>

          <td width="25px">
            <a href="{{route('OTedicion', $OTasignada->OT_ID)}}"  data-toggle="tooltip"p data-lacement="top" title="VER OT">
              <button class="btn btn-xs btn-success"> <i class="fa fa-play" style="font-size:20px;"></i></button>
            </a>
          </td>
          <!-- <td width="25px">

          <button type="button" class="btn btn-xs btn-primary"><i class="fa fa-photo" style="font-size:20px;"></i></button>
        </td> -->

      </tr>
      @endforeach

    </table>
  </div>
</div>
</div>

{{ $OTasignadas->links('pagination::bootstrap-4') }}

 @endif
@if ($tipoDeUsuario==1)

<div class="row">
  <div class="col-md-12 col-xs-12">
    <h1 class="display-6 text-center">OT's CREADAS</h1>

    <div class="table-responsive">
      <table class="table table-hover table-dark table-bordered table-striped" align="center">
        <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>DESCRIPCION</th>
              <th>FECHA INICIO</th>
              <th>FECHA TERMINO</th>
              <th width="100px" >ACCION</th>
            </tr>
        </thead>
        @foreach($OTcreadas as $OTcreada)
        <tr>
          <td>{{$OTcreada->OT_ID}}</td>
          <td>{{$OTcreada->OT_DES}}</td>
          <td>{{$OTcreada->OT_FECHA_TERMINO}}</td>
          <td>{{$OTcreada->OT_FECHA_CREACION}}</td>
          <td><a  href="{{route('resumen', $OTcreada->OT_ID)}}"  <button type="button" class="btn btn-primary">EDITAR</button></td>
        </tr>
        @endforeach

      </table>
    </div>
    {{ $OTcreadas->links('pagination::bootstrap-4') }}
  </div>
</div>
 @endif

@endsection
