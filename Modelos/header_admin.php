<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="description" content="Tienda Virtual by Rubenfl">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="autor" content="RubenFl">
    <meta name="theme-color" content="#f23">
    <title><?=$data['page_tage']; ?></title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>/css/estilos.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>/alertify/css/alertify.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
      <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 ) {?>
        <a class="app-header__logo" href="<?=  base_url(); ?>/dashboard">División Industrial</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> 
      <?php } ?>
      <?php if ($_SESSION['rol'] == 3) {?>
        <a class="app-header__logo" href="<?=  base_url(); ?>/herreria">División Industrial</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> 
      <?php } ?>
      <?php if ($_SESSION['rol'] == 4 ) {?>
        <a class="app-header__logo" href="<?=  base_url(); ?>/pintura">División Industrial</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> 
      <?php } ?>
      <?php if ($_SESSION['rol'] == 5 ) {?>
        <a class="app-header__logo" href="<?=  base_url(); ?>/ruedas">División Industrial</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> 
      <?php } ?>
      <?php if ($_SESSION['rol'] == 6) {?>
        <a class="app-header__logo" href="<?=  base_url(); ?>/cinta">División Industrial</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> 
      <?php } ?>
      <?php if ($_SESSION['rol'] == 7 ) {?>
        <a class="app-header__logo" href="<?=  base_url(); ?>/probado">División Industrial</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> 
      <?php } ?>
      <?php if ($_SESSION['rol'] == 8 ) {?>
        <a class="app-header__logo" href="<?=  base_url(); ?>/cuatroRuedas">División Industrial</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> 
      <?php } ?>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2) {?>
            <li><a class="dropdown-item" href="<?=  base_url(); ?>/configuracion"><i class="fa fa-cog fa-lg"></i> Configuración</a></li>
            <li><a class="dropdown-item" href="<?=  base_url(); ?>/perfil"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
              
            <?php } ?>
            <li><a class="dropdown-item" href="<?=  base_url(); ?>/salir"><i class="fa fa-sign-out-alt"></i> Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </header>

  <?php require_once("nav_admin.php");  ?>

  
    