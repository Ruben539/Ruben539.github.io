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
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="jumbotron">
          <h1 class="display-4 text-center" style="color:red;">¡Bienvenido!</h1>
          <h2 class="text-center" style="color: red;">Usuario: <span class="badge badge-success"><?php echo $_SESSION["s_usuario"];?></span></h2> 
          <h3 class="text-center" style="color: red;">Rol: <span class="badge badge-success"><?php echo $_SESSION["s_rol_descripcion"];?></span></h3>    
          <p class="lead text-center" style="color: red;
          font-size: 35pt;"><b>División Industrial</b></p>
          <hr class="my-4">          
          <a class="btn btn-danger btn-lg" href="../bd/logout.php" role="button">Cerrar Sesión</a>
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