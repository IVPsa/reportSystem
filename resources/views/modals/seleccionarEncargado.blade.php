<div class="modal fade " id="seleccionarEncargado" role="dialog">
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
            <h3 class="text-center">SELECCIONAR ENCARGADO</h3>
            <div class="table-responsive">
              <table class="table table-hover table-dark table-bordered table-striped" align="center" id="usuario_table">
                <tr>
                  <th>ID</th>
                  <th>NOMBRE</th>
                  <th>EMAIL</th>
                  <th>RUT</th>
                  <th>ACCION</th>
                </tr>
                @foreach($usuario as $usuario)
                <tr>
                  <td>    {{ $usuario->id }}</td>
                  <td>    {{ $usuario->USER_NOMBRE }}</td>
                  <td>    {{ $usuario->email }}</td>
                  <td>    {{ $usuario->USER_RUT }}</td>
                  <td>
                      <button class=" btn btn-primary"  data-dismiss="modal"  data-usu-id="{{ $usuario->id }}"><i class="fa fa-play"></i></button>
                  </td>
                </tr>
                @endforeach
              </table>

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
