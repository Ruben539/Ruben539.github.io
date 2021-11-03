<?php 
	require_once "../Modelos/conexion.php";
	$conection = conexion();

	$modelo=$_POST['modelo'];
	$nro_vehiculo=$_POST['nro_vehiculo'];
	$color=$_POST['color'];
	$nro_chapa=$_POST['nro_chapa'];
	$observacion=$_POST['observacion'];
	$usuario=$_POST['usuario'];
	

	$sql = "INSERT into activaciones (modelo,nro_vehiculo,color,nro_chapa,observacion,usuario) 
				values('$modelo','$nro_vehiculo','$color','$nro_chapa','$observacion', '$usuario') ";

			echo $resultado = mysqli_query($conection,$sql);
 ?>