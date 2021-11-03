<div class="modal fade" id="modalChapas" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Registro Nuevo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" id="formChapas">
        <form action="">
        <div class="form-group">
          <label for="serie">Serie :</label>
          <input type="text" name="serie" id="serie" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="desde">Desde :</label>
          <input type="text" name="desde" id="desde" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="hasta">Hasta:</label>
          <input type="text" name="hasta" id="hasta" class="form-control input-sm">
        </div>
          <div class="form-group">
          <label for="observacion">Observacion :</label>
          <textarea name="observacion" id="observacion" class="form-control input-sm"></textarea>
        </div>
        <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['user']; ?>">
      <div class="tile-footer">
        <button type="button" class="btn btn-primary" id="btnNuevoCh"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/chapas"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
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

      <div class="modal-body" id="formChapas">
        <form action="">
        <input type="hidden" id="id_chapa">
        <div class="form-group">
          <label for="serie">Serie :</label>
          <input type="text" name="serieu" id="serieu" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="desde">Desde :</label>
          <input type="text" name="desdeu" id="desdeu" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="hasta">hasta :</label>
          <input type="text" name="hastau" id="hastau" class="form-control input-sm">
        </div>
           <div class="form-group">
          <label for="observacion">Observacion :</label>
          <textarea name="observacionu" id="observacionu" class="form-control input-sm"></textarea>
        </div>
      <div class="tile-footer">
        <button type="button" class="btn btn-primary" id="btnEditarCh"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/chapas"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

