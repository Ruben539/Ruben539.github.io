<?php
	
	session_start();
	require_once "../Modelos/conexion.php";
	$conection = conexion();

	

	$id_usuario=$_POST['id_usuario'];
	
	$sql = "UPDATE usuario set estatus = 0  WHERE id_usuario = '$id_usuario'";

	echo $resultado = mysqli_query($conection,$sql);

 ?>