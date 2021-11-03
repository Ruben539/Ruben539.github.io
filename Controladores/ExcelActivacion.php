<?php 

    class ExcelActivacion extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelActivacion(){
       //echo "Mensaje desde el Controlador";
    
        $this->views->getView($this,"excelActivacion");
        }

    }
 ?>