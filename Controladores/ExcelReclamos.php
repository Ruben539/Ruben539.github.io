<?php 

    class ExcelReclamos extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelReclamos(){
       //echo "Mensaje desde el Controlador";
        
        
        $this->views->getView($this,"excelReclamos");
        }

    }
 ?>