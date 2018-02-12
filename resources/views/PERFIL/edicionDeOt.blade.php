@extends('layouts.app')
@section('content')
<h3 class="text-center">ORDEN DE TRABAJO ID: {{$ordenDeTrabajoAsignada->OT_ID}}</h3>

<form action="{{ route('edicionDeOtAsignada', $ordenDeTrabajoAsignada->OT_ID) }}" method="post">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  <div class="row">
    <div class="col-md-12 col-xs-12">

      <div class="col-md-12 col-xs-12">
        <h5 class="text-center">DESCRIPCION</h5>
        <textarea style="height:350px;" name="descripcion" readonly  class="form-control">{{$ordenDeTrabajoAsignada->OT_DES}}</textarea>
      </div>

      <div class="col-md-12 col-xs-12">
        <table align="center" cellpadding="5">

          <tr>
            <td>  <h5 class="text-right">FECHA INICIO:</h5></td>
            <td><input type="date" class="form-control" name="fechaInicio" readonly value="{{$ordenDeTrabajoAsignada->OT_FECHA_CREACION}}" readonly></td>
          </tr>

          <tr>
            <td>  <h5 class="text-right">FECHA TERMINO:</h5></td>
            <td><input type="date" class="form-control" name="fechaTermino"  value="{{$ordenDeTrabajoAsignada->OT_FECHA_TERMINO}}"></td>
          </tr>

          <tr>
            <td>  <h5 class="text-right">REGION:</h5></td>
            <td><input type="text" class="form-control" name="region" readonly value="{{$ordenDeTrabajoAsignada->OT_REGION}}"></td>
          </tr>

          <tr>
            <td>  <h5 class="text-right">CIUDAD:</h5></td>
            <td><input type="text" class="form-control" name="ciudad" readonly value="{{$ordenDeTrabajoAsignada->OT_CIUDAD}}"></td>
          </tr>

          <tr>
            <td>  <h5 class="text-right">DIRECCION:</h5></td>
            <td><input type="text" class="form-control" name="direccion" readonly value="{{$ordenDeTrabajoAsignada->OT_DIRECCION}}"></td>
          </tr>

          <tr>
            <td>  <h5 class="text-right">VALOR:</h5></td>
            <td><input type="text" class="form-control" name="valor"  readonly value="{{$ordenDeTrabajoAsignada->OT_VALOR}}"></td>
          </tr>

          <tr>
            <td><h5 class="text-right">ESTADO:</td>
            <td>
              <select class="form-control" name="estado">
                  <option value="{{$ordenDeTrabajoAsignada->OT_ESTADO}}">{{$ordenDeTrabajoAsignada->OT_ESTADO}}</option>
                  <option value="EN PROCESO">EN PROCESO</option>
                  <option value="EN ESPERA">EN ESPERA</option>
                  <option value="TERMINADA">TERMINADA</option>
              </select>
            </td>
          </tr>
          @if ($buscarReporte == "[]" )
          <tr>
            <td align="center"colspan="2">
              <a href="{{route('CreacionDeReporte', $ordenDeTrabajoAsignada->OT_ID)}}">  <button type="button" name="button" class=" btn btn-primary btn-xs" style="width:150px;">CREAR REPORTE</button></a>
            </td>
          </tr>


          @else
          <tr>
            <td align="center"colspan="2">
              <button type="button" name="button" class=" btn btn-primary btn-xs" style="width:150px;">VER REPORTE</button>
            </td>
          </tr>

          @endif
          <tr>
            <td align="center" colspan="2">
              <button type="submit" name="button" style="width:150px;" class=" btn btn-primary">ACTUALIZAR</button>
            </td>
          </tr>

        </table>
      </div>
    </div>
  </div>

</form>
@endsection
