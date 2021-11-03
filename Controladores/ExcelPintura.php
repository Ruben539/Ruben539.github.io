<?php 

    class ExcelPintura extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelPintura(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"excelPintura");
        }


    }
 ?>