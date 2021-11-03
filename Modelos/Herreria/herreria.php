<?php
session_start();
if (empty($_SESSION['active'])) {
    header('location: home');
}
$objeto = new Conection();
$conexion = $objeto->conexion();

 headerAdmin($data);
      getModals('modalHerreria', $data);
?>

<main class="app-content">
  <div class="app-title">
    <div>
          <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 3) {?>
      <h1><i class="fa fa-server" aria-hidden="true"></i> Motos Pendiente - Herreria
         <button id="btnNew"  class="btn btn-primary" type="button"><i class="fa fa-plus-circle" aria-hidden="true"></i>
         Nuevo</button></h1>
          <?php } ?>
          <?php if ($_SESSION['rol'] == 2) {?>
      <h1><i class="fa fa-server" aria-hidden="true"></i> Motos Pendiente - Herreria
         <button  class="btn btn-primary" type="button" onclick="alert('No tienes el Permiso para generar Registros en esta Tabla');"><i class="fa fa-plus-circle" aria-hidden="true"></i>
         Nuevo</button></h1>
          <?php } ?>
         <p>Sistema web de Registros</p>
     </div>
     <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/excelHerreria"><i class="fa fa-download" style="font-size: 20px;"></i>
      </a></li>
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/herreria"><i class="fa fa-refresh" style="font-size: 20px;"></i>
      </a></li>
  </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <br>
            <div class="table-responsive">        
                <table id="tabla_Herreria" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>Fecha</th>
                            <th>Modelo</th>
                            <th>Nro Vehiculo</th>
                            <th>Color</th>                                
                            <th>Pieza Averiada</th>  
                            <th>Falla Detectada</th>    
                            <th>Usuario</th>    
                            <th>Editar</th>
                            <th>Liberar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

            if(isset($_SESSION['consulta'])){
                if($_SESSION['consulta'] > 0){
                    $id_herreria = $_SESSION['consulta'];

                    $sql = "SELECT id_herreria,modelo,nro_vehiculo,color,pieza,falla_detectada,usuario
                    from herreria where estatus = 1  AND id_herreria = '$id_herreria' ";
                }else{
                    $sql = "SELECT id_herreria,fecha_add,modelo,nro_vehiculo,color,pieza,falla_detectada,usuario,fecha_fin
                    from herreria where estatus = 1";
                }
            }else{

                $sql = "SELECT id_herreria,fecha_add,modelo,nro_vehiculo,color,pieza,falla_detectada,usuario,fecha_fin
                from herreria where estatus = 1";
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
                $ver[7];
                ?>

                <tr>
                    <td><?php echo $ver[1];?></td>
                    <td><?php echo $ver[2];?></td>
                    <td><?php echo $ver[3];?></td>
                    <td><?php echo $ver[4];?></td>
                    <td><?php echo $ver[5];?></td>
                    <td><?php echo $ver[6];?></td>
                    <td><?php echo $ver[7];?></td>
                    <td>
                        <button class = "btn btn-outline-info" data-toggle="modal" data-target="#modalEditar" onclick="editarDatos('<?php echo $datos ?>')"><i class="fa fa-edit" aria-hidden="true"></i></button>
                    </td>
                    <td>
                        <button class = "btn btn-outline-success" onclick="confHerreriaLib('<?php echo $ver[0] ?>')"><i class="fa fa-check" aria-hidden="true"></i></button>
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
<script src="<?php echo media(); ?>/js/Herreria/herreria_Datos.js"></script>