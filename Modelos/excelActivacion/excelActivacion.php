<?php 
$planillas = "planillas.xls";
header("content-Type: application/vnd.ms-excel");
header("content-Disposition: attachment; filename=".$planillas);
header("Pragma: no-cache");
header("Expires: 0");
?>

<table id="tabla_Activacion" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>Fecha</th>
                            <th>Modelo</th>
                            <th>Nro Vehiculo</th>
                            <th>Color</th>                                
                            <th>Nro de Chapa</th>  
                            <th>Observación</th>    
                            <th>Usuario</th>        
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        session_start();
                        $objeto = new Conection();
						$conexion = $objeto->conexion();
                        if(isset($_SESSION['consulta'])){
                            if($_SESSION['consulta'] > 0){
                                $id_activacion = $_SESSION['consulta'];

                                $sql = "SELECT c.id_activacion,c.modelo,c.nro_vehiculo,c.color,c.nro_chapa,c.observacion,c.usuario
                                from activaciones c  where estatus = 1  AND id_activacion = '$id_activacion' ";
                            }else{
                                $sql = "SELECT c.id_activacion,c.fecha_add,c.modelo,c.nro_vehiculo,c.color,c.nro_chapa,c.observacion,c.usuario
                                from activaciones c  where estatus = 1";
                            }
                        }else{

                            $sql = "SELECT c.id_activacion,c.fecha_add,c.modelo,c.nro_vehiculo,c.color,c.nro_chapa,c.observacion,c.usuario
                            from activaciones c  where estatus = 1";
                        }
                        $resultado = mysqli_query($conexion,$sql);

                        while ($ver = mysqli_fetch_row($resultado)) {

                            $datos = $ver[0]."||".
                            $ver[1]."||".
                            $ver[2]."||".
                            $ver[3]."||".
                            $ver[4]."||".
                            $ver[5]."||".
                            $ver[6];
                          

                            ?>

                            <tr>
                                <td><?php echo $ver[1];?></td>
                                <td><?php echo $ver[2];?></td>
                                <td><?php echo $ver[3];?></td>
                                <td><?php echo $ver[4];?></td>
                                <td><?php echo $ver[5];?></td>
                                <td><?php echo $ver[6];?></td>
                                <td><?php echo $ver[7];?></td>
                                
                                
                            </tr>
                        <?php } ?>                       
                    </tbody>        
                </table>