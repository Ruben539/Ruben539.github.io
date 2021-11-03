<?php 
	require_once "../Modelos/conexion.php";
	$conection = conexion();

	$solicitante=$_POST['solicitante'];
	$modelo=$_POST['modelo'];
	$nro_partida=$_POST['nro_partida'];
	$pieza=$_POST['pieza'];
	$cantidad=$_POST['cantidad'];
	$destino=$_POST['destino'];
	$observacion=$_POST['observacion'];	

	$sql = "INSERT into reclamos (solicitante,modelo,nro_partida,pieza,cantidad,destino,observacion) 
				values('$solicitante','$modelo','$nro_partida','$pieza','$cantidad','$destino','$observacion') ";

			echo $resultado = mysqli_query($conection,$sql);
 ?>