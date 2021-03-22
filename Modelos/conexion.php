<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$bd   = 'alex';

$conexion = @mysqli_connect($host,$user,$pass,$bd);
if (!$conexion) {
	echo "Error de Conexion";

}


 ?>