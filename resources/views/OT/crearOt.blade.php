@extends('layouts.app')
@section('content')
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
          <td><input type="date" class="form-control" name="fecha_inicio" value=""></td>
        </tr>



        <tr>
          <td>  <h5 class="text-right">REGION:</h5></td>
          <td>
            <select class="form-control" name="region">
              <option></option>
              <option></option>
              <option></option>
              <option></option>
            </select>
          </td>
        </tr>

        <tr>
          <td>  <h5 class="text-right">CIUDAD:</h5></td>
          <td>
            <select class="form-control" name="ciudad">
              <option></option>
              <option></option>
              <option></option>
              <option></option>
            </select>
          </td>
        </tr>

        <tr>
          <td>  <h5 class="text-right">DIRECCION:</h5></td>
          <td><input type="text" class="form-control" name="direccion" value=""></td>
        </tr>

        <tr>
          <td>  <h5 class="text-right">VALOR:</h5></td>
          <td><input type="text" class="form-control" name="valor" value=""></td>
        </tr>

        <tr>
          <td></td>
          <td align="center">
            <button type="button" name="button" style="width:150px;" class=" btn btn-primary">CREAR OT</button>
          </td>
        </tr>

      </table>
    </div>
  </div>

</div>

@endsection
