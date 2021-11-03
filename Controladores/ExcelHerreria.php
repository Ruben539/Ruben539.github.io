<?php 

    class ExcelHerreria extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelHerreria(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"excelHerreria");
        }


    }
 ?>