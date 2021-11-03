<?php

require_once "../Modelos/conexion.php";
	$conection = conexion();

	$id_usuario=$_POST['id_usuario'];
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$usuario=$_POST['usuario'];
	$password=md5($_POST['password']);
	$rol=$_POST['rol'];
	$puesto=$_POST['puesto'];
	

	$sql = "UPDATE usuario set nombre = '$nombre',
                                 correo ='$correo',
                                 usuario = '$usuario',
                                 password = '$password',
                                 rol = '$rol',
                                 puesto = '$puesto'
                                
                WHERE id_usuario = '$id_usuario'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>