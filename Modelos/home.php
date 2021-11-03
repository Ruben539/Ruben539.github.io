<?php

$alert = '';

session_start();

if (!empty($_SESSION['active'])) {

  header('Location: home');
}else{

  if (!empty($_POST)) {


    if (empty($_POST['usuario']) || empty($_POST['password'])){
          $alert= '<div class= "alert alert-danger"><i class="fas fa-exclamation-triangle"></i><b> Rellene todos los Campos</b></div>';
    }else{

      require_once "Modelos/conexion.php";
      $conection = conexion();
     
      $user =  mysqli_real_escape_string($conection,$_POST['usuario']);
      $pass = md5(mysqli_real_escape_string($conection,$_POST['password']));

      if (preg_match('/^[a-zA-ZñÑ]+$/',$_POST['usuario']) &&
      preg_match('/^[0-9a-zA-Z]+$/',$_POST['password'])) {



      $query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario = '$user'
        AND password = '$pass' AND estatus = 1");

      mysqli_close($conection);//con esto cerramos la conexion a la base de datos una vez conectado arriba con el conexion.php
      $resultado = mysqli_num_rows($query);


      if ($resultado > 0) {
        $data = mysqli_fetch_array($query);

        $_SESSION['active'] = true;
        $_SESSION['idUser'] = $data['id_usuario'];
        $_SESSION['nombre'] = $data['nombre'];
        $_SESSION['correo'] = $data['correo'];
        $_SESSION['user'] = $data['usuario'];
        $_SESSION['rol'] = $data['rol'];
        $_SESSION['puesto'] = $data['puesto'];
        


        if ($_SESSION['rol'] == 1 ) {
         header('Location: dashboard');

        }else if($_SESSION['rol'] == 2){
          header('Location: dashboard');

        } if ($_SESSION['rol'] == 3) {
          header('location: herreria');

        }else if ($_SESSION['rol'] == 4) {
          header('location:pintura');

        } if ($_SESSION['rol'] == 5) {
          header('location:ruedas');

        }else if ($_SESSION['rol'] == 6) {
          header('location: cinta');

        }if ($_SESSION['rol'] == 7) {
          header('location: probado');

        }else if ($_SESSION['rol'] == 8) {
          header('location: cuatroRuedas');
        }else if ($_SESSION['rol'] == 9) {
          header('location: reclamos');
        }

      }else{

            $alert= '<div class= "alert alert-danger"><i class="fas fa-exclamation-triangle"></i><b> El Usuario y/o la Contraseña son Incorrectas</b></div>';

        session_destroy();
          }
        }
      }
    }
  }


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="Asses/css/main.css">
    <link rel="stylesheet" type="text/css" href="Asses/css/estilos.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Acceso - División Industrial</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="login-box">
        <form class="login-form" method="POST">
          <h3 class="login-head"><img src="Asses/images/alexlogo.png" alt=""></h3>
          <div class="form-group">
            <label class="control-label">Usuario</label>
            <input class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">Contraseña</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Olvidaste tu Contraseña ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt fa-lg fa-fw"></i> Ingresar</button>
            <br>
          </div>
           <?php if($alert != ""){  ?>
              <div id="alerta"><?php echo $alert; ?></div>
              <?php } ?>
        </form>
        <form class="forget-form" action="">
          <h3 class="login-head"><img src="Asses/images/alexlogo.png" alt=""></h3>
          <div class="form-group">
            <label class="control-label">Usuario</label>
            <input class="form-control" type="text" placeholder="Usuario">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>Reestablecer</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Ir la Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="Asses/js/jquery-3.3.1.min.js"></script>
    <script src="Asses/popper/popper.min.js"></script>
    <script src="Asses/js/bootstrap.min.js"></script>
    <script src="Asses/js/main.js"></script>
    <script src="Asses/js/login.js"></script>
    
   
  </body>
</html>