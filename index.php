<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="#"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Alex1.0</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <div id="login">
    <h3 class="text-center display-4">Division Industrial</h3>
    <img src="img/Alexsa.jpg" style="width: 20%;
    margin: 0px 620px;
    padding: 0 5px;
    position: relative;">
    <div class="container">
      <div class="row justify-content-center align-items-center" id="login-row">
        <div class="col-md-6" id="login-column">
          <div id="login-box"  class="col-md-12 bg-light text-dark">
            <form id="formLogin" class="form" method="POST" action="">
              <div class="form-group">
                <label for="usuario" class="text-dark">Usuario :</label>
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese su Usuario" >

              </div>

              <div class="form-group">
                <label for="password" class="text-dark">Contraseña :</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su Contraseña">
              </div>
                <br>
              <div class="form-group text-center">
                <input type="submit" name="submit" class="btn  btn-lg btn-block" value="Ingresar" style="background: #f00; color: #fff;">
              </div>
              <br>
              <div class="form-group mx-sm-4 text-center">
            <span><a href="" class="olvide">Olvidaste tu contraseña?</a></span>
          </div>

            </form>

          </div>

        </div>    
      </div>

    </div>
  </div>
  


  <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script src="plugins/sweet_alert2/sweetalert2.all.min.js"></script>
    <script src="codigo.js"></script>

<!--<script src="node_modules/sweetalert2/dist/sweetalert2.js"></script>
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>-->
</body>
</html>