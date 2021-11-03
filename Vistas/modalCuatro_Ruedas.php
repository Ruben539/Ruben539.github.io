<div class="modal fade" id="modalCuatroRuedas" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" name="formCuatroRuedas" id="formCuatroRuedas">    
        <br>  
        <div class="container-input">    
       
          <input type="text" name="modelo" id="modelo" class="input-48" placeholder="Ingrese su Modelo" required>
          <input type="text" name="nro_chasis" id="nro_chasis" class="input-48" placeholder="Ingrese su Numero de Chasis" required>

            
          <select name="insumo_1" id="insumo_1" class="input-48" required>
          <option value="Ninguno">Ninguno</option>
          <option value="Lija 80">Lija 80</option>
          <option value="Lija 100">Lija 100</option>
          <option value="Lija 120">Lija 120</option>
          <option value="Lija 220">Lija 220</option>
          <option value="Lija 240">Lija 240</option>
          <option value="Lija 320">Lija 320</option>
          <option value="Lija 360">Lija 360</option>
          <option value="Lija 400">Lija 400</option>
          <option value="Lija 600">Lija 600</option>
          <option value="Lija 1500">Lija 1500</option>
          <option value="Lija 2000">Lija 2000</option>
          </select>
          <input type="text" name="cantidad_1" id="cantidad_1" class="input-48" placeholder="Ingrese la Cantidad Utilizada">

          
          <select name="insumo_2" id="insumo_2" class="input-48" required>
          <option value="Ninguno">Ninguno</option>
          <option value="Adherente para Plasticos">Adherente para Plasticos</option>
          <option value="Barniz 8500 con Catalizador">Barniz 8500 con Catalizador</option>
          <option value="Diluyente 900">Diluyente 900</option>
          <option value="Catalizador">Catalizador</option>
          <option value="Thinner Univerzal">Thinner Univerzal</option>
          <option value="Impresión">Impresión</option>
          <option value="Removedor de Oxido">Removedor de Oxido</option>
          <option value="Kerosene 5LTS">Kerosene 5LTS</option>          
          
          </select>
          <input type="text" name="cantidad_2" id="cantidad_2" class="input-48" placeholder="Ingrese la Cantidad Utilizada">


          <select name="insumo_3" id="insumo_3" class="input-48" required>
          <option value="Ninguno">Ninguno</option>
          <option value="Aerosol Plateado">Aerosol Plateado</option>
          <option value="Aerosol Preto Foco">Aerosol Preto Foco</option>
          <option value="Aerosol Preto Brillante">Aerosol Preto Brillante</option>
          <option value="Aluminio Duco">Aluminio Duco</option>
          <option value="Negro Mate Duco">Negro Mate Duco</option>
          <option value="Pintura PU Blanco">Pintura PU Blanco</option>
          <option value="Pintura Base para Galvanizado">Pintura Base para Galvanizado</option>
          <option value="Batido de Piedra">Batido de Piedra</option>
          <option value="Pintura para Moto Carro">Pintura para Moto Carro</option>
          <option value="Pintura para Moto 2Ruedas">Pintura para Moto 2Ruedas</option>
          </select>
          <input type="text" name="cantidad_3" id="cantidad_3" class="input-48" placeholder="Ingrese la Cantidad Utilizada">


          <select name="insumo_4" id="insumo_4" class="input-48" required>
          <option value="Ninguno">Ninguno</option>
          <option value="Cera">Cera</option>
          <option value="Pasta de Pulir">Pasta de Pulir</option>
          <option value="Masilla Colorada">Masilla Colorada</option>
          <option value="Masilla Masipol">Masilla Masipol</option>
          <option value="Masilla Corrector">Masilla Corrector</option>
          <option value="Masilla Poliester">Masilla Poliester</option>
          <option value="Paño MicroFibra">Paño MicroFibra</option>
          <option value="Estopa 400GR">Estopa 400GR</option>
          </select>
          <input type="numb" name="cantidad_4" id="cantidad_4" class="input-48" placeholder="Ingrese la Cantidad Utilizada">

          
          <select name="insumo_5" id="insumo_5" class="input-48" required>
          <option value="Ninguno">Ninguno</option>
          <option value="Cinta Papel 12MM">Cinta Papel 12MM</option>
          <option value="Cinta Papel 18MM">Cinta Papel 18MM</option>
          <option value="Destergente 5Ltrs">Destergente 5Ltrs</option>
          <option value="Destergente 20Ltrs">Destergente 20Ltrs</option>

          </select>
          <input type="text" name="cantidad_5" id="cantidad_5" class="input-48" placeholder="Ingrese la Cantidad Utilizada">

          
          <textarea type="text" name="observacion" id="observacion" class="input-100" placeholder="Ingrese su Observación"></textarea>
          </div>
          <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['user']; ?>">
          <br>
          <div class="tile-footer text-center">
            <button id="btnNuevoCR" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/cuatroRuedas"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" name="formCuatroRuedas" id="formCuatroRuedas">    
        <br>  
        <div class="container-input">    
          <input type="hidden" id="id_camion">
          <input type="text" name="modelou" id="modelou" class="input-48" placeholder="Ingrese su Modelo" required>
          <input type="text" name="nro_chasisu" id="nro_chasisu" class="input-48" placeholder="Ingrese su Numero de Chasis" required>

            
          <select name="insumo_1u" id="insumo_1u" class="input-48" required>
          <option value="Ninguno">Ninguno</option>
          <option value="Lija 80">Lija 80</option>
          <option value="Lija 100">Lija 100</option>
          <option value="Lija 120">Lija 120</option>
          <option value="Lija 220">Lija 220</option>
          <option value="Lija 240">Lija 240</option>
          <option value="Lija 320">Lija 320</option>
          <option value="Lija 360">Lija 360</option>
          <option value="Lija 400">Lija 400</option>
          <option value="Lija 600">Lija 600</option>
          <option value="Lija 1500">Lija 1500</option>
          <option value="Lija 2000">Lija 2000</option>
          </select>
          <input type="text" name="cantidad_1u" id="cantidad_1u" class="input-48" placeholder="Ingrese la Cantidad Utilizada">

          
          <select name="insumo_2u" id="insumo_2u" class="input-48" required>
          <option value="Ninguno">Ninguno</option>
          <option value="Adherente para Plasticos">Adherente para Plasticos</option>
          <option value="Barniz 8500 con Catalizador">Barniz 8500 con Catalizador</option>
          <option value="Diluyente 900">Diluyente 900</option>
          <option value="Catalizador">Catalizador</option>
          <option value="Thinner Univerzal">Thinner Univerzal</option>
          <option value="Impresión">Impresión</option>
          <option value="Removedor de Oxido">Removedor de Oxido</option>
          <option value="Kerosene 5LTS">Kerosene 5LTS</option>          
          
          </select>
          <input type="text" name="cantidad_2u" id="cantidad_2u" class="input-48" placeholder="Ingrese la Cantidad Utilizada">


          <select name="insumo_3u" id="insumo_3u" class="input-48" required>
          <option value="Ninguno">Ninguno</option>
          <option value="Aerosol Plateado">Aerosol Plateado</option>
          <option value="Aerosol Preto Foco">Aerosol Preto Foco</option>
          <option value="Aerosol Preto Brillante">Aerosol Preto Brillante</option>
          <option value="Aluminio Duco">Aluminio Duco</option>
          <option value="Negro Mate Duco">Negro Mate Duco</option>
          <option value="Pintura PU Blanco">Pintura PU Blanco</option>
          <option value="Pintura Base para Galvanizado">Pintura Base para Galvanizado</option>
          <option value="Batido de Piedra">Batido de Piedra</option>
          <option value="Pintura para Moto Carro">Pintura para Moto Carro</option>
          <option value="Pintura para Moto 2Ruedas">Pintura para Moto 2Ruedas</option>
          </select>
          <input type="text" name="cantidad_3u" id="cantidad_3u" class="input-48" placeholder="Ingrese la Cantidad Utilizada">


          <select name="insumo_4u" id="insumo_4u" class="input-48" required>
          <option value="Ninguno">Ninguno</option>
          <option value="Cera">Cera</option>
          <option value="Pasta de Pulir">Pasta de Pulir</option>
          <option value="Masilla Colorada">Masilla Colorada</option>
          <option value="Masilla Masipol">Masilla Masipol</option>
          <option value="Masilla Corrector">Masilla Corrector</option>
          <option value="Masilla Poliester">Masilla Poliester</option>
          <option value="Paño MicroFibra">Paño MicroFibra</option>
          <option value="Estopa 400GR">Estopa 400GR</option>
          </select>
          <input type="numb" name="cantidad_4u" id="cantidad_4u" class="input-48" placeholder="Ingrese la Cantidad Utilizada">

          
          <select name="insumo_5u" id="insumo_5u" class="input-48" required>
          <option value="Ninguno">Ninguno</option>
          <option value="Cinta Papel 12MM">Cinta Papel 12MM</option>
          <option value="Cinta Papel 18MM">Cinta Papel 18MM</option>
          <option value="Destergente 5Ltrs">Destergente 5Ltrs</option>
          <option value="Destergente 20Ltrs">Destergente 20Ltrs</option>

          </select>
          <input type="text" name="cantidad_5u" id="cantidad_5u" class="input-48" placeholder="Ingrese la Cantidad Utilizada">

          
          <textarea type="text" name="observacionu" id="observacionu" class="input-100" placeholder="Ingrese su Observación"></textarea>
          </div>
          <br>
          <div class="tile-footer text-center">
            <button id="btnEditarCR" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Actualizar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/cuatroRuedas"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>