@extends('layouts.app')

@section('content')
<div class="container">


<div class="row">

  <div class="col-md-12">

    <center>

        <a href="{{route('Perfil')}}"><button type="button" class="btn btn-success"> <i class="fa fa-address-card-o" style="font-size:150px"></i> <br>PERFIL</button></a>
        <a href="{{route('OT')}}"><button type="button" class="btn btn-info"><i class="fa fa-clipboard" style="font-size:150px;"></i> <br> OT</button></a>
        <a href="{{route('reportes')}}"><button type="button" class="btn btn-warning"> <i class="fa fa-archive" style="font-size:150px;"></i> <br> REPORTES</button></a>

    </center>
  </div>


</div>


</div>




@endsection
