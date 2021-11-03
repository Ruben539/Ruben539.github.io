<?php 
	require_once "../Modelos/conexion.php";
	$conection = conexion();

	$nombre=$_POST['nombre'];
	$cantidad=$_POST['cantidad'];
	$usuario=$_POST['usuario'];
	
	

	$sql = "INSERT into probadores (nombre,cantidad,usuario) 
				values('$nombre','$cantidad','$usuario') ";

			echo $resultado = mysqli_query($conection,$sql);
 ?>