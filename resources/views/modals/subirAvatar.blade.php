<div class="modal fade " id="subirAvatar" role="dialog">
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
            <h3 class="text-center">SUBIR FOTO DE PERFIL</h3>

              <form action="{{ route('subirAvatar')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('PATCH') }}

                  <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile04" name="imagenPerfil" required>
                    <label class="custom-file-label" for="inputGroupFile04">Seleccionar imagen</label>
                  </div>
                  <div class="input-group-append">
                    <button type="submit" name="button" class="btn btn-success">Subir</button>
                  </div>
                </div>

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
