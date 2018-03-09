<div class="modal fade " id="nuevaDescripcionDeFoto" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body bg-dark">
        <div class="row">


          <div class="col-xs-12 col-md-12">
            <form action="{{route('actualizarDescripcionDeArchivo')}}" method="post">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <input hidden name="codigoReporte" value="{{$fotos->FT_RPFG_COD}}">
                <input hidden name="codigoFoto" value="{{$fotos->FT_COD}}">
                <textarea  class="form-control" rows="10" name="fotoDescripcion" >{{$fotos->FT_DESC}}</textarea>
                <br />
                <center>
                  <button  type="submit" class="btn btn-lg btn-primary">ACTUALIZAR</button>
                </center>
             </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
