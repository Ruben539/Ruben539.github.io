<?php
session_start();
if (empty($_SESSION['active'])) {
    header('location: home');
}
$objeto = new Conection();
$conexion = $objeto->conexion();

headerAdmin($data);
getModals('modalCuatro_Ruedas', $data);
?>

<main class="app-content">
  <div class="app-title">
    <div>
        <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 8) {?>
      <h1><i class="fa fa-server" aria-hidden="true"></i> Informe - Cuatro Ruedas
         <button id="btnNew"  class="btn btn-primary" type="button"><i class="fa fa-plus-circle" aria-hidden="true"></i>
         Nuevo</button></h1>
          <?php } ?>
          <?php if ($_SESSION['rol'] == 2) {?>
      <h1><i class="fa fa-server" aria-hidden="true"></i> Informe - Cuatro Ruedas
         <button  class="btn btn-primary" type="button" onclick="alert('No tienes el Permiso para generar Registros en esta Tabla');"><i class="fa fa-plus-circle" aria-hidden="true"></i>
         Nuevo</button></h1>
          <?php } ?>
       <p>Sistema web de Registros</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/excelCuatroRuedas"><i class="fa fa-download" style="font-size: 20px;"></i>
      </a></li>
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/cuatroRuedas"><i class="fa fa-refresh" style="font-size: 20px;"></i>
      </a></li>
  </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <br>
            <div class="table-responsive">        
                <table id="tabla_CRuedas" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>Fecha</th>
                            <th>Modelo</th>
                            <th>Nro Chasis</th>
                            <th>Insumo 1</th>                                
                            <th>Cantidad</th>  
                            <th>Insumo 2</th>    
                            <th>Cantidad</th> 
                            <th>Insumo 3</th>                                
                            <th>Cantidad</th>  
                            <th>Insumo 4</th>    
                            <th>Cantidad</th>   
                            <th>Insumo 5</th>    
                            <th>Cantidad</th>   
                            <th>Observación</th>   
                            <th>Usuario</th>   
                            <th>Editar</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if(isset($_SESSION['consulta'])){
                            if($_SESSION['consulta'] > 0){
                                $id_camion = $_SESSION['consulta'];

                                $sql = "SELECT r.id_camion,r.fecha_add,r.modelo,r.nro_chasis,r.insumo_1,r.cantidad_1,r.insumo_2,r.cantidad_2,r.insumo_3,r.cantidad_3,r.insumo_4,r.cantidad_4,r.insumo_5,r.cantidad_5,r.observacion,r.usuario
                                from pintura_camiones r  where estatus = 1  AND id_camion = '$id_camion' ";
                            }else{
                                $sql = "SELECT r.id_camion,r.fecha_add,r.modelo,r.nro_chasis,r.insumo_1,r.cantidad_1,r.insumo_2,r.cantidad_2,r.insumo_3,r.cantidad_3,r.insumo_4,r.cantidad_4,r.insumo_5,r.cantidad_5,r.observacion,r.usuario
                                from pintura_camiones r  where estatus = 1";
                            }
                        }else{

                            $sql = "SELECT r.id_camion,r.fecha_add,r.modelo,r.nro_chasis,r.insumo_1,r.cantidad_1,r.insumo_2,r.cantidad_2,r.insumo_3,r.cantidad_3,r.insumo_4,r.cantidad_4,r.insumo_5,r.cantidad_5,r.observacion,r.usuario
                            from pintura_camiones r  where estatus = 1";
                        }
                        $resultado = mysqli_query($conexion,$sql);

                        while ($ver = mysqli_fetch_row($resultado)) {

                            $datos = $ver[0]."||".
                            $ver[1]."||".
                            $ver[2]."||".
                            $ver[3]."||".
                            $ver[4]."||".
                            $ver[5]."||".
                            $ver[6]."||".
                            $ver[7]."||".
                            $ver[8]."||".
                            $ver[9]."||".
                            $ver[10]."||".
                            $ver[11]."||".
                            $ver[12]."||".
                            $ver[13]."||".
                            $ver[14]."||".
                            $ver[15];
    
                            ?>

                            <tr>
                                <td><?php echo $ver[1];?></td>
                                <td><?php echo $ver[2];?></td>
                                <td><?php echo $ver[3];?></td>
                                <td><?php echo $ver[4];?></td>
                                <td><?php echo $ver[5];?></td>
                                <td class="text-center"><?php echo $ver[6];?></td>
                                <td><?php echo $ver[7];?></td>
                                <td><?php echo $ver[8];?></td>
                                <td><?php echo $ver[9];?></td>
                                <td><?php echo $ver[10];?></td>
                                <td><?php echo $ver[11];?></td>
                                <td><?php echo $ver[12];?></td>
                                <td><?php echo $ver[13];?></td>
                                <td><?php echo $ver[14];?></td>
                                <td><?php echo $ver[15];?></td>
                                <td>
                                    <button class = "btn btn-outline-info" data-toggle="modal" data-target="#modalEditar" onclick="editarDatosCR('<?php echo $datos ?>')"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                </td>
                                
                            </tr>
                        <?php } ?>                       
                    </tbody>        
                </table>                    
            </div>
            <br>
        </div>
    </div>  
</div>  

</main>


<?php footerAdmin($data); ?>
<script src="<?php echo media(); ?>/js/Cuatro_Ruedas/cuatroRuedasDatos.js"></script>
