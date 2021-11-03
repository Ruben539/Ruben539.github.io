<?php 
session_start();
if (empty($_SESSION['active'])) {
    header('location: home');
}
$objeto = new Conection();
$conexion = $objeto->conexion();

if (!empty($_POST)) {

    //print_r($_POST);
    //print_r($_FILES);
    //exit;

    if (empty($_POST['proveedor']) ||empty($_POST['descripcion'])  || ($_POST['existencia'] <= 0)) {



    }else{

        $modelo      = $_POST['modelo'];
        $nro_partida = $_POST['nro_partida'];
        $descripcion = $_POST['descripcion'];
        $proveedor   = $_POST['proveedor'];
        $existencia  = $_POST['existencia'];
        $usuario     = $_POST['usuario'];

        $foto = $_FILES['foto'] ['name'];
        $nombrefoto = $_FILES['foto'] ['name'];
        $tipo = $_FILES['foto'] ['type'] ;
        $url_temp = $_FILES['foto'] ['tmp_name'];
        

        $imgProducto = 'img_producto.jpg';

        if ($nombrefoto != '') {

            $destino ='Asses/images/uploads/';

            $img_nombre   = 'image_'.md5(date('d-m Y H-m-s'));#Estamos encriptando la fecha y hora para el nombre de la foto 
            $imgProducto  = $img_nombre.'.jpg';
            $scr          =  $destino.$imgProducto;     
            
        }

        $query_insert = mysqli_query($conexion,"INSERT INTO producto(modelo,nro_partida,descripcion,proveedor,existencia,usuario,foto)
            VALUES('$modelo','$nro_partida','$descripcion','$proveedor','$existencia','$usuario','$imgProducto')");

        if ($query_insert ) {
            if ($nombrefoto != '') {
                move_uploaded_file($url_temp, $scr);
            }
            header('location: reclamos');

        }else{

        }
    }

}

headerAdmin($data);
?>
<main class="app-content">
     <div class="app-title">

      <h1><i class="fa fa-server" aria-hidden="true"></i>  Registro de Reclamos</h1>
    
</div>
   <div  tabindex="-1" role="dialog"  aria-hidden="true">
   <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">

        <div class="modal-productos" style="width: 450px;">
            <form action="" method="POST" enctype="multipart/form-data" id="uploadForm">
               <div class="form-group">
                  <label for="modelo">Modelo :</label>
                  <input type="text" name="modelo" id="modelo" class="form-control input-sm">
              </div>
              <div class="form-group">
                  <label for="nro_partida">Nro de Partida :</label>
                  <input type="text" name="nro_partida" id="nro_partida" class="form-control input-sm">
              </div>
              <div class="form-group">
                  <label for="descripcion">Descripción :</label>
                  <input type="text" name="descripcion" id="descripcion" class="form-control input-sm">
              </div>
              <div class="form-group">
                  <label for="proveedor">Proveedor:</label>
                   <select class="form-control" id="proveedor" name="proveedor" required>
                <option value="SENKE">SENKE</option>
                <option value="KINGTON">KINGTON</option>
                <option value="SHINERAY">SHINERAY</option>
              </select> 
           </div>
              <div class="form-group">
                  <label for="existencia">Cantidad :</label>
                  <input type="number" name="existencia" id="existencia" class="form-control input-sm">
              </div>
              <div class="photo">
                  <label for="foto">Foto</label>
                  <div class="prevPhoto">
                    <span class="delPhoto notBlock">X</span>
                    <label for="foto"></label>
                </div>
                <div class="upimg">
                    <input type="file" name="foto" id="foto" accept="image/*">
                </div>
                <div id="form_alert"></div>
            </div>
            <input type="hidden" name="usuario" id="usuario" class="form-control input-sm" value="<?php echo $_SESSION['user']; ?>">
            <br>
            <div class="tile-footer">
             <button type="submit" class="btn btn-primary" id="btnNuevoRe"><i class="fa fa-fw fa-lg fa-check-circle"></i>Grabar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/reclamos"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
         </div>
     </form>
 </div>
</div>
</div>
</div>
</div>

</div>   

</main>

<?php footerAdmin($data); ?>

<script src="<?php echo media(); ?>/js/Reclamos/reclamosDatos.js"></script> 


