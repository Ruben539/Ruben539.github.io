<?php 
$planillas = "planillas.xls";
header("content-Type: application/vnd.ms-excel");
header("content-Disposition: attachment; filename=".$planillas);
header("Pragma: no-cache");
header("Expires: 0");
?>

<div class="table-responsive">        
    <table id="tabla_Probado" class="table table-striped table-bordered table-condensed" style="width:100%">
        <thead class="text-center">
            <tr>
                <th>Fecha</th>
                <th>Modelo</th>
                <th>Nro Vehiculo</th>
                <th>Color</th>                                
                <th>Pieza Averiada</th>  
                <th>Falla Detectada</th>    
                <th>Usuario</th>    
                <th>Sector</th>    
                <th>Estado</th>    
                <th>Fecha Fin</th>    

            </tr>
        </thead>
        <tbody>
             <?php
             session_start();
            $objeto = new Conection();
            $conexion = $objeto->conexion();
             
            if(isset($_SESSION['consulta'])){
                if($_SESSION['consulta'] > 0){
                    $id_herreria = $_SESSION['consulta'];

                    $sql = "SELECT id_herreria,modelo,nro_vehiculo,color,pieza,falla_detectada,sector,estado,usuario,fecha_fin
                    from herreria where estatus = 0  AND id_herreria = '$id_herreria' ";
                }else{
                    $sql = "SELECT id_herreria,fecha_add,modelo,nro_vehiculo,color,pieza,falla_detectada,usuario,sector,estado,fecha_fin
                    from herreria where estatus = 0";
                }
            }else{

                $sql = "SELECT id_herreria,fecha_add,modelo,nro_vehiculo,color,pieza,falla_detectada,usuario,sector,estado,fecha_fin
                from herreria where estatus = 0";
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
                $ver[10];
                ?>

                <tr>
                    <td><?php echo $ver[1];?></td>
                    <td><?php echo $ver[2];?></td>
                    <td><?php echo $ver[3];?></td>
                    <td><?php echo $ver[4];?></td>
                    <td><?php echo $ver[5];?></td>
                    <td><?php echo $ver[6];?></td>
                    <td><?php echo $ver[7];?></td>
                    <td><?php echo $ver[8];?></td>
                    <td><?php echo $ver[9];?></td>
                    <td><?php echo $ver[10];?></td>
                    
                </tr>
            <?php } ?>                          
        </tbody>        
    </table>