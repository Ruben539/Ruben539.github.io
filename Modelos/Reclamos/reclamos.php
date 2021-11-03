<?php
session_start();
if (empty($_SESSION['active'])) {
    header('location: home');
}
$objeto = new Conection();
$conexion = $objeto->conexion();

headerAdmin($data);
getModals('modalReclamo', $data);
?>

<main class="app-content">
  <div class="app-title">
    <div>

      <h1><i class="fa fa-server" aria-hidden="true"></i> Reclamos de Origen
       <a href="<?= base_url(); ?>/productos" class="btn btn-primary" type="button"><i class="fa fa-plus-circle" aria-hidden="true"></i>
       Nuevo</a></h1>

       <p>Sistema web de Registros</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/excelReclamos"><i class="fa fa-download" style="font-size: 20px;"></i>
    </a></li>
    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/reclamos"><i class="fa fa-refresh" style="font-size: 20px;"></i>
    </a></li>
</ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <br>
            <div class="table-responsive">        
                <table id="tablaReclamos" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead>
            <tr>
                <th>Fecha</th>
                <th>Modelo</th>
                <th>Nro Partida</th>
                <th>Descripcion</th>
                <th>Proveedor</th>
                <th>Cantidad</th>
                <th>Foto</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <?php 



            $query = mysqli_query($conexion,"SELECT p.codproducto,p.fecha_add, p.modelo,p.nro_partida, p.descripcion, p.existencia,p.proveedor,p.foto,p.usuario FROM producto p  WHERE p.estatus = 1 ORDER BY p.codproducto DESC ");


            $resultado = mysqli_num_rows($query);

            if ($resultado > 0) {

                while ($data = mysqli_fetch_array($query)) {
                    if ($data['foto'] != 'img_producto.jpg') {
                        $foto = 'Asses/images/uploads/'.$data['foto'];
                    }else{
                        $foto = '../Asses/images/'.$data['foto'];
                    }

                    ?>
            <tbody>
                    <tr class="row<?php echo $data['codproducto']; ?>">
                        <td><?php echo $data['fecha_add']; ?></td>
                        <td><?php echo $data['modelo']; ?></td>
                        <td><?php echo $data['nro_partida']; ?></td>
                        <td><?php echo $data['descripcion']; ?></td>
                        <td><?php echo $data['proveedor']; ?></td>
                        <td class="cellExistencia"><?php echo $data['existencia']; ?></td>
                        <td class="img_producto"><img src="<?php echo $foto; ?>" alt= "<?php echo $data['descripcion']; ?>"></td>
                        
                        <td><?php echo $data['usuario']; ?></td>
                        <td>
                            <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] ==2){ ?>
                                
                            <a class="link_add add_product"  product="<?php echo $data['codproducto']; ?>" href="#"><i class="fas fa-plus">Agregar</i></a>
                            
                

                            <?php  } ?>

                        </td>
                    </tr>
            </tbody>
                    <?php 

                }

            }
            ?>

        </table>           
            </div>
            <br>
        </div>
    </div>  
</div>  

</main>


<?php footerAdmin($data); ?>
<script src="<?php echo media(); ?>/js/Reclamos/reclamosDatos.js"></script> 

