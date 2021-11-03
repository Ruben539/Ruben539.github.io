<?php

require_once "../Modelos/conexion.php";
	$conection = conexion();

	$id_probador=$_POST['id_probador'];
	$n=$_POST['nombre'];
	$c=$_POST['cantidad'];
		

	$sql = "UPDATE probadores set nombre = '$n',
                                 cantidad ='$c'                                                                
                WHERE id_probador = '$id_probador'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>