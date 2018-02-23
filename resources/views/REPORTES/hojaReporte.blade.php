<<<<<<< current
@extends('layouts.app')
@section('content')
<h1 class="text-center">REPORTE Nº######</h1>

<table cellpadding="5" align="center">

  <tr>
    <td>  <h5 class="text-right">OT Nº:</h5></td>
    <td><input type="text" class="form-control" name="" value=""></td>
  </tr>



  <tr>
    <td>  <h5 class="text-right">CREADOR:</h5></td>
    <td><input type="text" class="form-control" name="" value=""></td>
  </tr>

  <tr>
    <td>  <h5 class="text-right">EMPRESA:</h5></td>
    <td><input type="text" class="form-control" name="" value=""></td>
  </tr>
</table>

<div class="row">
  <div class="col-md-12 col-xs-12">

    <div class="form-group row">
      <h5 class="col-md-12 col-xs-12 text-center">DESCRIPCION DEL REPORTE</h5>
      <textarea  class="form-control col-12 col-form  col-xs-12" rows="10" ></textarea>

    </div>

  </div>
</div>


  <div class="container" align="center">

    <a href="{{route('ReporteFotografico')}}"><button class="btn btn-primary " > REGISTRO FOTOGRAFICO</button>
  </div>




<br />
<br />

@endsection
=======
@extends('layouts.app')
@section('content')
<h1 class="text-center">REPORTE Nº######</h1>

<table cellpadding="5" align="center">

  <tr>
    <td>  <h5 class="text-right">OT Nº:</h5></td>
    <td><input type="text" class="form-control" name="" value=""></td>
  </tr>



  <tr>
    <td>  <h5 class="text-right">CREADOR:</h5></td>
    <td><input type="text" class="form-control" name="" value=""></td>
  </tr>

  <tr>
    <td>  <h5 class="text-right">EMPRESA:</h5></td>
    <td><input type="text" class="form-control" name="" value=""></td>
  </tr>
</table>

<div class="row">
  <div class="col-md-12 col-xs-12">

    <div class="form-group row">
      <h5 class="col-md-12 col-xs-12 text-center">DESCRIPCION DEL REPORTE</h5>
      <textarea  class="form-control col-12 col-form  col-xs-12" rows="10" ></textarea>

    </div>

  </div>
</div>


  <div class="container" align="center">

    <!-- <a href="{{route('ReporteFotografico')}}"><button class="btn btn-primary " > REGISTRO FOTOGRAFICO</button> -->
  </div>




<br />
<br />

@endsection
>>>>>>> before discard
