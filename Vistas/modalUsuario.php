<div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <form method="POST" name="formUsuario" id="formUsuario" class="form-horizontal">
            <div class="form-group">
              <label class="control-label">Nombre :</label>
              <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingreser el nombre del Usuario" required>
            </div>
            <div class="form-group">
              <label class="control-label">Correo :</label>
              <input class="form-control" type="email" id="correo" name="correo" placeholder="Ingreser su correo " required>
            </div>
            <div class="form-group">
              <label class="control-label">Usuario :</label>
              <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Ingreser el Usuario" required>
            </div>
            <div class="form-group">
              <label class="control-label">Contraseña :</label>
              <input class="form-control" type="password" id="password" name="password" placeholder="Ingreser la Contraseña" required>
            </div>

            <div class="form-group">
              <label for="control-label">Puesto :</label>
              <select class="form-control" id="rol" name="rol" required>
                <option value="1">Administrador</option>
                <option value="2">Supervisor</option>
                <option value="3">Herreria</option>
                <option value="4">Pintura</option>
                <option value="5">Ruedas</option>
                <option value="6">Cinta</option>
                <option value="7">Probado</option>
                <option value="8">Cuatro Ruedas</option>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label">Sector :</label>
              <input class="form-control" type="text" id="puesto" name="puesto" placeholder="Ingreser la Contraseña" required>
            </div>

            <div class="tile-footer">
              <button id="btnNuevoUsu" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/usuario"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
            </div>
          </form>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <form method="POST" name="formUsuario" id="formUsuario" class="form-horizontal">
            <input type="hidden" name="id_usuario" id="id_usuario">
            <div class="form-group">
              <label class="control-label">Nombre :</label>
              <input class="form-control" type="text" id="nombreu" name="nombreu" placeholder="Ingreser el nombre del Usuario" required>
            </div>
            <div class="form-group">
              <label class="control-label">Correo :</label>
              <input class="form-control" type="email" id="correou" name="correou" placeholder="Ingreser su correo " required>
            </div>
            <div class="form-group">
              <label class="control-label">Usuario :</label>
              <input class="form-control" type="text" id="usuariou" name="usuariou" placeholder="Ingreser el Usuario" required>
            </div>
            <div class="form-group">
              <label class="control-label">Contraseña :</label>
              <input class="form-control" type="password" id="passwordu" name="passwordu" placeholder="Ingreser la Contraseña" required>
            </div>

            <div class="form-group">
              <label for="control-label">Puesto :</label>
              <select class="form-control" id="rolu" name="rolu" required selected="">
                <option value="1">Administrador</option>
                <option value="2">Supervisor</option>
                <option value="3">Herreria</option>
                <option value="4">Pintura</option>
                <option value="5">Ruedas</option>
                <option value="6">Cinta</option>
                <option value="7">Probado</option>
                <option value="8">Cuatro Ruedas</option>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label">Sector :</label>
              <input class="form-control" type="text" id="puestou" name="puestou" placeholder="Ingreser la Contraseña" required>
            </div>

            <div class="tile-footer">
              <button id="btnEditarUsu" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Actualizar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/usuario"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
            </div>
          </form>
    </div>
  </div>
</div>
</div>