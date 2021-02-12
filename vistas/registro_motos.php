<?php 
    session_start();
include "../bd/conexion.php";

if (!empty($_POST)) {
  $alert = '';

  if (empty($_POST['modelo']) || empty($_POST['nro_vehiculo']) || empty($_POST['nro_chasis'])) {

    $alert = '<p class = "msg_error">Debe llenar Todos los Campos</p>';

  }else{
    
    $modelo          = $_POST['modelo'];
    $nro_vehiculo    = $_POST['nro_vehiculo'];
    $nro_chasis      = $_POST['nro_chasis'];
    $color           = $_POST['color'];
    $nro_chapa       = $_POST['nro_chapa'];
    $falla_detectada = $_POST['falla_detectada'];
    
    
    $resultado = 0;

      

      $query = mysqli_query($conection,"SELECT * FROM probado WHERE modelo = '$modelo' ");

      $resultado = mysqli_fetch_array($query);


    if ($resultado > 0) {
      $alert = '<p class = "msg_save">El Registro  ya existe</p>';
    }else{
      $query_insert = mysqli_query($conection,"INSERT INTO probado(modelo,nro_vehiculo,nro_chasis,color,nro_chapa,falla_detectada)
        VALUES('$modelo','$nro_vehiculo','$nro_chasis','$color','$nro_chapa','$falla_detectada')");

    if ($query_insert ) {
        $alert = '<p class = "msg_save">Registro Guardado Correctamente</p>';
        
      }else{
        $alert = '<p class = "msg_error">Registro al Guardado el Cliente</p>';
      }
    }

  }
  mysqli_close($conection);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="#"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Alex1.0</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estiloRegistro.css">
  <link rel="stylesheet" type="text/css" href="css/estiloLista.css">
</head>
<body>
  <?php include "../scripts/nav.php"; ?>
  <div id="login">
    <br>
    <div class="container">
      <div class="row justify-content-center align-items-center" id="login-row">
        <div class="col-md-6" id="login-column">
          <div id="login-box"  class="col-md-12 bg-light text-dark">
            <form id="formLogin" class="form" method="POST" action="">
              <div class="form-group">
                <label for="nro_vehiculo" class="text-dark">Nro de Vehiculo :</label>
                <input type="text" class="form-control" name="nro_vehiculo" id="nro_vehiculo" placeholder="Ingrese su Nro de Vehiculo" >

              </div>

              <div class="form-group">
                <label for="modelo" class="text-dark">Modelo :</label>
                <input type="modelo" class="form-control" name="modelo" id="modelo" placeholder="Ingrese el Modelo">
              </div>

              <div class="form-group">
                <label for="nro_chasis" class="text-dark">Nro de Chasis :</label>
                <input type="text" class="form-control" name="nro_chasis" id="nro_chasis" placeholder="Ingrese el Nro Chasis">
              </div>
              <div class="form-group">
                <label for="color" class="text-dark">Color :</label>
                <input type="text" class="form-control" name="color" id="color" placeholder="Ingrese el Color">
              </div>

              <div class="form-group">
                <label for="nro_chapa" class="text-dark">Nro de Chapa :</label>
                <input type="text" class="form-control" name="nro_chapa" id="nro_chapa" placeholder="Ingrese el Nro de Chapa">
              </div>

              <div class="form-group">
                <label for="falla_detectada" class="text-dark">Falla Detectada :</label>
                <input type="text" class="form-control" name="falla_detectada" id="falla_detectada" placeholder="Ingrese la Falla">
              </div>
                <br>
              <div class="form-group text-center">
                <input type="submit" name="submit" class="btn  btn-lg btn-block" value="Guardar Registro" style="background: #f00; color: #fff;">
              </div>
              

            </form>

          </div>

        </div>    
      </div>

    </div>
  </div>
  


  <!---SCRIPTS UTILIZADOS PARA  AJAX,JQUERY,BOOTSTRAP,SWEETALERT2-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="node_modules/jquery-3.5.1.min.js"></script>

  <!---<script src="js/codigo.js"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">

<!--<script src="node_modules/sweetalert2/dist/sweetalert2.js"></script>
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>-->
</body>
</html>