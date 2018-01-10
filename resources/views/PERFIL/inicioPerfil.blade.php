@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-md-2 col-xs-12">
    <img src="https://s3.amazonaws.com/ceblog/wp-content/uploads/2012/05/lorem-ipsum1.jpg" class="img-thumbnail" alt="Cinque Terre">
    <br />
    <button type="button" class="btn btn-primary btn-lg">ACTUALIZAR FOTO </button>

  </div>

  <div class="col-md-10 col-xs-12">

    <h1 class="display-6 ">DATOS PERSONALES</h1>
    <div align="center">
    <table class="" >
      <tr>
        <td >
          <h4 class="text-right">NOMBRE:</h4>
        </td>
        <td>
            <input class="form-control"  type="text" >
        </td>
      </tr>

      <tr>
        <td>
          <h4 class="text-right">EMPRESA:</h4>
        </td>
        <td>
            <input class="form-control" type="text" >
        </td>
      </tr>

      <tr>
        <td>
          <h4 class="text-right">RUT:</h4>
        </td>
        <td>
            <input class="form-control" type="text" >
        </td>
      </tr>
      <tr>
        <td>
          <h4 class="text-right">EMAIL:</h4>
        </td>
        <td>
            <input class="form-control" type="text" >
        </td>
      </tr>
      <tr>
        <td>

        </td>
        <td>
            <button type="button" class="btn btn-primary">ACTUALIZAR DATOS</button>
        </td>
      </tr>
    </table>

    </div>

  </div>
</div>

<div class="row">
  <div class="col-md-2 col-xs-10">

  </div>

  <div class="col-md-10 col-xs-12">

    <h1 class="display-6 ">DATOS BANCARIOS</h1>

    <div align="center">
    <table class="" >
      <tr>
        <td>
          <h4 class="text-right">Nº CUENTA:</h4>
        </td>
        <td>
            <input class="form-control"   type="text" >
        </td>
      </tr>

      <tr>
        <td>
          <h4 class="text-right">TIPO DE CUENTA:</h4>
        </td>
        <td>
          <select class="form-control"   name="">
            <option></option>
            <option></option>
            <option></option>
            <option></option>
          </select>
        </td>
      </tr>

      <tr>

          <td>
            <h4 class="text-right">BANCO:</h4>
          </td>
          <td>
              <input class="form-control" type="text" >
          </td>
      </tr>
      <tr>
        <td>

        </td>
        <td>
            <button type="button" class="btn btn-primary">ACTUALIZAR DATOS</button>
        </td>
      </tr>
    </table>
    </div>

  </div>
</div>

<div class="row">
  <div class="col-md-12 col-xs-12">
    <h1 class="display-6 text-center">OT's ASIGNADAS</h1>

    <div class="table-responsive">
      <table class="table table-bordered" align="center">
        <tr>
          <td>ID</td>
          <td>DESCRIPCION</td>
          <td>FECHA INICIO</td>
          <td>FECHA TERMINO</td>
          <td width="100px">ACCION</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{route('edicionDeOt')}}"><button type="button" class="btn btn-primary">EDITAR</button></a></td>
        </tr>

      </table>
    </div>

  </div>
</div>

<div class="row">
  <div class="col-md-12 col-xs-12">
    <h1 class="display-6 text-center">OT's CREADAS</h1>

    <div class="table-responsive">
      <table class="table table-bordered" align="center">
        <tr>
          <td>ID</td>
          <td>DESCRIPCION</td>
          <td>FECHA INICIO</td>
          <td>FECHA TERMINO</td>
          <td width="100px">ACCION</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><button type="button" class="btn btn-primary">EDITAR</button></td>
        </tr>

      </table>
    </div>

  </div>
</div>


@endsection
