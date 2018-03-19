@extends('layouts.app')
@section('content')

<div class="row">

  <div class="col-md-12 col-xs-12">
    <form id="form1" name="form1" class="form-horizontal" method="post" action="{{ route('OT.crearOT') }}">
    {{ csrf_field() }}
          <div class="col-md-12 col-xs-12">
            <h5 class="text-center">DESCRIPCION</h5>
            <textarea style="height:350px;" class="form-control" name="descripcion"></textarea>
          </div>

          <div class="col-md-12 col-xs-12">
            <table align="center" cellpadding="5">

              <tr>
                <td>  <h5 class="text-right">FECHA INICIO:</h5></td>
                <td><input type="text" readonly class="form-control" name="fecha_inicio" value="<?php echo date("Y-d-m");?>"></td>
              </tr>



              <tr>
                <td>  <h5 class="text-right">REGION:</h5></td>
                <td>
                  <select class="form-control"  id="region" name="region">
                    @foreach ($region as $region)
                      <option value="{{ $region->REG_COD}}">{{ $region->REG_NOMBRE}}</option>
                    @endforeach
                  </select>
                </td>
              </tr>

              <tr>
                <td>  <h5 class="text-right">PROVINCIA:</h5></td>
                <td>
                  <select class="form-control" id="provincia" name="provincia">
                        <option>Seleccionar</option>
                        @foreach ($provincias as $provincias)
                          <option value="{{ $provincias->PRO_COD}}">{{ $provincias->PRO_NOMBRE}}</option>
                        @endforeach
                  </select>
                </td>
              </tr>

              <tr>
                <td>  <h5 class="text-right">CIUDAD:</h5></td>
                <td>
                  <select class="form-control" id="ciudad" name="ciudad">
                    <option>Seleccionar</option>
                    @foreach ($ciudades as $ciudades)
                      <option value="{{ $ciudades->COM_COD}}">{{ $ciudades->COM_NOMBRE}}</option>
                    @endforeach
                  </select>


                </td>
              </tr>

              <tr>
                <td>  <h5 class="text-right">DIRECCION:</h5></td>
                <td><input type="text" class="form-control" name="direccion" value=""></td>
              </tr>

              <tr>
                <td>  <h5 class="text-right">VALOR:</h5></td>
                <td><input type="number" min=0 class="form-control" name="valor" value=""></td>
              </tr>

              <tr>
                <td></td>
                <td align="center">
                  <button type="submit" name="button" style="width:150px;" class=" btn btn-primary">CREAR OT</button>
                </td>
              </tr>

            </table>
          </div>
    </form>
  </div>

</div>

@endsection
