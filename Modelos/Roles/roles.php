<?php
session_start();
if (empty($_SESSION['active'])) {
    header('location: home');
}
$objeto = new Conection();
$conexion = $objeto->conexion();

headerAdmin($data);
getModals('modalRoles', $data);
?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-server" aria-hidden="true"></i> Lista de Roles
       <button id="btnNew"  class="btn btn-primary" type="button"><i class="fa fa-plus-circle" aria-hidden="true"></i>
       Nuevo</button></h1>
       <p>Sistema web de Registros</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/roles"><i class="fa fa-refresh" style="font-size: 35px;"></i>
      </a></li>
  </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <br>
            <div class="table-responsive">        
                <table id="tabla_Roles" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>  
                            <th>Editar</th>
                            <th>Dar de Baja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if(isset($_SESSION['consulta'])){
                            if($_SESSION['consulta'] > 0){
                                $id_rol = $_SESSION['consulta'];

                                $sql = "SELECT r.id_rol,r.descripcion
                                from roles r  where estatus = 1  AND id_rol = '$id_rol' ";
                            }else{
                                $sql = "SELECT r.id_rol,r.descripcion
                                from roles r  where estatus = 1";
                            }
                        }else{

                            $sql = "SELECT r.id_rol,r.descripcion
                            from roles r  where estatus = 1";
                        }
                        $resultado = mysqli_query($conexion,$sql);

                        while ($ver = mysqli_fetch_row($resultado)) {

                            $datos = $ver[0]."||".
                            $ver[1];
                           
    
                            ?>

                            <tr>
                                <td><?php echo $ver[0];?></td>
                                <td class="text-center"><?php echo $ver[1];?></td>
                                
                                <td class="text-center">
                                    <button class = "btn btn-outline-info " data-toggle="modal" data-target="#modalEditar" onclick="editarDatosR('<?php echo $datos ?>')"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                </td>
                                <td class="text-center">
                                    <button class = "btn btn-outline-danger" onclick="confirmarLiberacionR('<?php echo $ver[0] ?>')"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
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
