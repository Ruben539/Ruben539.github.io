<?php 

    class ExcelCuatroRuedas extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelCuatroRuedas(){
       //echo "Mensaje desde el Controlador";
        
        $this->views->getView($this,"excelCuatroRuedas");
        }

    }
 ?>