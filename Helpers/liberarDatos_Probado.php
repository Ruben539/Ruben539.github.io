<?php
	
	session_start();
	require_once "../Modelos/conexion.php";
	$conection = conexion();

	date_default_timezone_set('America/Asuncion');
	$fecha = date('d-m-y H:i:s');

	$_POST['usuario'] = $_SESSION['user'];

	$_POST['fecha_fin'] = $fecha;

	$id_probado=$_POST['id_probado'];
	$fecha_fin = $_POST['fecha_fin'];
	$usuario = $_POST['usuario'];

	$sql = "UPDATE probado set fecha_fin = '$fecha_fin', usuario = '$usuario', estatus = 0  WHERE id_probado = '$id_probado'";

	echo $resultado = mysqli_query($conection,$sql);

 ?>