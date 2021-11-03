 <?php 
 session_start();
if (empty($_SESSION['active'])) {
    header('location: home');
}
 headerAdmin($data);
 ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><img src="<?= media(); ?>/images/alexlogo.png" alt=""><?= $data['page_title']; ?></h1>
          <p>Registro de Fallas en Desarrollo</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Pagina de Inicio</a></li>
        </ul>
      </div>
      
          <div class="tile">
            <div class="tile-body">CANTIDAD DE MOTOS PENDIENTES POR SECTOR</B></div>
          </div>

          <div class="row">
            <!--widgets de Desembalado-->
        <div class="col-md-3">
          <div class="widget-small danger"><i class="icon fa fa-cube fa-3x"></i>
            <div class="info">
              <h4>Desembalado</h4>
              <p id="idDesembalado" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de Herreria-->
        <div class="col-md-3">
          <div class="widget-small danger"><i class="icon fa fa-bolt fa-3x"></i>
            <div class="info">
              <h4><a class="link" href="<?= base_url();  ?>herreria">Herreria</a></h4>
              <p id="idHerreria" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de Pintura-->
        <div class="col-md-3">
          <div class="widget-small danger"><i class="icon fa fa-paint-brush fa-3x"></i>
            <div class="info">
              <h4><a class="link" href="<?= base_url(); ?>pintura">Pintura</a></h4>
              <p id="idPintura" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de Ruedas-->
        <div class="col-md-3">
          <div class="widget-small danger"><i class="icon fa fa-dot-circle fa-3x"></i>
            <div class="info">
              <h4><a class="link" href="<?= base_url(); ?>ruedas">Ruedas</a></h4>
              <p id="idRuedas" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
      </div>
       <!--Fin del Primer widgets-->
        <!--widgets de Inicio-->
      <div class="row">
         <!--widgets de Cinta-->
        <div class="col-md-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-user-cog fa-3x"></i>
            <div class="info">
              <h4><a class="link_1" href="<?= base_url(); ?>/cinta">C. Ensamble</a></h4>
              <p id="idCinta" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de Inspeccion-->
        <div class="col-md-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-motorcycle fa-3x"></i>
            <div class="info">
              <h4><a class="link_1" href="<?= base_url(); ?>/probado">Insp y Control</a></h4>
              <p id="idProbado" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de Taller de Levante-->
        <div class="col-md-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-motorcycle fa-3x"></i>
            <div class="info">
              <h4><a class="link_1" href="<?= base_url(); ?>/deposito">T. de Levante</a></h4>
              <p id="idDeposito" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de 4Ruedas-->
        <div class="col-md-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-bus fa-3x"></i>
            <div class="info">
              <h4><a class="link_1" href="<?= base_url(); ?>/cuatroRuedas">Cuatro Ruedas</a></h4>
              <p id="idCuatroR" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
      </div>

       <div class="tile">
            <div class="tile-body"><B>CANTIDAD DE MOTOS LIBERADAS POR SECTOR</B></div>
        </div>
      <!--widgets de Desembalado-->
      <div class="row">
        <div class="col-md-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-cube fa-3x"></i>
            <div class="info">
              <h4>Desembalado</h4>
              <p id="idDesembalado_lib" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de Herreria-->
        <div class="col-md-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-bolt fa-3x"></i>
            <div class="info">
              <h4><a class="link_1" href="<?= base_url(); ?>/herreria_lib">Herreria</a></h4>
              <p id="idHerreria_lib" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de Pintura-->
        <div class="col-md-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-paint-brush fa-3x"></i>
            <div class="info">
              <h4><a class="link_1" href="<?= base_url(); ?>/pintura_lib">Pintura</a></h4>
              <p id="idPintura_lib" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de Ruedas-->
        <div class="col-md-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-dot-circle fa-3x"></i>
            <div class="info">
              <h4><a class="link_1" href="<?= base_url(); ?>/ruedas_lib">Ruedas</a></h4>
              <p id="idRuedas_lib" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
      </div>
       <!--Fin del Primer widgets-->
        <!--widgets de Inicio-->
      <div class="row">
         <!--widgets de Cinta-->
        <div class="col-md-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-cogs fa-3x"></i>
            <div class="info">
              <h4><a class="link_1" href="<?= base_url(); ?>/cinta_lib">C. Ensamble</a></h4>
              <p id="idCinta_lib" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de Inspeccion-->
        <div class="col-md-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-motorcycle fa-3x"></i>
            <div class="info">
              <h4><a class="link_1" href="<?= base_url(); ?>/probado_lib">Insp y Control</a></h4>
              <p id="idProbado_lib" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de Taller de Levante-->
        <div class="col-md-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-motorcycle fa-3x"></i>
            <div class="info">
              <h4><a class="link_1" href="<?= base_url(); ?>/deposito_lib">T. de Levante</a></h4>
              <p id="idDeposito_lib" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de 4Ruedas-->
        <div class="col-md-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-bus fa-3x"></i>
            <div class="info">
              <h4><a class="link_1" href="<?= base_url(); ?>/cuatroRuedas">Cuatro Ruedas</a></h4>
              <p id="idCuatroR_lib" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
      </div>
 <!--widgets de los Probadores----------------------------------------------------------------------------->
      <div class="tile">
            <div class="tile-body"><B>CANTIDAD DE MOTOS PROBADAS POR PROBADORES</B></div>
        </div>
      <div class="row">
            <!--widgets de MIGUEL URBIETA-->
        <div class="col-md-3">
          <div class="widget-small"><img src="<?= media(); ?>/images/probadores/miguel.jpg">
            <div class="info" class="icon fa-3x">
              <h4><a class="link text-center" href="<?= base_url(); ?>probadores">Miguel Urbieta</a></h4>
              <p id="idMiguel" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de PABLO  GONZALEZ-->
        <div class="col-md-3">
          <div class="widget-small "><img src="<?= media(); ?>/images/probadores/pablo.jfif" class="fa-3x">
            <div class="info">
              <h4><a class="link text-center" href="<?= base_url(); ?>probadores">Pablo Gonzalez</a></h4>
              <p id="idPablo" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de DIEGO COLMAN-->
        <div class="col-md-3">
          <div class="widget-small "><img src="<?= media(); ?>/images/probadores/diegoc.jpg" class="fa-3x">
            <div class="info">
             <h4><a class="link text-center" href="<?= base_url(); ?>probadores">Diego Colman</a></h4>
              <p id="idDiego" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de MARIO BRITEZ-->
        <div class="col-md-3">
          <div class="widget-small "><img src="<?= media(); ?>/images/probadores/ever.jpg" class="fa-3x">
            <div class="info">
              <h4><a class="link text-center" href="<?= base_url(); ?>probadores">Mario Britez</a></h4>
              <p id="idMario" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
      </div>
       <div class="row">
            <!--widgets de JUNIOR GUANES-->
        <div class="col-md-3">
          <div class="widget-small "><img src="<?= media(); ?>/images/probadores/junior.jfif">
            <div class="info" class="icon fa-3x">
              <h4><a class="link text-center" href="<?= base_url(); ?>probadores">Junior Guanes</a></h4>
              <p id="idJunior" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de BRUNO SEGOVIA-->
        <div class="col-md-3">
          <div class="widget-small "><img src="<?= media(); ?>/images/probadores/brunos.jfif" class="fa-3x">
            <div class="info">
              <h4><a class="link text-center" href="<?= base_url(); ?>probadores">BRUNO SEGOVIA</a></h4>
              <p id="idBrunos" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
        
         <!--widgets de JUAN ALVAREZ-->
        <div class="col-md-3">
          <div class="widget-small "><img src="<?= media(); ?>/images/probadores/juan.jfif" class="fa-3x">
            <div class="info">
              <h4><a class="link text-center" href="<?= base_url(); ?>probadores">Juan Alvarez</a></h4>
              <p id="idJuan" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
         <!--widgets de HERMINIO IRALA-->
        <div class="col-md-3">
          <div class="widget-small "><img src="<?= media(); ?>/images/probadores/herminio.jpg">
            <div class="info" class="icon fa-3x">
              <h4><a class="link text-center" href="<?= base_url(); ?>probadores">Herminio Irala</a></h4>
              <p id="idHerminio" class="text-center" style="font-size: 50px;"><b>5</b></p>
            </div>
          </div>
        </div>
      </div>

      <div class="tile">
            <h5 class="tile-body">MOTOS PROBADAS EN EL BANCO DE PRUEBAS :  <span id="idChamorro"></span> <i class="fas fa-motorcycle"></i></h5>
        </div>
     
<?php footerAdmin($data); ?>
   