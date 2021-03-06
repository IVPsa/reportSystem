@extends('layouts.app')
@section('content')
@include('layouts.messages')
<h3 class="text-center">ORDEN DE TRABAJO ID: {{$ordenDeTrabajoAsignada->OT_ID}}</h3>

  <div class="row">


    <div class="col-md-12 col-xs-12">

      <div class="col-md-12 col-xs-12">
        <h5 class="text-center">DESCRIPCION</h5>
        <textarea style="height:350px;" name="descripcion" readonly  class="form-control">{{$ordenDeTrabajoAsignada->OT_DES}}</textarea>
      </div>

      <div class="col-md-12 col-xs-12">
        <form action="{{ route('edicionDeOtAsignada', $ordenDeTrabajoAsignada->OT_ID) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
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
                  <td><input type="text" readonly  class="form-control" name="region" value="{{$nombreRegion}}"></td>
                </tr>

                <tr>
                  <td>  <h5 class="text-right">PROVINCIA:</h5></td>
                  <td><input type="text"  readonly class="form-control" value="{{ $nombreProvincia}} "></td>
                </tr>


                <tr>
                  <td>  <h5 class="text-right">CIUDAD:</h5></td>

                  <td><input type="text"readonly class="form-control" name="ciudad" value="{{ $ciudad}} "></td>

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
                <tr>
                  <td align="center" colspan="2">
                    <button type="submit" name="button" style="width:150px;" class=" btn btn-primary">ACTUALIZAR</button>
                  </td>
                </tr>


              </table>
        </form>
        <table align="center" cellpadding="5">
          @if ($comprobarExistenciaDeReporte == "[]" )
          <tr>
              <td>
                <form action="{{route('reporteCreacion',$ordenDeTrabajoAsignada->OT_ID)}}" method="post">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-primary " >CREAR REPORTE</button>
                </form>
              </td>
          </tr>
          @else
            @foreach ($verReporte as $verReporte)
              <tr>
                <td align="center"colspan="2">
                  <a href="{{route('edicionDeReporte', $verReporte->REP_COD)}}">
                    <button type="button" name="button" class=" btn btn-primary btn-xs" style="width:150px;">VER REPORTE</button>
                  </a>
                </td>
              </tr>
            @endForeach
          @endif

        </table>

      </div>
    </div>
  </div>
<!--
  <a href="{{route('pdfOt')}}">    <button type="button" class="btn btn-primary " >CREAR PDF</button></a>
  <form action="{{route('pdfOt')}}" method="get">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary " >CREAR REPORTE</button>
    <input  name="codigoOt" hidden value="{{$ordenDeTrabajoAsignada->OT_ID}}">
  </form> -->

@endsection
