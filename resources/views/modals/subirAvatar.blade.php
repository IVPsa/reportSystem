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
            <div class="table-responsive">
              <form action="{{ route('subirAvatar')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('PATCH') }}

                  <table>
                      <tr>
                        <td>
                          <input type="file" required   class="form-control" name="imagenPerfil" >
                        </td>
                        <td>
                          <button type="submit" name="button" class="btn btn-success">Subir</button>
                        </td>
                      </tr>
                  </table>
              </form>

            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
