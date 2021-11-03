<?php 
	require_once "../Modelos/conexion.php";
	$conection = conexion();

	$serie=$_POST['serie'];
	$desde=$_POST['desde'];
	$hasta=$_POST['hasta'];
	$observacion=$_POST['observacion'];
	$usuario=$_POST['usuario'];
	
	

	$sql = "INSERT into chapas (serie,desde,hasta,observacion,usuario) 
				values('$serie','$desde','$hasta','$observacion','$usuario') ";

			echo $resultado = mysqli_query($conection,$sql);
 ?>