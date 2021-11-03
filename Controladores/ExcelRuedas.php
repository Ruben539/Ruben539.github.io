<?php 

    class excelRuedas extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelRuedas(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"excelRuedas");
        }


    }
 ?>