<?php 

    class ExcelChapas extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelChapas(){
       //echo "Mensaje desde el Controlador";
    
        $this->views->getView($this,"excelchapas");
        }

    }
 ?>