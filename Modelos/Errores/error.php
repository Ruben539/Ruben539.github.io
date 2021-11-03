<?php 
session_start();
if (empty($_SESSION['active'])) {
    header('location: home');


}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="<?= media();  ?>/css/main.css">
    <title>Pagina no Encontrada</title>
</head>
<body>
 
      <div class="page-error tile">
        <img src="<?= media(); ?>/images/alexlogo.png" alt="" style="width: 270px;">
        <h1><i class="fa fa-exclamation-circle"></i> Error 404: Pagina no Encontrada</h1>
        <p>La pagina que solicitada  no encuentrada o no tiene el permiso de Acceso.</p>
        <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2) {?>
    <a href="<?php echo base_url(); ?>/dashboard" class="btn btn-primary" style="font-size: 1.5rem;">Volver</a>
   <?php } ?>
   <?php if ( $_SESSION['rol'] == 3) {?>
    <a href="<?php echo base_url(); ?>/herreria" class="btn btn-primary" style="font-size: 1.5rem;">Volver</a>
   <?php } ?>
   <?php if ( $_SESSION['rol'] == 4) {?>
    <a href="<?php echo base_url(); ?>/pintura" class="btn btn-primary" style="font-size: 1.5rem;">Volver</a>
   <?php } ?>
   <?php if ( $_SESSION['rol'] == 5) {?>
    <a href="<?php echo base_url(); ?>/ruedas" class="btn btn-primary" style="font-size: 1.5rem;">Volver</a>
   <?php } ?>
   <?php if ( $_SESSION['rol'] == 6) {?>
    <a href="<?php echo base_url(); ?>/cinta" class="btn btn-primary" style="font-size: 1.5rem;">Volver</a>
   <?php } ?>
   <?php if ( $_SESSION['rol'] == 7) {?>
    <a href="<?php echo base_url(); ?>/probado" class="btn btn-primary" style="font-size: 1.5rem;">Volver</a>
   <?php } ?>
   <?php if ( $_SESSION['rol'] == 8) {?>
    <a href="<?php echo base_url(); ?>/cuatroRuedas" class="btn btn-primary" style="font-size: 1.5rem;">Volver</a>
   <?php } ?>
      </div>
   
</div>
</body>
</html>