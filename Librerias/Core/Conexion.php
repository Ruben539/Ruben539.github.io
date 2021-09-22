<?php 

	class Conexion {
	 
	    private $user = "root";
	    private $pass = "";
	    private $conect;

	    public function __construct(){
	        $connectionString = "mysql:host=localhost;dbname=website;charset=utf8";
	        try {
	        	$this->conect = new PDO($connectionString,$this->user,$this->pass);
	        	$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        	//echo "Conexion Exitosa!!";
	        } catch (Exception $e) {
	        	$this->conect = "Error de Conexión";
	        	echo "ERROR:".$e->getMessage();
	        }
	    }

	    public function connect(){
	    	return $this->conect;
	    }
	   
	}

 ?>