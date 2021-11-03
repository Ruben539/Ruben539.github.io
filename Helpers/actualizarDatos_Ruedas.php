<?php

require_once "../Modelos/conexion.php";
	$conection = conexion();

	$id_ruedas=$_POST['id_ruedas'];
	$n=$_POST['modelo'];
	$a=$_POST['nro_vehiculo'];
	$c=$_POST['color'];
	$t=$_POST['pieza'];
	$f=$_POST['falla_detectada'];
	$u=$_POST['usuario'];

	$sql = "UPDATE ruedas set modelo = '$n',
                                 nro_vehiculo ='$a',
                                 color = '$c',
                                 pieza = '$t',
                                 falla_detectada = '$f',
                                 usuario= '$u'
                WHERE id_ruedas = '$id_ruedas'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>