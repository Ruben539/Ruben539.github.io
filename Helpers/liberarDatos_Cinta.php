<?php
	
	session_start();
	require_once "../Modelos/conexion.php";
	$conection = conexion();

	date_default_timezone_set('America/Asuncion');
	$fecha = date('d-m-y H:i:s');
	$_POST['usuario'] = $_SESSION['user'];
	$_POST['fecha_fin'] = $fecha;
	$_POST['estado'] = "LIBERADDO";

	$id_cinta=$_POST['id_cinta'];
	$fecha_fin = $_POST['fecha_fin'];
	$estado = $_POST['estado'];
	$usuario = $_POST['usuario'];

	$sql = "UPDATE cinta set fecha_fin = '$fecha_fin', estado = '$estado',usuario = '$usuario', estatus = 0  WHERE id_cinta = '$id_cinta'";

	echo $resultado = mysqli_query($conection,$sql);

 ?>