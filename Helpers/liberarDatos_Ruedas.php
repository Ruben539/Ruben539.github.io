<?php
	
	session_start();
	require_once "../Modelos/conexion.php";
	$conection = conexion();

	date_default_timezone_set('America/Asuncion');
	$fecha = date('d-m-y H:i:s');
	$_POST['usuario'] = $_SESSION['user'];
	$_POST['fecha_fin'] = $fecha;
	$_POST['estado'] = "LIBERADDO";

	$id_ruedas=$_POST['id_ruedas'];
	$fecha_fin = $_POST['fecha_fin'];
	$estado = $_POST['estado'];
	$usuario = $_POST['usuario'];

	$sql = "UPDATE ruedas set fecha_fin = '$fecha_fin', estado = '$estado',usuario = '$usuario', estatus = 0  WHERE id_ruedas = '$id_ruedas'";

	echo $resultado = mysqli_query($conection,$sql);

 ?>