@extends('layouts.app')
@section('content')

<br />
<br />
<br />
<br />
<h3 class="text-center">ORDENES DE TRABAJO</h3>
<!-- <h3 class="text-center">EMPRESA</h3> -->
<div class="row">

  <div class="col-md-12">

    <center>

        <a href="{{route('listaOt')}}"><button type="button" class="btn btn-success"> <i class="fa fa-address-card-o" style="font-size:150px"></i> <br>LISTADO DE OTS</button></a>
        <a href="{{route('crearOt')}}"><button type="button" class="btn btn-info"><i class="fa fa-clipboard" style="font-size:150px;"></i> <br> CREAR OT</button></a>
    </center>
  </div>
</div>

<div style="height:250px;">

</div>



@endsection
