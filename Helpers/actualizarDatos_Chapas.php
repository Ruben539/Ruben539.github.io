<?php

require_once "../Modelos/conexion.php";
	$conection = conexion();

	$id_chapa=$_POST['id_chapa'];
	$s=$_POST['serie'];
	$d=$_POST['desde'];
	$h=$_POST['hasta'];
	$o=$_POST['observacion'];	

	$sql = "UPDATE chapas set serie = '$s',
                                 desde ='$d',
                                 hasta = '$h',
                                 observacion = '$o'                                
                WHERE id_chapa = '$id_chapa'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>