 <?php
session_start();
if (empty($_SESSION['active'])) {
    header('location: home');
}
  headerAdmin($data);
       //getModals('modalUsuario', $data);  ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-server" aria-hidden="true"></i> <?= $data['page_title']; ?>
        </h1>
          <p>Tienda Ecommers en Desarrollo</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/permisos"><?= $data['page_title']; ?></a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body"> <i class="fa fa-lock" style="font-size: 20px;"></i> Permisos de Usuarios </div>
          </div>
        </div>
      </div>
    </main>
<?php footerAdmin($data); ?>
   