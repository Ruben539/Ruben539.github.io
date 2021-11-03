<?php

require_once "../Modelos/conexion.php";
	$conection = conexion();

	$id_cinta=$_POST['id_cinta'];
	$n=$_POST['modelo'];
	$a=$_POST['nro_vehiculo'];
	$c=$_POST['color'];
	$t=$_POST['pieza'];
	$f=$_POST['falla_detectada'];
	$u=$_POST['usuario'];
	

	$sql = "UPDATE cinta set modelo = '$n',
                                 nro_vehiculo ='$a',
                                 color = '$c',
                                 pieza = '$t',
                                 falla_detectada = '$f',
                                 usuario = '$u'
                                
                WHERE id_cinta = '$id_cinta'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>