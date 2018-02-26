@extends('layouts.app')
@section('content')
@include('layouts.messages')

<h3 class="text-center">REGISTRO FOTOGRAFICO {{$reporteFotografico->RPFG_COD}} </h3>

<h3 class="text-center">OT Nº:{{$reporteFotografico->RPFG_OT_ID}}</h3>
<h3 class="text-center">REPORTE Nº: {{$reporteFotografico->RPFG_REP_COD}}</h3>

<div class="col-md-12 col-xs-12">
    <form class="" action="{{route('subirArchivo', $reporteFotografico->RPFG_COD)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="form-group row">
        <input hidden name="codigoReporte" value="{{$reporteFotografico->RPFG_COD}}">
        <h5 class="col-md-2 col-xs-12" > SELECCIONAR IMAGEN:</h5>

         <input type="file"  accept="image/*" capture="camera" class="form-control-file col-5 col-form  col-xs-12 " name="image"  id="files" />
        <!-- <input class="form-control col-5 col-form  col-xs-12" readonly type="text" > -->
      </div>

      <div class="form-group row">
        <h5 class="col-md-2 col-xs-12">DESCRIPCION:</h5>
        <textarea  name="descripcionImagen" class="form-control col-5 col-form  col-xs-12" rows="10" ></textarea>
        <output  class="form-control col-5 col-form col-xs-12"  id="list"></output>

      </div>

      <div class="form-group row">
        <div class=" col-2 col-form  col-xs-12"></div>
        <input type="submit" class="btn btn-primary col-10 col-form  col-xs-12" value="SUBIR">
      </div>
    </form>
</div>

<h3 class="text-center">FOTOS SUBIDAS</h3>
<div class="table-responsive">


  <div class="col-md-12 col-xs-12">
    <div class="form-group row">
      @foreach ($fotos as $fotos)
        <textarea  class="form-control col-6 col-form  col-xs-6" rows="10" name="">{{$fotos->FT_DESC}}</textarea>
        <img src="storage/{{$fotos->FT_IMG}}"  class="img-thumbnail  col-5 col-xs-5" >

          <button type="button" class="btn btn-danger col-1  col-xs-1">X</button>

      @endforeach
    </div>
  </div>
</div>
<br />

<script>
         function archivo(evt) {
             var files = evt.target.files; // FileList object

             // Obtenemos la imagen del campo "file".
             for (var i = 0, f; f = files[i]; i++) {
               //Solo admitimos imágenes.
               if (!f.type.match('image.*')) {
                   continue;
               }

               var reader = new FileReader();

               reader.onload = (function(theFile) {
                   return function(e) {
                     // Insertamos la imagen
                    document.getElementById("list").innerHTML = ['<img class="img-thumbnail" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                   };
               })(f);

               reader.readAsDataURL(f);
             }
         }

         document.getElementById('files').addEventListener('change', archivo, false);
 </script>

@endsection
