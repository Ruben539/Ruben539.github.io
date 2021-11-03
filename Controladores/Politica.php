<?php 

    class Politica extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Politica(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"politica");
        }


    }
 ?>