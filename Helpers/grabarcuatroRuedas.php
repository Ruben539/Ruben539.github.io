<?php 
	require_once "../Modelos/conexion.php";
	$conection = conexion();

	$modelo=$_POST['modelo'];
	$nro_chasis=$_POST['nro_chasis'];
	$insumo_1=$_POST['insumo_1'];
	$cantidad_1=$_POST['cantidad_1'];
	$insumo_2=$_POST['insumo_2'];
	$cantidad_2=$_POST['cantidad_2'];
	$insumo_3=$_POST['insumo_3'];
	$cantidad_3=$_POST['cantidad_3'];
	$insumo_4=$_POST['insumo_4'];
	$cantidad_4=$_POST['cantidad_4'];
	$insumo_5=$_POST['insumo_5'];
	$cantidad_5=$_POST['cantidad_5'];
	$observacion=$_POST['observacion'];
	$usuario=$_POST['usuario'];
	
	

	$sql = "INSERT into pintura_camiones (modelo,nro_chasis,insumo_1,cantidad_1,insumo_2,cantidad_2,insumo_3,cantidad_3,insumo_4,cantidad_4,insumo_5,cantidad_5,observacion,usuario) 
				values('$modelo','$nro_chasis','$insumo_1','$cantidad_1','$insumo_2','$cantidad_2','$insumo_3','$cantidad_3','$insumo_4','$cantidad_4','$insumo_5','$cantidad_5','$observacion','$usuario') ";

			echo $resultado = mysqli_query($conection,$sql);
 ?>