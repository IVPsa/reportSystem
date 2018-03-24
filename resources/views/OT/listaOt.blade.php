@extends('layouts.app')
@section('content')
@include('layouts.messages')

<h1 class="text-center">LISTADO DE ORDENES DE TRABAJO</h1>
<table cellpadding="5" align="center">

  <tr>
    <td>  <h5 class="text-right">BUSCAR POR NOMBRE:</h5></td>
    <td><input type="text" class="form-control" name="" value=""></td>
  </tr>



  <tr>
    <td>  <h5 class="text-right">BUSCAR POR ESTADO:</h5></td>
    <td>
      <select class="form-control" name="">
        <option></option>
        <option></option>
        <option></option>
        <option></option>
      </select>
    </td>
  </tr>

  <tr>
    <td>  <h5 class="text-right">DESDE:</h5></td>
    <td>
      <input type="date" class="form-control" name="" value="">
    </td>
  </tr>

  <tr>
    <td>  <h5 class="text-right">HASTA:</h5></td>
    <td>
      <input type="date" class="form-control" name="" value="">
    </td>
  </tr>

  <tr>
    <td>  <h5 class="text-right">EMPRESA</h5></td>
    <td>
      <select class="form-control" name="">
        <option></option>
        <option></option>
        <option></option>
        <option></option>
      </select>
    </td>
  </tr>

  <tr>
    <td></td>
    <td align="center">
      <a href="#" class="btn btn-lg btn-primary " style="width:195px;"><i class="fa fa-search"></i> </a>
    </td>
  </tr>

</table>

<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="table-responsive" >
      <table class="table table-bordered table-hover table-dark table-striped" align="center"  id="table">

        <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>DESCRIPCION</th>
              <th>ESTADO</th>
              <th width="100px">FECHA INICIO</th>
              <th width="100px">FECHA TERMINO</th>
              <th width="100px" colspan="2">ACCION</th>
            </tr>
        </thead>
        @foreach($ordenDeTrabajo as $ordenesDeTrabajos)
        <tr>
          <td>{{ $ordenesDeTrabajos->OT_ID }}</td>
          <td>{{ $ordenesDeTrabajos->OT_DES }}</td>
          <td>{{ $ordenesDeTrabajos->OT_ESTADO }}</td>
          <td>{{ $ordenesDeTrabajos->OT_FECHA_CREACION }}</td>
          <td>{{ $ordenesDeTrabajos->OT_FECHA_TERMINO }}</td>
          <td width="15px" ><a href="{{route('resumen' ,$ordenesDeTrabajos->OT_ID)}}"><button class="btn btn-lg btn-success"> <i class="fa fa-play"></i></button></a></td>
          <td width="15px" >

            <a href="{{ route('Eliminar', $ordenesDeTrabajos->OT_ID) }}">
              <button type="button"  class="btn btn-lg btn-danger"><i class="fa fa-remove"></i></button>
            </a>
          </td>
        </tr>
        @endforeach


      </table>
    </div>
    {{ $ordenDeTrabajo->links('pagination::bootstrap-4') }}
  </div>
</div>

@endsection
