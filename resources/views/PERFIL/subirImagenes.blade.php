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

         <input type="file" accept="image/*"  class="form-control-file col-5 col-form  col-xs-12 " name="image"  id="files" />

      </div>

      <div class="form-group row">
        <h5 class="col-md-2 col-xs-12">DESCRIPCION:</h5>
        <textarea  name="descripcionImagen" class="form-control col-5 col-form  col-xs-12" rows="10"  required></textarea>
        <output  class="form-control col-5 col-form col-xs-12"  id="list"></output>

      </div>

      <div class="form-group row">
        <div class=" col-md-2  col-xs-12"></div>
        <button  type="submit" class="btn btn-lg btn-primary col-10 col-form  col-xs-12">
          SUBIR FOTOGRAFIA  <i class="fa fa-camera"></i>
        </button>
      </div>
    </form>
</div>

<h3 class="text-center">FOTOS SUBIDAS</h3>
<div class="table-responsive">

  <div class="col-md-12 col-xs-12">

    @if ($foto <>  "[]")

          @foreach ($foto as $fotos)

              <div class="row">
                <div class="col-md-5 col-xs-6">
                  <textarea  class="form-control" rows="10" name="fotoDescripcion" >{{$fotos->FT_DESC}}</textarea>
                </div>

                <div class="col-md-6 col-xs-5">
                    <img src="{{ Storage::disk('public')->url($fotos->FT_IMG)}}"  class="img-thumbnail" >
                </div>

                <div class="col-md-1 col-xs-1">

                  <form action="{{route('eliminarArchivo')}}" method="post">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <input hidden name="codigoReporte" value="{{$fotos->FT_RPFG_COD}}">
                    <input hidden name="codigoFoto" value="{{$fotos->FT_COD}}">
                    <button type="submit" class="btn btn-lg btn-danger" style="width:80px;"  data-toggle="tooltip" data-placement="bottom" title="ELIMNAR FOTO">
                      <i class="fa fa-remove"></i>
                    </button>
                  </form>

                  <br />

                  <a href="{{ Storage::disk('public')->url($fotos->FT_IMG)}}" data-toggle="tooltip" data-placement="bottom" title="DESCARGAR FOTO">
                    <button type="button" class="btn btn-lg btn-info" style="width:80px;" ><i class="fa fa-arrow-down" style="font-size:24px"></i></button>
                  </a>

                  <br />
                  <br />

                  <a  data-toggle="tooltip" data-placement="bottom" title="EDITAR DESCRIPCION">
                    <button type="button" class="btn btn-lg btn-success" style="width:80px;" data-toggle="modal" data-target="#nuevaDescripcionDeFoto" data-backdrop="static"  >
                      <i class="fa fa-pencil-square-o"></i>
                    </button>
                  </a>
                  @include('modals.NuevaDescripcionDeFoto')

                </div>
              </div>
            <br />
          @endforeach

      @else
        <div class="form-group row">
          <div class="col-xs-12 col-md-12">
            <h1 class="text-center">AUN NO SE HAN SUBIDO FOTOS A ESTE REPORTE</h1>
          </div>
        </div>
      @endif

  </div>
</div>
    {{ $foto->links('pagination::bootstrap-4') }}
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
