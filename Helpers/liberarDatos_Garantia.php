<?php
	
	session_start();
	require_once "../Modelos/conexion.php";
	$conection = conexion();

	date_default_timezone_set('America/Asuncion');
	$fecha = date('d-m-y H:i:s');
	$_POST['usuario'] = $_SESSION['user'];
	$_POST['fecha_fin'] = $fecha;

	$id_reclamo=$_POST['id_reclamo'];
	$fecha_fin = $_POST['fecha_fin'];
	$usuario = $_POST['usuario'];

	$sql = "UPDATE reclamos set fecha_fin = '$fecha_fin', usuario = '$usuario', estatus = 0  WHERE id_reclamo = '$id_reclamo'";

	echo $resultado = mysqli_query($conection,$sql);

 ?>