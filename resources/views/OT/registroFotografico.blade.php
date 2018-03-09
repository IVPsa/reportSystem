@extends('layouts.app')
@section('content')


<h3 class="text-center">REGISTRO FOTOGRAFICO {{$reporteFotografico->RPFG_COD}}</h3>

<h3 class="text-center">OT Nº:{{$reporteFotografico->RPFG_OT_ID}}</h3>
<h3 class="text-center">REPORTE Nº: {{$reporteFotografico->RPFG_REP_COD}}</h3>



<h3 class="text-center">FOTOS DEL REPORTE</h3>

  <div class="row">
      @if ($foto <>  "[]")

        @foreach ($foto as $fotos)
        <div class="col-md-6 col-xs-6">
          <textarea  class="form-control " rows="10" readonly name="">{{$fotos->FT_DESC}}</textarea>
        </div>
        <div class="col-md-6 col-xs-6">
          <img src="{{Storage::disk('public')->url($fotos->FT_IMG)}}"  class="img-thumbnail " >
        </div>
        @endforeach

      @else
        <div class="form-group row">
          <div class="col-xs-12 col-md-12">
            <h1 class="text-center">AUN NO SE HAN SUBIDO FOTOS A ESTE REPORTE</h1>
          </div>
        </div>
      @endif
  </div>

{{ $foto->links('pagination::bootstrap-4') }}

<br />



@endsection
