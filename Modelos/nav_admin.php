<?php 
$objeto = new Conection();
$conexion = $objeto->conexion();

$id_usuario = $_SESSION['idUser'];

$query_foto = mysqli_query($conexion,"SELECT nombre,usuario,foto FROM usuario where id_usuario = '$id_usuario' AND estatus = 1");
$resultado = mysqli_num_rows($query_foto);
if ($resultado > 0) {
  while ($data = mysqli_fetch_array($query_foto)) {
     if ($data['foto'] != 'user.png') {
      $foto = 'Asses/images/uploads/'.$data['foto'];
       }else{
        $foto = '../Asses/images/'.$data['foto'];
      } 

 ?>
   <!-- Sidebar menu-->
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo $foto; ?>" alt= "<?php echo $data['usuario']; ?>">
          <div>
            <p class="app-sidebar__user-name"><?php echo $_SESSION['nombre']; ?></p>
            <p class="app-sidebar__user-designation"><?php echo $_SESSION['puesto']; ?></p>
          </div>
        </div>
   <?php   }
} ?> 
    <ul class="app-menu">
      <!--Menu Principal del Usuario con lista desplegable-->

      <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2) {?>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <!--Menu Principal del Usuario-->
            <li><a class="treeview-item" href="<?= base_url(); ?>/usuario"><i class="icon fa fa-users"></i> Usuarios Activos</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/usuario_Inactivo"><i class="icon fa fa-users"></i> Usuarios Inactivos</a></li>
            <!--Menu Principal del Rol-->
            <li><a class="treeview-item" href="<?= base_url(); ?>/roles"><i class="icon fa fa-user-shield"></i> Roles</a></li>
          </ul>
        </li>
      <?php  } ?>

      <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 || $_SESSION['rol'] == 3 ) {?>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bolt"></i><span class="app-menu__label">Herreria</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <!--Menu Principal del Rol-->
            <li><a class="treeview-item" href="<?= base_url(); ?>/introHerreria"><i class="icon fa fa-file-pdf"></i> Gestión SGS</a></li>
            <!--Menu Principal del Herreria-->
            <li><a class="treeview-item" href="<?= base_url(); ?>/herreria"><i class="icon fa fa-bolt"></i> Motos Pendientes</a></li>
            <!--Menu Principal del Rol-->
            <li><a class="treeview-item" href="<?= base_url(); ?>/herreria_lib"><i class="icon fa fa-bolt"></i> Motos Liberadas</a></li>
          </ul>
        </li>
      <?php } ?>

      <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 || $_SESSION['rol'] == 4) {?>

       <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-paint-brush"></i><span class="app-menu__label">Pintura</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <!--Menu Principal del Pintura-->
          <li><a class="treeview-item" href="<?= base_url(); ?>/introPintura"><i class="icon fa fa-file-pdf"></i> Gestión SGS</a></li>
          <li><a class="treeview-item" href="<?= base_url(); ?>/pintura"><i class="icon fa fa-paint-brush"></i> Motos Pendientes</a></li>
          <!--Menu Principal del Rol-->
          <li><a class="treeview-item" href="<?= base_url(); ?>/pintura_lib"><i class="icon fa fa-paint-brush"></i> Motos Liberadas</a></li>
        </ul>
      </li>
    <?php } ?>

    <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 || $_SESSION['rol'] == 5) {?>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-dot-circle"></i><span class="app-menu__label">Ruedas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <!--Menu Principal del Ruedas-->
          <li><a class="treeview-item" href="<?= base_url(); ?>/introRuedas"><i class="icon fa fa-file-pdf"></i> Gestión SGS</a></li>
          <li><a class="treeview-item" href="<?= base_url(); ?>/ruedas"><i class="icon fa fa-dot-circle"></i> Motos Pendientes</a></li>
          <!--Menu Principal del -->
          <li><a class="treeview-item" href="<?= base_url(); ?>/ruedas_lib"><i class="icon fa fa-dot-circle"></i> Motos Liberadas</a></li>
        </ul>
      </li>
    <?php } ?>

    <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 || $_SESSION['rol'] == 6) {?>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cogs"></i><span class="app-menu__label">Cinta de Ensamble</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <!--Menu Principal del Cinta de Ensamble-->
          <li><a class="treeview-item" href="<?= base_url(); ?>/introCinta"><i class="icon fa fa-file-pdf"></i> Gestión SGS</a></li>
          <li><a class="treeview-item" href="<?= base_url(); ?>/cinta"><i class="icon fa fa-cogs"></i> Motos Pendientes</a></li>
          <!--Menu Principal del Rol-->
          <li><a class="treeview-item" href="<?= base_url(); ?>/cinta_lib"><i class="icon fa fa-cogs"></i> Motos Liberadas</a></li>
        </ul>
      </li>
    <?php } ?>

    <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 || $_SESSION['rol'] == 7) {?>
     <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-motorcycle"></i><span class="app-menu__label">Inspección y Control</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
       <!--Menu Principal del Inspección y Control-->
       <li><a class="treeview-item" href="<?= base_url(); ?>/introProbado"><i class="icon fa fa-file-pdf"></i> Presentacion SGC</a></li>
       <!--Menu Principal del Inspección y Control-->
       <li><a class="treeview-item" href="<?= base_url(); ?>/probado"><i class="icon fa fa-motorcycle"></i> Motos Pendientes</a></li>
       <!--Menu Principal de Liberadas-->
       <li><a class="treeview-item" href="<?= base_url(); ?>/probado_lib"><i class="icon fa fa-motorcycle"></i> Motos Liberadas</a></li>
       <!--Menu Principal del Inspección y Control-->
       <li><a class="treeview-item" href="<?= base_url(); ?>/chapas"><i class="icon fa fa-motorcycle"></i> Chapas Utilizadas</a></li>
     </ul>
   </li>
   <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-motorcycle"></i><span class="app-menu__label">Taller de Levante</span><i class="treeview-indicator fa fa-angle-right"></i></a>
    <ul class="treeview-menu">
      <!--Menu Principal del Inspección y Control-->
      <li><a class="treeview-item" href="<?= base_url(); ?>/introDeposito"><i class="icon fa fa-file-pdf"></i> Gestión SGS</a></li>
      <li><a class="treeview-item" href="<?= base_url(); ?>/deposito"><i class="icon fa fa-motorcycle"></i> Deposito 9 Pendientes</a></li>
      <!--Menu Principal Liberadas-->
      <li><a class="treeview-item" href="<?= base_url(); ?>/deposito_lib"><i class="icon fa fa-motorcycle"></i>Deposito 9 Liberadas</a></li>
      <!--Menu Principal Liberadas-->
      <li><a class="treeview-item" href="<?= base_url(); ?>/activaciones"><i class="icon fa fa-motorcycle"></i> Motos Activadas</a></li>
    </ul>
  </li>
<?php } ?>

<?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 || $_SESSION['rol'] == 8) {?>
  <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bus"></i><span class="app-menu__label">Cuatro Ruedas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
    <ul class="treeview-menu">
      <!--Menu Principal del Inspección y Control-->
      <li><a class="treeview-item" href="<?= base_url(); ?>/introCuatro_Ruedas"><i class="icon fa fa-file-pdf"></i> Gestión SGS</a></li>
      <li><a class="treeview-item" href="<?= base_url(); ?>/cuatroRuedas"><i class="icon fa fa-bus"></i>Control de Pintura</a></li>
    </ul>
  </li>
<?php  } ?>
<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fas fa-box-open"></i><span class="app-menu__label"> Pedidos Externos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
  <ul class="treeview-menu">
    <!--Menu Principal del Inspección y Control-->
    <li><a class="treeview-item" href="<?= base_url(); ?>/garantia"><i class="icon fa fa-people-carry"></i> Pendientes de  Garantia</a></li>
    <li><a class="treeview-item" href="<?= base_url(); ?>/garantia_lib"><i class="icon fa fa-people-carry"></i> Autorizados de  Garantia</a></li>
    <li><a class="treeview-item" href="<?= base_url(); ?>/reclamos"><i class="icon fa fa-pallet"></i> Reclamos de Origen</a></li>
  </ul>
</li>
<!--Menu Principal del Cierre de Sesión-->
<a class="app-menu__item" href="<?= base_url(); ?>/salir"><i class="app-menu__icon fa fa-sign-out-alt"></i><span class="app-menu__label">Cerrar Sesión</span></a></li>

</ul>
</aside>