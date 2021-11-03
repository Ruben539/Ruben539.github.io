<?php 

$controller = ucwords($controller);
//Archivo Load
 $controladorFile = "Controladores/".$controller.".php";
 //echo $controladorFile;
 if (file_exists($controladorFile)) {

    require_once($controladorFile);
    $controller = new $controller();

    if (method_exists($controller, $metodo)) {

        $controller->{$metodo}($params);

     }else{ 
    require_once("Controladores/error404.php");     
     }

 }else{
    require_once("Controladores/error404.php"); 
 }
     


 ?>