<?php 

    class IntroCuatro_Ruedas extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function IntroCuatro_Ruedas(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 24;
        $data['page_tage'] = "Introducción al Sector de Cuatro Ruedas ";
        $data['page_name'] = "Introducción al Sector de Cuatro Ruedas ";
        $data['page_title'] = "Introducción al Sector de Cuatro Ruedas <small>- División Industrial</small>";
        
        $this->views->getView($this,"introCuatro_Ruedas",$data);
        }

    }
 ?>