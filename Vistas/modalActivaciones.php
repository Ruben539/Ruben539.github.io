<div class="modal fade" id="modalActivaciones" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Nuevo Registro de Cinta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" id="formActivacion">
        <form action="">
        <div class="form-group">
          <label for="modelo">Modelo :</label>
          <input type="text" name="modelo" id="modelo" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="nro_vehiculo">Nro Vehiculo :</label>
          <input type="text" name="nro_vehiculo" id="nro_vehiculo" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="color">Color :</label>
          <input type="text" name="color" id="color" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="nro_chapa">Nro de Chapa:</label>
         <input type="text" name="nro_chapa" id="nro_chapa" class="form-control input-sm">
        </div>
          <div class="form-group">
          <label for="observacion">Observacion :</label>
          <textarea name="observacion" id="observacion" class="form-control input-sm"></textarea>
        </div>
        <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['user']; ?>">
      <div class="tile-footer">
        <button type="button" class="btn btn-primary" id="btnNuevoAC"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/activaciones"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
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

      <div class="modal-body" id="formActivacion">
        <form action="">
        <input type="hidden" id="id_activacion">
        <div class="form-group">
          <label for="modelo">Modelo :</label>
          <input type="text" name="modelou" id="modelou" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="nro_vehiculo">Nro Vehiculo :</label>
          <input type="text" name="nro_vehiculou" id="nro_vehiculou" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="color">Color :</label>
          <input type="text" name="coloru" id="coloru" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="nro_chapa">Nro de Chapa:</label>
          <input type="text" name="nro_chapau" id="nro_chapau" class="form-control input-sm">
        </div>
           <div class="form-group">
          <label for="observacion">Falla Detectada</label>
          <textarea name="observacionu" id="observacionu" class="form-control input-sm"></textarea>
        </div>
      <div class="tile-footer">
        <button type="button" class="btn btn-primary" id="btnEditarAC"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/activaciones"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

