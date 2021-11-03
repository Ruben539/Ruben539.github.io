<?php 
	require_once "../Modelos/conexion.php";
	$conection = conexion();

	$modelo=$_POST['modelo'];
	$nro_vehiculo=$_POST['nro_vehiculo'];
	$color=$_POST['color'];
	$pieza=$_POST['pieza'];
	$falla_detectada=$_POST['falla_detectada'];
	$usuario=$_POST['usuario'];
	$sector=$_POST['sector'];
	$estado=$_POST['estado'];
	
	

	$sql = "INSERT into cinta (modelo,nro_vehiculo,color,pieza,falla_detectada,usuario,sector,estado) 
				values('$modelo','$nro_vehiculo','$color','$pieza','$falla_detectada', '$usuario','$sector','$estado') ";

			echo $resultado = mysqli_query($conection,$sql);
 ?>