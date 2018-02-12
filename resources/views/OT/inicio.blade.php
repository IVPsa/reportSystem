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
    @if ($message = Session::get('success'))
    <div class="alert alert-success" data-dismiss="alert" aria-label="Close" >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          <p>{{ $message }}</p>
      </div>
    @endif

    <center>

        <a href="{{route('listaOt')}}"><button type="button" class="btn btn-success"> <i class="fa fa-address-card-o" style="font-size:150px;width:202px;"></i> <br>LISTADO DE OTS</button></a>
        <a href="{{route('OT.crearOT')}}"><button type="button" class="btn btn-info"><i class="fa fa-clipboard" style="font-size:150px;width:202px;"></i> <br> CREAR OT</button></a>
    </center>
  </div>
</div>

<div style="height:250px;">

</div>



@endsection