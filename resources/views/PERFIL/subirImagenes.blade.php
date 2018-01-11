@extends('layouts.app')
@section('content')


<h3 class="text-center">REFISTRO FOTOGRAFICO </h3>

<h3 class="text-center">OT Nº:#####</h3>
<h3 class="text-center">REPORTE Nº:#####</h3>

<div class="col-md-12 col-xs-12">

  <div class="form-group row">
    <h5 class="col-md-2 col-xs-12" >IMAGEN:</h5>
    <input class="form-control col-5 col-form  col-xs-12" readonly type="text" >
     <input type="file" class="form-control-file col-5 col-form  col-xs-12"  id="files" name="files[]">
    <!-- <input class="form-control col-5 col-form  col-xs-12" readonly type="text" > -->
  </div>

  <div class="form-group row">
    <h5 class="col-md-2 col-xs-12">DESCRIPCION:</h5>
    <textarea  class="form-control col-5 col-form  col-xs-12" rows="10" ></textarea>
    <output  class="form-control col-5 col-form  col-xs-12" id="list"></output>
  </div>

  <div class="form-group row">
    <div class=" col-2 col-form  col-xs-12"></div>
    <input type="submit" class="btn btn-primary col-10 col-form  col-xs-12" value="SUBIR">
  </div>

</div>

<h3 class="text-center">FOTOS SUBIDAS</h3>
<div class="table-responsive">


<div class="col-md-12 col-xs-12">
  <div class="form-group row">
    <textarea  class="form-control col-6 col-form  col-xs-6" rows="10" ></textarea>
    <img src="http://via.placeholder.com/350x350"  class="img-thumbnail  col-5 col-xs-5" alt="Cinque Terre">
    <!-- <div class="col-1"> -->
      <button type="button" class="btn btn-danger col-1  col-xs-1">X</button>
    <!-- </div> -->
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
                    document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                   };
               })(f);

               reader.readAsDataURL(f);
             }
         }

         document.getElementById('files').addEventListener('change', archivo, false);
 </script>

@endsection
