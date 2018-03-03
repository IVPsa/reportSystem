@extends('layouts.app')
@section('content')

<BR />
<BR />

<h3 class="text-center">REGISTRO FOTOGRAFICO  {{$reporteFotografico->RPFG_COD}}</h3>

<h3 class="text-center">OT Nº:{{$reporteFotografico->RPFG_OT_ID}}</h3>
<h3 class="text-center">REPORTE Nº:{{$reporteFotografico->RPFG_REP_COD}}</h3>


<div class="table-responsive">


  <h3 class="text-center">FOTOS SUBIDAS</h3>
  <div class="table-responsive">

    <div class="col-md-12 col-xs-12">
        @if ($foto <>  "[]")
          <div class="form-group row">
            @foreach ($foto as $fotos)
              <textarea  class="form-control col-6 col-form  col-xs-6" rows="10" name="">{{$fotos->FT_DESC}}</textarea>
              <img src="storage/{{$fotos->FT_IMG}}"  class="img-thumbnail  col-6 col-xs-6" >
            @endforeach
          </div>
        @else
          <div class="form-group row">
            <div class="col-xs-12 col-md-12">
              <h1 class="text-center">AUN NO SE HAN SUBIDO FOTOS A ESTE REPORTE</h1>
            </div>
          </div>
        @endif
    </div>
    {{ $foto->links('pagination::bootstrap-4') }}
  </div>
</div>
<br />



@endsection
