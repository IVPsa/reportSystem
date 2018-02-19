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
      @foreach ($fotoPerfil as $fotoPerfil)
            <img  src="storage/{{$fotoPerfil->USER_AVATAR }}" width="200" height="300" />
      @endforeach
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
                  <input class="form-control"  type="text" name="nombre" value="{{ Auth::user()->USU_NOMBRE }}">
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
                  <input class="form-control" name="rut" type="text" placeholder="no inscrito" value="{{ Auth::user()->USU_RUT }}">
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

<div class="row">
  <div class="col-md-12 col-xs-12">
    <h1 class="display-6 text-center">OT's ASIGNADAS</h1>

    <div class="table-responsive">
      <table class="table table-hover table-dark table-bordered" align="center">

        <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>DESCRIPCION</th>
              <th>FECHA INICIO</th>
              <th>FECHA TERMINO</th>
              <th width="100px" colspan="3">ACCION</th>
            </tr>
        </thead>
        @foreach($OTasignadas as $OTasignadas)
        <tr>
          <td>{{$OTasignadas->OT_ID}}</td>
          <td>{{$OTasignadas->OT_DES}}</td>
          <td>{{$OTasignadas->OT_FECHA_CREACION}}</td>
          <td>{{$OTasignadas->OT_FECHA_TERMINO}}</td>
          <!--

          <td width="25px">
              @if ($buscarReporte == "[]" )
              <a href="#" data-toggle="tooltip" data-lacement="top" title="AUN NO SE HA CREADO UN REPORTE">
                <button type="button" class="btn btn-xs btn-primary"><i class="fa fa-clipboard" style="font-size:20px;"></i></button>
              </a>
              @else

                <a href="{{route('edicionDeReporte', $OTasignadas->OT_ID)}}" data-toggle="tooltip"p data-lacement="top" title="VER REPORTE">
                  <button type="button" class="btn btn-xs btn-primary"><i class="fa fa-clipboard" style="font-size:20px;"></i></button>
                </a>
              @endif

          </td> -->
          <td width="25px">
            <a href="{{route('OTedicion', $OTasignadas->OT_ID)}}"  data-toggle="tooltip"p data-lacement="top" title="VER OT">
              <button class="btn btn-xs btn-success"> <i class="fa fa-play" style="font-size:20px;"></i></button>
            </a>
          </td>
          <td width="25px">

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
      <table class="table table-hover table-dark table-bordered" align="center">
        <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>DESCRIPCION</th>
              <th>FECHA INICIO</th>
              <th>FECHA TERMINO</th>
              <th width="100px" colspan="3">ACCION</th>
            </tr>
        </thead>
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
