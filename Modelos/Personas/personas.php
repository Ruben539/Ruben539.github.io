<?php
session_start();
if (empty($_SESSION['active'])) {
    header('location: home');
}
$objeto = new Conection();
$conexion = $objeto->conexion();

if (!empty($_POST)) {
    $alert = '';

    //print_r($_POST);
    //print_r($_FILES);
    //exit;

    if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['password']) ||empty($_POST['rol'])) {

        $alert = '<p class = "msg_error">Debe llenar Todos los Campos</p>';

    }else{


        $nombre = $_POST['nombre'];
        $correo  = $_POST['correo'];
        $usuario   = $_POST['usuario'];
        $pass   = md5($_POST['password']);
        $rol    = $_POST['rol'];
        $puesto    = $_POST['puesto'];

        $foto = $_FILES['foto'] ['name'];
        $nombrefoto = $_FILES['foto'] ['name'];
        $tipo = $_FILES['foto'] ['type'] ;
        $url_temp = $_FILES['foto'] ['tmp_name'];
        

        $imgProducto = 'user.png';

        if ($nombrefoto != '') {

            $destino ='Asses/images/uploads/';

            $img_nombre   = 'image_'.md5(date('d-m Y H-m-s'));#Estamos encriptando la fecha y hora para el nombre de la foto 
            $imgProducto  = $img_nombre.'.jpg';
            $scr          =  $destino.$imgProducto;     
            
        }

        /*$query = mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario = '$usuario' or correo = '$correo'");

        $resultado = mysqli_fetch_array($query);

        if ($resultado > 0) {
            $alert = '<p class = "msg_error">El correo o Usuario ya existe</p>';
        }else{*/

            $query_insert = mysqli_query($conexion,"INSERT INTO usuario(nombre,correo,usuario,password,rol,puesto,foto)
                VALUES('$nombre','$correo','$usuario','$pass','$rol','$puesto','$imgProducto')");
            if ($query_insert ) {
            if ($nombrefoto != '') {
                move_uploaded_file($url_temp, $scr);
            }
            header('location: usuario');

        }else{
               $alert = 'Error al Grabar'; 
            }
        
    }

}


headerAdmin($data);
?>
<main class="app-content">
   <div class="app-title">

      <h1><i class="fa fa-users" aria-hidden="true"></i>  Registro de Usuarios</h1>   
  </div>
  
  <div  tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-lg" >
        <div class="modal-content">
          <div class="modal-header headerRegister">
            <h5 class="modal-title" id="titleModal">Nuevo registro</h5>
            
      </div>
      <div class="modal-body">
         <form action="" method="POST" enctype="multipart/form-data" id="uploadForm">    
            <br>  
            <div class="container-input">    
              <input type="text" name="nombre" id="nombre" class="input-48" placeholder="Nombre"  required>
              <input type="email" name="correo" id="correo" class="input-48" placeholder="Correo" required>
              <input type="text" name="usuario" id="usuario" class="input-48" placeholder="Usuario">
              <input type="password" name="password" id="password" class="input-48" placeholder="Contraseña">
              <select class="input-48" id="rol" name="rol" required>
                <?php if ($_SESSION['rol'] == 1) {?>
                    
                <option value="1">Administrador</option>
                <option value="2">Supervisor</option>
               <?php } ?>
                <option value="3">Desembalado</option>
                <option value="3">Herreria</option>
                <option value="4">Pintura</option>
                <option value="5">Ruedas</option>
                <option value="6">Cinta</option>
                <option value="7">Probado</option>
                <option value="8">Cuatro Ruedas</option>
            </select>

            <input type="text" name="puesto" id="puesto" class="input-48" placeholder="Puesto">

        <div class="container-fluid  text-center">
            <div class="photo" >
              <label for="foto">Foto</label>
              <div class="prevPhoto">
                <span class="delPhoto notBlock">X</span>
                <label for="foto"></label>
            </div>
            <div class="upimg">
                <input type="file" name="foto" id="foto"  class="input-48">
            </div>
            <div id="form_alert"></div>
        </div>
        </div>
            
    </div>
    <br>
    <div class="tile-footer text-center">
        <button  class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/cuatroRuedas"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
    </div>
    <br>
   </form>
</div>
</div>
</div>
</div>


</main>

<?php footerAdmin($data); ?>
<script src="<?php echo media(); ?>/js/Reclamos/reclamosDatos.js"></script>

