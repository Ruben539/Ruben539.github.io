<nav style="background: #f00;" class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="pag_inicio.php">División Industrial</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <?php 

        if ($_SESSION['s_idRol'] == 1) {

         ?>
        <a style="color:#fff;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registro_usuario.php">Nuevo Registro</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="lista_usuario.php">Lista de Registros</a>
        </div>
      </li>
    <?php } ?>
      <li class="nav-item dropdown">
        <a style="color:#fff;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Insp y Control
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="tallerLevante.php">Nuevo Registro</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="lista_taller.php">Lista de Registros</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a style="color:#fff;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Cinta de Ensamble
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Nuevo Registro</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Lista de Registros</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a style="color:#fff;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ruedas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Nuevo Registro</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Lista de Registro</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a style="color:#fff;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Pintura
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Lista de Registros</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a style="color:#fff;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Herreria
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Lista de Registros</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a style="color:#fff;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Desembalado
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Nuevo Registro</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Lista de Registro</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a style="color:#fff;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pedido Compras
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Nuevo Registro</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Lista de Registro</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0 ">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 bg-blue" type="submit">Buscar</button>
    </form>
  </div>
</nav>
