<div class="modal fade" id="modalProbador" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Registro Nuevo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" id="formProbador">
        <form action="">
        <div class="form-group">
          <label for="serie">Nombre :</label>
          <input type="text" name="nombre" id="nombre" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="desde">Cantidad :</label>
          <input type="text" name="cantidad" id="cantidad" class="form-control input-sm">
        </div>
         
        <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['user']; ?>">
      <div class="tile-footer">
        <button type="button" class="btn btn-primary" id="btnNuevoProbador"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/probadores"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

<!--Modal para editar Registros-->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Editar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" id="formProbador">
        <form action="">
        <input type="hidden" id="id_probador">
        <div class="form-group">
          <label for="nombre">Nombre :</label>
          <input type="text" name="nombreu" id="nombreu" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="cantidad">Cantidad :</label>
          <input type="text" name="cantidadu" id="cantidadu" class="form-control input-sm">
        </div>

      <div class="tile-footer">
        <button type="button" class="btn btn-primary" id="btnEditarProbador"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/probadores"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

