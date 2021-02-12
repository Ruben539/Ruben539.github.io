<?php 
session_start();

//Si nadie inció sesión vuelve a la pag de Login
if ($_SESSION["s_usuario"] === null){
	header("Location: ../index.php");
}else{
    if($_SESSION["s_idRol"]!=1){
        header("Location: pag_error.php");
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="#" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/sweet_alert2/sweetalert2.min.css">
    
    
    <title>Gerencia Industrial</title>
</head>
<body>
<?php include "../scripts/nav.php"; ?>
<div id="login">
    <img src="../img/Alexsa.jpg" style="width: 20%;
    margin: 0px 620px;
    padding: 0 5px;
    position: relative;">
    <div class="container">
      <div class="row justify-content-center align-items-center" id="login-row">
        <div class="col-md-6" id="login-column">
          <div id="login-box"  class="col-md-12 bg-light text-dark">
            <form id="formLogin" class="form" method="POST" action="">

              <div class="form-group">
                <label for="nombre" class="text-dark">Nombre :</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su Nombre" >

              </div>

              <div class="form-group">
                <label for="correo" class="text-dark">Correo :</label>
                <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su Correo">
              </div>

              <div class="form-group">
                <label for="usuario" class="text-dark">Usuario :</label>
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese su Usuario">
              </div>
              <div class="form-group">
                <label for="password" class="text-dark">Contraseña :</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su Contraseña">
              </div>
              <div class="form-group">
                <label for="rol">Tipo de Usuario :</label>

        <?php 
        include_once '../bd/conexion.php';

        $consulta = mysqli_query($conection,"SELECT * FROM rol");
        
        $resultado = mysqli_num_rows($consulta);

        ?>

        <select name="rol" id="rol">
          <?php 

          if ($resultado > 0) {
            while ($rol = mysqli_fetch_array($consulta)) {

          ?>
          <option value="<?php echo $rol["s_idRol"]; ?>"><?php echo 
              $rol["rol"] ?></option>

          <?php 


            }
          }

          ?>


        </select>
              </div>
                <br>
              <div class="form-group text-center">
                <input type="submit" name="submit" class="btn  btn-lg btn-block" value="Ingresar" style="background: #f00; color: #fff;">
              </div>
              

            </form>

          </div>

        </div>    
      </div>

    </div>
  </div>

        
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../jquery/jquery-3.3.1.min.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<script src="../plugins/sweet_alert2/sweetalert2.all.min.js"></script>
<script src="../codigo.js"></script>
</body>
</html>