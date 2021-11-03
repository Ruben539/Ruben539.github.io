<?php
session_start();
if (empty($_SESSION['active'])) {
    header('location: home');
}
$objeto = new Conection();
$conexion = $objeto->conexion();

headerAdmin($data);
getModals('modalRuedas', $data);
?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-server" aria-hidden="true"></i> Motos Liberadas - Cinta de Ensamble</h1>
       <p>Sistema web de Registros</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/excelCinta_Lib"><i class="fas fa-download" style="font-size: 20px;"></i></a></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/cinta_Lib">Cinta de Ensamble - División Industrial</a></li>
        </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <br>
            <div class="table-responsive">        
                <table id="tabla_Cinta" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>Fecha</th>
                            <th>Modelo</th>
                            <th>Nro Vehiculo</th>
                            <th>Color</th>                                
                            <th>Pieza Averiada</th>  
                            <th>Falla Detectada</th>    
                            <th>Fecha Fin</th>
                            <th>Usuario</th>    
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if(isset($_SESSION['consulta'])){
                            if($_SESSION['consulta'] > 0){
                                $id_cinta = $_SESSION['consulta'];

                                $sql = "SELECT c.id_cinta,c.modelo,c.nro_vehiculo,c.color,c.pieza,c.falla_detectada,c.usuario,c.fecha_fin
                                from cinta c  where estatus = 0  AND id_cinta = '$id_cinta' ";
                            }else{
                                $sql = "SELECT c.id_cinta,c.fecha_add,c.modelo,c.nro_vehiculo,c.color,c.pieza,cfalla_detectada,c.usuario,c.fecha_fin
                                from cinta c  where estatus = 0";
                            }
                        }else{

                            $sql = "SELECT c.id_cinta,c.fecha_add,c.modelo,c.nro_vehiculo,c.color,c.pieza,c.falla_detectada,c.usuario,c.fecha_fin
                            from cinta c  where estatus = 0";
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
                                <td class="text-center"><?php echo $ver[6];?></td>
                                <td><?php echo $ver[8];?></td>
                                <td><?php echo $ver[7];?></td>
                                
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
