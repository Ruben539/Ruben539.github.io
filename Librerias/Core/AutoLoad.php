<?php 

 spl_autoload_register(function($class){
    //echo LIBS.'Core/'.$class.".php";
 	if (file_exists("Librerias/".'Core/'.$class.".php")) {
 		require_once("Librerias/".'Core/'.$class.".php");
 	}
 });

 ?>