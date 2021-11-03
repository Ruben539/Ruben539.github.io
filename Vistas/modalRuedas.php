<div class="modal fade" id="modalRuedas" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Nuevo Registro de Pintura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" id="formRuedas">
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
          <label for="pieza">Pieza Averiada:</label>
          <select class="form-control" id="pieza" name="pieza" required>
                <option value="Horquilla">Horquilla</option>
                <option value="Caballete">Caballete</option>
                <option value="Sosten Lateral">Sosten Lateral</option>
                <option value="Posapie Trasero LH">Posapie Trasero LH</option>
                <option value="Posapie Trasero RH">Posapie Trasero RH</option>
                <option value="Soporte de Asiento">Soporte de Asiento</option>
                <option value="Soporte de Bulbo de Freno">Soporte de Bulbo de Freno</option>
                <option value="Soporte de Tanque">Soporte de Tanque</option>
                <option value="Soporte de Regulador de Voltaje">Soporte de Regulador de Voltaje</option>
                <option value="Soporte de CDI">Soporte de CDI</option>
                <option value="Soporte de Resorte">Soporte de Resorte</option>
                <option value="Soporte de Amortiguador Trasero">Soporte de Amortiguador Trasero</option>
                <option value="Tope de Dirección">Tope de Dirección</option>
                <option value="Tanque">Tanque</option>
                <option value="Tablero">Tablero</option>
                <option value="Tapa Costado LH">Tapa Costado LH</option>
                <option value="Tapa Costado RH">Tapa Costado RH</option>
                <option value="Cubre Tanque LH">Cubre Tanque LH</option>
                <option value="Cubre Tanque RH">Cubre Tanque RH</option>
                <option value="Amortiguadores Traseros">Amortiguadores Traseros</option>
                <option value="Amortiguadores Delanteros">Amortiguadores Delanteros</option>
                <option value="Faro Trasero">Faro Trasero</option>
                <option value="Faro Delantero">Faro Delantero</option>
                <option value="Cubre Chasis">Cubre Chasis</option>
                <option value="Tapa Frente">Tapa Frente</option>
                <option value="Bateria">Bateria</option>
                <option value="LLave de Luz">LLave de Luz</option>
                <option value="LLave de Arranque">LLave de Arranque</option>
                <option value="Conexiones Electricas">Conexiones Electricas</option>
                <option value="Guarda Cadena">Guarda Cadena</option>
                <option value="Porta Bulto">Porta Bulto</option>
                <option value=">Motor">Motor</option>
                <option value="Manubrio">Manubrio</option>
                <option value="Foco Delantero2">Foco Delantero</option>
                <option value="Regulador de Voltaje">Regulador de Voltaje</option>
                <option value="Señalero Delantero">Señalero Delantero</option>
                <option value="Señalero Trasero">Señalero Trasero</option>
                <option value="Bulbo de Freno Delantero">Bulbo de Freno Delantero</option>
                <option value="Bulbo de Freno Trasero">Bulbo de Freno Trasero</option>
                <option value="Bocina">Bocina</option>
                <option value="Asiento">Asiento</option>
                <option value="Cubre Mano">Cubre Mano</option>
                <option value="Problemas Varios">Problemas Varios</option>
                <option value="Piezas Faltantes">Piezas Faltantes</option>
              </select>
        </div>
          <div class="form-group">
          <label for="falla_detectada">Falla Detectada</label>
          <textarea name="falla_detectada" id="falla_detectada" class="form-control input-sm"></textarea>
        </div>
        <input type="hidden" name="sector" id="sector" value="<?php echo "RUEDAS" ?>">
        <input type="hidden" name="estado" id="estado" value="<?php echo "PENDIENTE" ?>">
        <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['user']; ?>">
      <div class="tile-footer">
        <button type="button" class="btn btn-primary" id="btnNuevoR"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/ruedas"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
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

      <div class="modal-body">
        <form action="">
        <input type="hidden" id="id_ruedas">
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
          <label for="pieza">Pieza Averiada:</label>
          <input type="text" name="piezau" id="piezau" class="form-control input-sm">
        </div>
           <div class="form-group">
          <label for="falla_detectada">Falla Detectada</label>
          <textarea name="falla_detectadau" id="falla_detectadau" class="form-control input-sm"></textarea>
        </div>
        <input type="hidden" name="usuariou" id="usuariou" value="<?php echo $_SESSION['user']; ?>">
      <div class="tile-footer">
        <button type="button" class="btn btn-primary" id="btnEditarR"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/ruedas"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

