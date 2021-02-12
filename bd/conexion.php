<?php

class Conexion{

    static public function conectar(){
        #Nombre del PDO seguido del nombre de la base de datos,usuario, contraseña
        $conection = new PDO("mysql:host=localhost;dbname=alex", "root",
            "");

        $conection -> exec("set names utf8");

        return $conection;
    }
}