<div class="modal fade" id="modalGarantia" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Pedido de Garantia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" id="formGarantia">
        <form action="">
        <div class="input-48">
          <input type="hidden" name="solicitante" id="solicitante" class="form-control input-sm" value="<?php echo $_SESSION['user']; ?>">
        </div>
         <div class="input-48">
          <label for="modelo">Modelo :</label>
          <input type="text" name="modelo" id="modelo" class="form-control input-sm">
        </div>
         <div class="input-48">
          <label for="nro_partida">Nro de Partida :</label>
          <input type="text" name="nro_partida" id="nro_partida" class="form-control input-sm">
        </div>
         <div class="input-48">
          <label for="pieza">Pieza Solicitada :</label>
          <input type="text" name="pieza" id="pieza" class="form-control input-sm">
        </div>

         <div class="input-48">
          <label for="cantidad">Cantidad :</label>
          <input type="text" name="cantidad" id="cantidad" class="form-control input-sm">
        </div>
        <div class="input-48">
          <label for="destino">Destino :</label>
          <input type="text" name="destino" id="destino" class="form-control input-sm">
        </div>
          <div class="input-48">
          <label for="observacion">Observación sobre el Pedido :</label>
          <textarea name="observacion" id="observacion" class="form-control input-sm"></textarea>
        </div>
        <br>
      <div class="tile-footer">
        <button type="button" class="btn btn-primary" id="btnNuevoGa"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/garantia"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
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

      <div class="modal-body" id="formGarantia">
        <form action="">
        <input type="hidden" id="id_reclamo">
        <div class="form-group">
          <label for="modelo">Modelo :</label>
          <input type="text" name="modelou" id="modelou" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="nro_partida">Nro de Partida :</label>
          <input type="text" name="nro_partidau" id="nro_partidau" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="pieza">Pieza Averiada:</label>
          <input type="text" name="piezau" id="piezau" class="form-control input-sm">
        </div>
         <div class="form-group">
          <label for="cantidad">Cantidad :</label>
          <input type="text" name="cantidadu" id="cantidadu" class="form-control input-sm">
        </div>
        <div class="form-group">
          <label for="destino">Destino :</label>
          <input type="text" name="destinou" id="destinou" class="form-control input-sm">
        </div>
        <div class="form-group">
          <label for="observacion">Observación sobre el Pedido :</label>
          <textarea name="observacionu" id="observacionu" class="form-control input-sm"></textarea>
        </div>
        <input type="hidden" name="usuariou" id="usuariou" value="<?php echo $_SESSION['user']; ?>">
      <div class="tile-footer">
        <button type="button" class="btn btn-primary" id="btnEditarGa"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/garantia"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

