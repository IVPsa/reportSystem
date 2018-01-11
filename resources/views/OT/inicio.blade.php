@extends('layouts.app')
@section('content')
<h3 class="text-center">CREAR ORDEN DE TRABAJO</h3>
<h3 class="text-center">EMPRESA</h3>
<div class="row">



  <div class="col-md-12">

    <center>

        <a href="{{route('listaOt')}}"><button type="button" class="btn btn-success"> <i class="fa fa-address-card-o" style="font-size:150px"></i> <br>LISTADO DE OTS</button></a>
        <a href="{{route('crearOt')}}"><button type="button" class="btn btn-info"><i class="fa fa-clipboard" style="font-size:150px;"></i> <br> CREAR OT</button></a>
    </center>
  </div>
</div>


@endsection
