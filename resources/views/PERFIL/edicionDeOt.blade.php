@extends('layouts.app')
@section('content')
  <h3 class="text-center">ORDEN DE TRABAJO ID:#####</h3>
  <h3 class="text-center">EMPRESA:#####</h3>

  <div class="row">
    <div class="col-md-12 col-xs-12">

      <div class="col-md-12 col-xs-12">
        <h5 class="text-center">DESCRIPCION</h5>
        <textarea style="height:350px;" class="form-control"></textarea>
      </div>

      <div class="col-md-12 col-xs-12">
        <table align="center" cellpadding="5">

          <tr>
            <td>  <h5 class="text-right">FECHA INICIO:</h5></td>
            <td><input type="text" class="form-control" name="" value=""></td>
          </tr>

          <tr>
            <td>  <h5 class="text-right">FECHA TERMINO:</h5></td>
            <td><input type="text" class="form-control" name="" value=""></td>
          </tr>

          <tr>
            <td>  <h5 class="text-right">REGION:</h5></td>
            <td><input type="text" class="form-control" name="" value=""></td>
          </tr>

          <tr>
            <td>  <h5 class="text-right">CIUDAD:</h5></td>
            <td><input type="text" class="form-control" name="" value=""></td>
          </tr>

          <tr>
            <td>  <h5 class="text-right">DIRECCION:</h5></td>
            <td><input type="text" class="form-control" name="" value=""></td>
          </tr>

          <tr>
            <td>  <h5 class="text-right">VALOR:</h5></td>
            <td><input type="text" class="form-control" name="" value=""></td>
          </tr>

          <tr>
            <td><h5 class="text-right">ESTADO:</td>
            <td>
              <select class="form-control" name="">
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
              </select>
            </td>
          </tr>

          <tr>
            <td></td>
            <td align="center">
            <a href="{{route('reporteEdicion')}}">  <button type="button" name="button" style="width:150px;" class=" btn btn-primary btn-xs">REPORTE FOTOGRAFICO</button></a>

            </td>
          </tr>

          <tr>
            <td></td>
            <td align="center">
              <button type="button" name="button" style="width:150px;" class=" btn btn-primary">ACTUALIZAR</button>
            </td>
          </tr>

        </table>
      </div>
    </div>

  </div>
@endsection
