
<div class="modal fade" id="modalReclamo" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Reclamos de Origen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data" id="uploadForm">
         <div class="input-48">
          <label for="modelo">Modelo :</label>
          <input type="text" name="modelo" id="modelo" class="form-control input-sm">
        </div>
         <div class="input-48">
          <label for="nro_partida">Nro de Partida :</label>
          <input type="text" name="nro_partida" id="nro_partida" class="form-control input-sm">
        </div>
        <div class="input-48">
          <label for="descripcion">Descripción :</label>
          <input type="text" name="descripcion" id="descripcion" class="form-control input-sm">
        </div>
         <div class="input-48">
          <label for="proveedor">Proveedor:</label>
          <input type="text" name="proveedor" id="proveedor" class="form-control input-sm">
        </div>
         <div class="input-48">
          <label for="existencia">Cantidad :</label>
          <input type="number" name="existencia" id="existencia" class="form-control input-sm">
        </div>
        <div class="photo">
          <label for="foto">Foto</label>
          <div class="prevPhoto">
            <span class="delPhoto notBlock">X</span>
            <label for="foto"></label>
          </div>
          <div class="upimg">
            <input type="file" name="foto" id="foto" accept="image/*">
          </div>
          <div id="form_alert"></div>
        </div>
        <input type="hidden" name="usuario" id="usuario" class="form-control input-sm" value="<?php echo $_SESSION['user']; ?>">
        <br>
      <div class="tile-footer">
       <button type="submit" class="btn btn-primary" id="btnNuevoRe"><i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/reclamos"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
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

      <div class="modal-body" id="formReclamos">
        <form action=""  method="POST" enctype="multipart/form-data" id="uploadForm">
        <input type="hidden" id="codproducto">
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
        <button type="button" class="btn btn-primary" id="btnEditarRe"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/reclamos"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

