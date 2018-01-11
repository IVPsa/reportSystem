@extends('layouts.app')

@section('content')
<div class="row">

  <div class="col-md-12">

    <center>

        <a href="{{route('Perfil')}}"><button type="button" class="btn btn-success"> <i class="fa fa-address-card-o" style="font-size:150px"></i> <br>PERFIL</button></a>
        <a href="{{route('listaOt')}}"><button type="button" class="btn btn-info"><i class="fa fa-clipboard" style="font-size:150px;"></i> <br> OT</button></a>
        <a href="{{route('reportes')}}"><button type="button" class="btn btn-warning"> <i class="fa fa-archive" style="font-size:150px;"></i> <br> REPORTES</button></a>

    </center>
  </div>

  <!--grilla para formularios-->
        <div class="col-md-12">
          <div class="row">

              <div class="col-md-6 col-xs-12">

                <div class="form-group row">
                  <h5 class="col-md-2 col-xs-12 ">NOMBRE:</h5>
                  <input class="form-control col-10 col-form  col-xs-12"  type="text" >
                </div>

                <div class="form-group row">
                  <h5 class="col-md-2 col-xs-12">NOMBRE:</h5>
                  <input class="form-control col-10 col-form  col-xs-12"  type="text" >
                </div>

              </div>
          </div>
        </div>
    <!--grilla para formularios-->
</div>






@endsection
