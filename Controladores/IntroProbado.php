<?php 

    class IntroProbado extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function IntroProbado(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 22;
        $data['page_tage'] = "Introducción al Sector de Probado ";
        $data['page_name'] = "Introducción al Sector de Probado ";
        $data['page_title'] = "Introducción al Sector de Probado <small>- División Industrial</small>";
        
        $this->views->getView($this,"introProbado",$data);
        }

    }
 ?>