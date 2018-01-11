@extends('layouts.app')
@section('content')
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
    <div class="table-responsive">
      <table class="table table-bordered">
        <tr>
          <td>ID</td>
          <td>DESCRIPCION</td>
          <td>FECHA DE INICIO</td>
          <td>FECHA DE FIN</td>
          <td>ACCION</td>
        </tr>

        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td width="15px"><a href="{{route('resumenOt')}}"<button class="btn btn-lg btn-success"> <i class="fa fa-play"></i></button></td>
        </tr>

        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td width="15px"><button class="btn btn-lg btn-danger"><i class="fa fa-remove"></i></button></td>
        </tr>
      </table>
    </div>
  </div>
</div>
@endsection
