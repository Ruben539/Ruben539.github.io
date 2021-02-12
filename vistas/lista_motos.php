 <?php
 session_start();

 include "Modelos/conexion.php"; 

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<link rel="shortcut icon" href="#"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Alex1.0</title>
	<?php include "bootstrap/bootstrap.php"; ?>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">	
 	<link rel="stylesheet" type="text/css" href="css/estiloLista.css">
 	<link rel="stylesheet" type="text/css" href="css/estiloPagi.css">
 	
 	<title>Lista de Motos</title>
 </head>
 <body>
 	<?php include "scripts/nav.php";?>
 	<br>
 	<section id="container">

 		<h1>Lista de Motos Probadas</h1>
 		<a href="registro_motos.php" class="btn_new"><i class="fas fa-user-plus">Crear Registro</i></a>

 		<form class="form_buscar" method="GET" action = "buscarMoto.php">
 			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
 			<input type="submit" value="Buscar" class="btn_buscar">
 		</form >
 		<div class="row">
 			<div class="col l10 offset-l1">
 				<table>
 					<tr>
 						<th>ID</th>
 						<th>Modelo</th>
 						<th>Nro Vehiculo</th>
 						<th>Nro Chasis</th>
 						<th>Color</th>
 						<th>Nro de Chapa</th>
 						<th>Falla Detectada</th>
 						<th>Acciones a Tomar</th>
 					</tr>

 					<?php 

 			//PAGINADOR:

 					$sql_register =  mysqli_query($conection,"SELECT COUNT(*) AS total_registro FROM probado WHERE estatus = 1");


 					$resultado_register = mysqli_fetch_array($sql_register);

 					$total_registro = $resultado_register['total_registro'];

 					$por_pagina = 5;

 					if (empty($_GET['pagina'])) {
 						$pagina = 1;
 					}else{
 						$pagina = $_GET['pagina'];
 					}

 					$desde = ($pagina-1) * $por_pagina;
 					$total_paginas = ceil($total_registro / $por_pagina);


 					$query = mysqli_query($conection,"SELECT p.idprobado,p.modelo,p.nro_vehiculo,p.nro_chasis,p.color,p.nro_chapa,p.falla_detectada FROM probado p WHERE estatus = 1 ORDER BY p.idprobado LIMIT $desde,$por_pagina");

 			mysqli_close($conection);//con esto cerramos la conexion a la base de datos una vez conectado arriba con el conexion.php


 			$resultado = mysqli_num_rows($query);

 			if ($resultado > 0) {

 				while ($data = mysqli_fetch_array($query)) {

 					?>

 					<tr>
 						<td><?php echo $data['idprobado'];?></td>
 						<td><?php echo $data['modelo']; ?></td>
 						<td><?php echo $data['nro_vehiculo'];?></td>
 						<td><?php echo $data['nro_chasis']; ?></td>
 						<td><?php echo $data['color']; ?></td>
 						<td><?php echo $data['nro_chapa']; ?></td>
 						<td><?php echo $data['falla_detectada']; ?></td>
 						
 						<td>

 							<a class="link_edit" href="enviar_cinta.php?id=<?php echo $data['idprobado']; ?>"><i class="fas fa-tools">OT/CINTA</i></a>
 							||	

 							<a class="link_delet" href="enviar_pintura.php?id=<?php echo $data['idprobado']; ?>"><i class="fa fa-tools">OT/PINTURA</i></a>
 							||
 							<a class="link_add" href="enviar_herreria.php?id=<?php echo $data['idprobado']; ?>"><i class="fa fa-tools">OT/HERRERIA</i></a>	

 							

 						</td>
 					</tr>
 					<?php 

 				}

 			}
 			?>

 		</table>
 	</div>
 </div>
 <a href="planillas/excelProbado.php" class="btn_new blue">Descargar Excel</a>

 <div class="paginador">

 	<ul>
 		<?php 

 		if ($pagina != 1) {
 						# code...


 			?>

 			<li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
 			<li><a href="?pagina=<?php echo $pagina -1; ?>"><</a></li>

 			<?php 

 		}

 		for ($i=1; $i <= $total_paginas ; $i++) { 


 			if ($i == $pagina) {

 				echo '<li class="pageSelect">'.$i.'</li>';
 			}else{

 				echo '<li><a href ="?pagina= '.$i.'">'.$i.'</a></li>';

 			}

 		}

 		if ($pagina != $total_paginas) {
 					# code...



 			?>

 			<li><a href="?pagina=<?php echo $pagina +1; ?>">></a></li>

 			<li><a href="?pagina=<?php echo $total_paginas ?>">>|</a></li>
 		<?php } ?>

 	</ul>

 </div>



</section>

<!---SCRIPTS UTILIZADOS PARA  AJAX,JQUERY,BOOTSTRAP,SWEETALERT2-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="node_modules/jquery-3.5.1.min.js"></script>

  <script src="js/codigo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">

<!--<script src="node_modules/sweetalert2/dist/sweetalert2.js"></script>
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>-->
</body>
</html>