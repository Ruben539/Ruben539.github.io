<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>División Industrial</title>
	<!--Estilo Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilonav.css">
</head>
<body>
	<header>
		<div class="logo"><a href="pag_inicio.php">División Industrial</a></div>
		<nav>
			<ul>
				<li class="active"><a href=""><i class="fa fa-home" aria-hidden="true"></i>Inicio</a></li>
				<li><a href=""><i class="fa fa-cubes" aria-hidden="true"></i>Desembalado</a></li>
				<li><a href=""><i class="fa fa-bolt" aria-hidden="true"></i>Herreria</a></li>
				<li><a href=""><i class="fa fa-paint-brush" aria-hidden="true"></i>Pintura</a></li>
				<li><a href=""><i class="fa fa-circle-o" aria-hidden="true"></i>Ruedas</a></li>
				<li><a href=""><i class="fa fa-cogs" aria-hidden="true"></i>Cinta de Ensamble</a></li>
				<li><a href="Vistas/tablaProbado.php"><i class="fa fa-motorcycle" aria-hidden="true"></i>Inspección y Control</a></li>
				
			</ul>
		</nav>
		<div class="menu-toggle">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</div>
	</header>

	<!--Scrip del menu -->
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<!--Scrip para el codigo del menu-->
	<script type="text/javascript">
		$(document).ready(function(){
			$('.menu-toggle').click(function(){
				$('nav').toggleClass('active')
			});
		});
	</script>
</body>
</html>