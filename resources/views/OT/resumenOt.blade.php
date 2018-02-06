@extends('layouts.app')
@section('content')
  <h3 class="text-center">ORDEN DE TRABAJO ID: {{ $ordenDeTrabajo->OT_ID  or '' }}</h3>
  <!-- <h3 class="text-center">EMPRESA:#####</h3> -->
  @if ($message = Session::get('success'))
  <div class="alert alert-success" data-dismiss="alert" aria-label="Close" >
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <p>{{ $message }}</p>
  </div>
  @endif
  <div class="row">



    <div class="col-md-12 col-xs-12">
      <form action="{{ route('edit', $ordenDeTrabajo->OT_ID) }}" method="post">

        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="col-md-12 col-xs-12">
          <h5 class="text-center">DESCRIPCION</h5>
          <textarea style="height:350px;" class="form-control"> {{ $ordenDeTrabajo->OT_DES}}</textarea>
        </div>

        <div class="col-md-12 col-xs-12">
          <table align="center" cellpadding="5">

            <tr>
              <td>  <h5 class="text-right">FECHA INICIO:</h5></td>
              <td><input type="text" class="form-control" name="fecha_inicio" value="{{ $ordenDeTrabajo->OT_FECHA_CREACION}}"></td>
            </tr>



            <tr>
              <td>  <h5 class="text-right">FECHA TERMINO:</h5></td>
              <td><input type="text" class="form-control" name="fecha_termino" value="{{ $ordenDeTrabajo->OT_FECHA_TERMINO}}"></td>
            </tr>

            <tr>
              <td>  <h5 class="text-right">REGION:</h5></td>
              <td><input type="text" class="form-control" name="region" value="{{ $ordenDeTrabajo->OT_REGION}}"></td>
            </tr>

            <tr>
              <td>  <h5 class="text-right">CIUDAD:</h5></td>
              <td><input type="text" class="form-control" name="ciudad" value="{{ $ordenDeTrabajo->OT_CIUDAD}}"></td>
            </tr>

            <tr>
              <td>  <h5 class="text-right">DIRECCION:</h5></td>
              <td><input type="text" class="form-control" name="direccion" value="{{ $ordenDeTrabajo->OT_DIRECCION}}"></td>
            </tr>

            <tr>
              <td>  <h5 class="text-right">VALOR:</h5></td>
              <td><input type="text" class="form-control"   min="0" name="valor" value="{{ $ordenDeTrabajo->OT_VALOR}}"></td>
            </tr>

            <tr>
              <td><h5 class="text-right">ESTADO:</td>
              <td>
                <select class="form-control" name="estado">
                    <option value="{{ $ordenDeTrabajo->OT_ESTADO}}" > {{ $ordenDeTrabajo->OT_ESTADO}}</option>
                    <option value="EN PROCESO">EN PROCESO</option>
                    <option value="EN ESPERA">EN ESPERA</option>
                    <option value="TERMINADA">TERMINADA</option>
                </select>
              </td>

            </tr>

            <tr>
              <td><h5 class="text-right" >ENCARGADO:</h5></td>
              <td><input class="form-control" name="encargado" value="{{ $ordenDeTrabajo->OT_USER_ENCARGADO}}" readonly type="text" ></td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <button type="button" data-toggle="modal" data-target="#seleccionarEncargado" data-backdrop="static" name="button" style="width:200px;" class=" btn btn-primary btn-xs">ASIGNAR ENCARGADO</button></td>
            </tr>
            <tr>
              <td align="center"colspan="2">
                <a href="{{route('registroFotografico')}}">  <button type="button" name="button" style="width:200px;" class=" btn btn-primary btn-xs">REPORTE FOTOGRAFICO</button></a>
              </td>

            </tr>

            <tr>
              <td align="center" colspan="2">
                <button type="submit" name="button" style="width:200px;" class=" btn btn-primary">ACTUALIZAR</button>
              </td>

            </tr>

          </table>
        </div>

      </form>
    </div>

  </div>



<!-- tal vez esto sea util mas adelante
<div class="row">

    <div class="col-md-12 col-xs-12">

      <div class="col-md-12 col-xs-12">
        <h5 class="text-center">DESCRIPCION</h5>
        <textarea style="height:350px;" class="form-control"></textarea>
      </div>
    </div>
</div>
<br />
<br />

      <div class="row">
        <div class="container" >
            <div class="col-md-12" >
                <div class="row">
                  <div class="col-md-12 col-xs-12">

                    <div class="form-group row">
                      <h5 class="col-md-2 col-xs-12" >FECHA INICIO:</h5>
                      <input class="form-control col-10 col-form  col-xs-12" readonly type="text" >
                    </div>

                    <div class="form-group row">
                      <h5 class="col-md-2 col-xs-12" >FECHA TERMINO:</h5>
                      <input class="form-control col-10 col-form  col-xs-12" readonly type="text" >
                    </div>

                    <div class="form-group row">
                      <h5 class="col-md-2 col-xs-12" >REGION:</h5>
                      <input class="form-control col-10 col-form  col-xs-12" readonly type="text" >
                    </div>

                    <div class="form-group row">
                      <h5 class="col-md-2 col-xs-12" >CIUDAD:</h5>
                      <input class="form-control col-10 col-form  col-xs-12" readonly type="text" >
                    </div>

                    <div class="form-group row">
                      <h5 class="col-md-2 col-xs-12" >DIRECCION:</h5>
                      <input class="form-control col-10 col-form  col-xs-12" readonly type="text" >
                    </div>

                    <div class="form-group row">
                      <h5 class="col-md-2 col-xs-12" >VALOR:</h5>
                      <input class="form-control col-10 col-form  col-xs-12" readonly type="text" >
                    </div>

                    <div class="form-group row">
                      <h5 class="col-md-2 col-xs-12" >ESTADO:</h5>

                      <select class="form-control col-10 col-form  col-xs-12" name="">
                          <option value=""></option>
                          <option value=""></option>
                          <option value=""></option>
                          <option value=""></option>
                      </select>
                    </div>

                    <div class="form-group row">
                      <h5 class="col-md-2 col-xs-12" >ENCARGADO:</h5>
                      <input class="form-control col-md-5 col-form  col-xs-12" readonly type="text" >
                      <button type="button" name="button" class=" btn btn-primary btn-xs  col-md-5 col-form  col-xs-12">ASIGNAR</button>
                    </div>

                    <center>
                      <a href="{{route('reporteEdicion')}}"><button type="button" name="button"  class=" btn btn-primary ">REPORTE FOTOGRAFICO</button>   </a>
                      <br />
                      <br />
                      <button type="button" name="button"  class=" btn btn-primary">ACTUALIZAR</button>
                    </center>

                  </div>
              </div>
            </div>
        </div>
      </div>
-->
@endsection
