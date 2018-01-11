@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">BIENVENIDO A REPORT SYSTEM BETA 0.1</h1>

<div class="row">

  <div class="col-md-12">
<br />
<br />
<br />
<br />
    <center>

        <a href="{{route('Perfil')}}"><button type="button" class="btn btn-success"> <i class="fa fa-address-card-o" style="font-size:150px; width:202px;"></i> <br>PERFIL</button></a>
        <a href="{{route('OT')}}"><button type="button" class="btn btn-info"><i class="fa fa-clipboard" style="font-size:150px; width:202px;"></i> <br> ORDENES DE TRABAJO</button></a>
        <a href="{{route('reportes')}}"><button type="button" class="btn btn-warning"> <i class="fa fa-archive" style="font-size:150px; width:202px;"></i> <br> REPORTES</button></a>

    </center>
  </div>


</div>


</div>

<div style="height:250px;">

</div>


@endsection
