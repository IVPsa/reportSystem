@extends('layouts.app')
@section('content')
@include('layouts.messages')
  <h3 class="text-center">ORDEN DE TRABAJO ID: {{ $ordenDeTrabajo->OT_ID  or '' }}</h3>
  <!-- <h3 class="text-center">EMPRESA:#####</h3> -->
  <div class="row">



    <div class="col-md-12 col-xs-12">
      <form action="{{ route('edit', $ordenDeTrabajo->OT_ID) }}" method="post">

        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="col-md-12 col-xs-12">
          <h5 class="text-center">DESCRIPCION</h5>
          <textarea style="height:350px;" name="descripcion" class="form-control"> {{ $ordenDeTrabajo->OT_DES}}</textarea>
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
              <td><h5 class="text-right" >ENCARGADO ID:</h5></td>
              <td><input class="form-control" name="encargado" id="usuario" value=" {{ $ordenDeTrabajo->OT_USER_ENCARGADO}}"  type="text" ></td>

            </tr>

            <tr>
                <td colspan="2" align="center"> <button type="button" data-toggle="modal" data-target="#seleccionarEncargado" data-backdrop="static" name="button" style="width:200px;" class=" btn btn-primary btn-xs">ASIGNAR ENCARGADO</button></td>
            </tr>
<!--
            <tr>
              <td align="center"colspan="2">
                <a href="{{route('registroFotografico')}}">  <button type="button" name="button" style="width:200px;" class=" btn btn-primary btn-xs">REPORTE FOTOGRAFICO</button></a>
              </td>
            </tr> -->

            <tr>
              <td align="center" colspan="2">
                <button type="submit" name="button" style="width:200px;" class=" btn btn-primary">ACTUALIZAR</button>
              </td>
            </tr>

          </table>
        </div>

      </form>
    </div>
    <div class="col-md-12 col-xs-12">

      @if ($comprobarExistenciaDeReporte <> "[]" )
        <div class="container" align="center">
          @foreach ($verReporte as $verReporte)
            <a href="{{route('VerReporteOT', $verReporte->REP_COD)}}">

              <button type="button" class="btn btn-primary"  style="width:200px;" name="button">VER REPORTE</button>
            </a>
          @endforeach
        </div>
      @endif
    </div>

  </div>

  @include('modals.seleccionarEncargado')
  <!-- Modal -->



@endsection
