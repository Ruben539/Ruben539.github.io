<?php 
	
	class Conexion { 
	private $host = 'localhost';
	private $user = 'root';
	private $password = '';
	private $db = 'basealex';

	public function __construct(){ 

		$conection = @mysqli_connect($host,$user,$password,$db);

		try {
			
		} catch (Exception $e) {
			
		}
	
    }
}