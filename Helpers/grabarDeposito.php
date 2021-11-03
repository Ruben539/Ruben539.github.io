<?php 
	require_once "../Modelos/conexion.php";
	$conection = conexion();

	$modelo=$_POST['modelo'];
	$nro_vehiculo=$_POST['nro_vehiculo'];
	$color=$_POST['color'];
	$pieza=$_POST['pieza'];
	$falla_detectada=$_POST['falla_detectada'];
	$origen=$_POST['origen'];
	$sector=$_POST['sector'];
	$estado=$_POST['estado'];
	$usuario=$_POST['usuario'];

	

	$sql = "INSERT into deposito (modelo,nro_vehiculo,color,pieza,falla_detectada,origen,sector,estado,usuario) 
				values('$modelo','$nro_vehiculo','$color','$pieza','$falla_detectada','$origen','$sector','$estado','$usuario') ";

			echo $resultado = mysqli_query($conection,$sql);
 ?>