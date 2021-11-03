<?php
session_start();
if (empty($_SESSION['active'])) {
    header('location: home');
}
$objeto = new Conection();
$conexion = $objeto->conexion();
headerAdmin($data);

?>

<main class="app-content">
  <div class="row user">
    <div class="col-md-12">
      <div class="profile">
        <div class="info"><img class="user-img" src="<?= media(); ?>/images/recurso.png">
            <h4>Cuatro Ruedas</h4>
            <p>División Industrial</p>
        </div>
        <div class="cover-image"></div>
    </div>
</div>
<div class="col-md-3">
  <div class="tile p-0">
    <ul class="nav flex-column nav-tabs user-tabs">
        <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Descripciones</a></li>
      <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Procedimientos</a></li>
  </ul>
</div>
</div>
<div class="col-md-9">
  <div class="tab-content">
    <div class="tab-pane active" id="user-timeline">
      <div class="timeline-post">
        <div class="post-media"><img src="<?php echo media(); ?>/images/alexlogo.png">
          <div class="content">
            <h1><a href="#">Politica de Calidad</a></h1>
        </div>
    </div>
    <div class="post-content">
      <p>Fabricamos componentes y ensamblamos motos y vehiculos que satisfagan las necesidades de nuestros usuarios, para ello nos comprometemos a : <br><br>
    <i class="fas fa-check"></i> Ajustarnos a métodos y procedimientos establecidos y cumplir los requisitos aplicables. <br>
    <i class="fas fa-check"></i> Controlar la Calidad a cada paso del proceso. <br>
    <i class="fas fa-check"></i> Mantener el orden y limpieza en los lugares de trabajo. <br>
    <i class="fas fa-check"></i> Buscar en forma permanente una mejor forma de hacer nuestro trabajo, mas rapido, con menos demora y sin fallas. <br><br>
    Para lograrlo, establecemos en el marco de un Sistema de Calidad y lo implementamos con un equipo humano capacitado y comprometido.</p>
  </div>
</div>
<div class="timeline-post">
    <div class="post-media"><img src="<?php echo media(); ?>/images/alexlogo.png">
      <div class="content">
        <h2><a href="#">Descripciones de Cargo</a></h2>
    </div>
</div>
<div class="post-content">
  <p><i class="fas fa-file-export"></i> Encargado. <br>
     <i class="fas fa-file-export"></i> Probador. <br>
     <i class="fas fa-file-export"></i> Mecanico. <br></p>
</div>

</div>
</div>
<div class="tab-pane fade" id="user-settings">
  <div class="tile user-settings">
    <h4 class="line-head">Settings</h4>
    <form>
      <div class="row mb-4">
        <div class="col-md-4">
          <label>First Name</label>
          <input class="form-control" type="text">
      </div>
      <div class="col-md-4">
          <label>Last Name</label>
          <input class="form-control" type="text">
      </div>
  </div>
  <div class="row">
    <div class="col-md-8 mb-4">
      <label>Email</label>
      <input class="form-control" type="text">
  </div>
  <div class="clearfix"></div>
  <div class="col-md-8 mb-4">
      <label>Mobile No</label>
      <input class="form-control" type="text">
  </div>
  <div class="clearfix"></div>
  <div class="col-md-8 mb-4">
      <label>Office Phone</label>
      <input class="form-control" type="text">
  </div>
  <div class="clearfix"></div>
  <div class="col-md-8 mb-4">
      <label>Home Phone</label>
      <input class="form-control" type="text">
  </div>
</div>
<div class="row mb-10">
    <div class="col-md-12">
      <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</main>



<?php footerAdmin($data); ?>
