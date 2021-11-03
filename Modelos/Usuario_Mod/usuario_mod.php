<?php 
session_start();
$objeto = new Conection();
$conexion = $objeto->conexion();

if (!empty($_POST)) {
  $alert = '';
  //print_r($_POST);
//print_r($_FILES);
//exit;
  
  if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['password']) ||empty($_POST['rol']) || empty($_POST['id']) || empty($_POST['foto_actual']) || empty($_POST['foto_remove'])) {

    $alert = '<p class = "msg_error">Debe llenar Todos los Campos</p>';

  }else{
    $id_usuario  = $_POST['id'];
    $nombre      = $_POST['nombre'];
    $correo      = $_POST['correo'];
    $usuario     = $_POST['usuario'];
    $pass        = md5($_POST['password']);
    $rol         = $_POST['rol'];
    $puesto      = $_POST['puesto'];

    $imgUser     = $_POST['foto_actual'];
    $imgRemove   = $_POST['foto_remove'];

    $foto = $_FILES['foto'] ['name'];
    $nombrefoto = $_FILES['foto'] ['name'];
    $tipo = $_FILES['foto'] ['type'] ;
    $url_temp = $_FILES['foto'] ['tmp_name'];
    

    $upd = '';

    if ($nombrefoto != '') {

      $destino ='Asses/images/uploads/';

      $img_nombre   = 'img_'.md5(date('d-m Y H-m-s'));#Estamos encriptando la fecha y hora para el nombre de la foto 
      $imgUser  = $img_nombre.'.jpg';
      $scr        =  $destino.$imgUser;   
      
    }else{
      if ($_POST['foto_actual'] != $_POST['foto_remove']) {
        $imgUser = 'user.png';
      }
    }

    $query_update = mysqli_query($conexion,"UPDATE usuario
      SET nombre = $nombre, correo = '$correo',usuario = $usuario,password = $pass,rol = $rol,puesto = $puesto,foto = '$imgUser' WHERE id_usuario = $id_usuario" );

    if ($query_update ) {
      if (($nombrefoto != '' && ($_POST['foto_actual'] != 'user.png')) || ($_POST['foto_actual'] != $_POST['foto_remove'])) {
        unlink('Asses/images/uploads/'.$_POST['foto_actual']);
      }

      if ($nombrefoto != '') {
        move_uploaded_file($url_temp, $scr);
      }
      header('location: usuario');

    }else{
      $alert = '<p class = "msg_error">Error al Actualizar el Usuario</p>';
    }
  }

}

//Validar existencia de Usuario
if (empty($_REQUEST['id'])) {
 header('location: usuario');
}else{
  $id_usuario = $_REQUEST['id'];
  if (!is_numeric($id_usuario)) {
   header('location: usuario');

 }

 $query_user = mysqli_query($conexion,"SELECT u.id_usuario,u.nombre,u.correo,u.usuario,u.password,u.rol,u.puesto,u.foto FROM usuario u  WHERE id_usuario = $id_usuario AND u.estatus = 1");

 $resul_prod = mysqli_num_rows($query_user);

 $foto = '';
 $classRemove = 'notBlock';

 if ($resul_prod > 0) {
  $data_user = mysqli_fetch_array($query_user);

  if ($data_user['foto'] != 'user.png') {
    $classRemove = '';
    $foto = '<img id="img" src = "Asses/images/uploads/'.$data_user['foto'].'" alt= "Usuario">';
  }

  //print_r($data_user);
}

}
headerAdmin($data);
?>
<main class="app-content">
 <div class="app-title">

  <h1><i class="fa fa-users" aria-hidden="true"></i>  Actualización de Usuario</h1>   
</div>

<div  tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Actualizar registro</h5>

      </div>
      <div class="modal-body">
       <form action="" method="POST" enctype="multipart/form-data" id="uploadForm">   
         <input type="hidden" name="id" value="<?php echo $data_user['id_usuario']; ?>">
         <input type="hidden" name="foto_actual" id="foto_actual" value="<?php echo $data_user['foto']; ?>">
         <input type="hidden" name="foto_remove" id="foto_remove" value="<?php echo $data_user['foto']; ?>"> 
         <br>  
         <div class="container-input">    
          <input type="text" name="nombre" id="nombre" class="input-48" placeholder="Nombre"  required value="<?php echo $data_user['nombre'] ?>">

          <input type="email" name="correo" id="correo" class="input-48" placeholder="Correo" required value="<?php echo $data_user['correo'] ?>">

          <input type="text" name="usuario" id="usuario" class="input-48" placeholder="Usuario" value="<?php echo $data_user['usuario'] ?>">

          <input type="password" name="password" id="password" class="input-48" placeholder="Contraseña" value="<?php echo $data_user['password'] ?>">

          <select class="input-48" id="rol" name="rol" required value="<?php echo $data_user['rol'] ?>">
            <option value="1">Administrador</option>
            <option value="2">Supervisor</option>
            <option value="3">Herreria</option>
            <option value="4">Pintura</option>
            <option value="5">Ruedas</option>
            <option value="6">Cinta</option>
            <option value="7">Probado</option>
            <option value="8">Cuatro Ruedas</option>
          </select>

          <input type="text" name="puesto" id="puesto" class="input-48" placeholder="Puesto" value="<?php echo $data_user['puesto'] ?>">

          <div class="container-fluid  text-center">
            <div class="photo">
              <label for="foto">Foto</label>
              <div class="prevPhoto">
                <span class="delPhoto <?php echo $classRemove; ?>">X</span>
                <label for="foto"></label>
                <?php echo $foto; ?>
              </div>
              <div class="upimg">
                <input type="file" name="foto" id="foto">
              </div>
              <div id="form_alert"></div>
            </div>
            <br>
            <?php 
            echo $alert  ?>
          </div>
          <br>
          <div class="tile-footer text-center">
            <button  class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Actualizar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url(); ?>/cuatroRuedas"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>


</main>

<?php footerAdmin($data); ?>
<script src="<?php echo media(); ?>/js/Usuario/usuario.js"></script>