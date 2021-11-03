<?php 

    class Salir extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Salir(){
       //echo "Mensaje desde el Controlador";
        
        $this->views->getView($this,"salir",$data);
        }


    }
 ?>