<div class="modal fade" id="modalRol" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="tile">
        <div class="tile-body">
          <form method="POST" name="formRol" id="formRol">
            <div class="form-group">
              <label class="control-label">Nombre :</label>
              <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingreser el nombre del Rol" required>
            </div>
            <div class="form-group">
              <label class="control-label">Descripcion :</label>
              <textarea class="form-control" rows="2" id="descripcion" name="descripcion" placeholder="Ingrese la descripción del nuevo Rol" required></textarea>
            </div>

            <div class="form-group">
              <label for="control-label">Estado :</label>
              <select class="form-control" id="estado" name="estado" required>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
              </select>
            </div>

            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>