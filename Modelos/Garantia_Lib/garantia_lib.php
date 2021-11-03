<?php
session_start();
if (empty($_SESSION['active'])) {
    header('location: home');
}
$objeto = new Conection();
$conexion = $objeto->conexion();

headerAdmin($data);
getModals('modalGarantia', $data);
?>

<main class="app-content">
  <div class="app-title">
    <div>
        
      <h1><i class="fa fa-server" aria-hidden="true"></i> Pedidos Aprobados de Garantia</h1>
          
       <p>Sistema web de Registros</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/excelGarantia"><i class="fa fa-download" style="font-size: 20px;"></i>
      </a></li>
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/garantia">Pedidos de Garantia</a></li>
  </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <br>
            <div class="table-responsive">        
                <table id="tabla_Garantia" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>Fecha</th>
                            <th>Solicitante</th>
                            <th>Modelo</th>
                            <th>Nro de Patida</th>                                
                            <th>Pieza</th>  
                            <th>Cantidad</th>    
                            <th>Destino</th> 
                            <th>Observación</th>                                
                            <th>Autorizado</th>                                
                            <th>Fecha</th>                                
                                                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if(isset($_SESSION['consulta'])){
                            if($_SESSION['consulta'] > 0){
                            $id_reclamo = $_SESSION['consulta'];

                                $sql = "SELECT r.id_reclamo,r.fecha_add,r.solicitante,r.modelo,r.nro_partida,r.pieza,r.cantidad,r.destino,r.observacion,r.usuario,r.fecha_fin FROM reclamos r WHERE estatus = 0 AND id_reclamo = '$id_reclamo'";
                            }else{
                                $sql = "SELECT r.id_reclamo,r.fecha_add,r.solicitante,r.modelo,r.nro_partida,r.pieza,r.cantidad,r.destino,r.observacion,r.usuario,r.fecha_fin FROM reclamos r WHERE estatus = 0 ";
                            }
                        }else{

                            $sql = "SELECT r.id_reclamo,r.fecha_add,r.solicitante,r.modelo,r.nro_partida,r.pieza,r.cantidad,r.destino,r.observacion,r.usuario,r.fecha_fin FROM reclamos r WHERE estatus = 0 ";
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
                            $ver[8];
    
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
<script src="<?php echo media(); ?>/js/Garantia/garantiaDatos.js"></script> 

