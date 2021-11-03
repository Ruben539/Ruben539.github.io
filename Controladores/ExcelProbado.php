<?php 

    class ExcelProbado extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function ExcelProbado(){
       //echo "Mensaje desde el Controlador";
        $this->views->getView($this,"excelProbado");
        }


    }
 ?>