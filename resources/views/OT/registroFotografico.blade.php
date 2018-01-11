@extends('layouts.app')
@section('content')


<h3 class="text-center">REFISTRO FOTOGRAFICO </h3>

<h3 class="text-center">OT Nº:#####</h3>
<h3 class="text-center">REPORTE Nº:#####</h3>



<h3 class="text-center">FOTOS SUBIDAS</h3>
<div class="table-responsive">


<div class="col-md-12 col-xs-12">
  <div class="form-group row">
    <textarea  class="form-control col-6 col-form  col-xs-6" rows="10" ></textarea>
    <img src="http://via.placeholder.com/350x350"  class="img-thumbnail  col-5 col-xs-5" alt="Cinque Terre">
    <!-- <div class="col-1"> -->
      <button type="button" class="btn btn-danger col-1  col-xs-1">X</button>
    <!-- </div> -->
  </div>
</div>
</div>
<br />



@endsection
