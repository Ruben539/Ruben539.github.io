<?php 

    class IntroCinta extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function IntroCinta(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 21;
        $data['page_tage'] = "Introducción al Sector de Cinta ";
        $data['page_name'] = "Introducción al Sector de Cinta ";
        $data['page_title'] = "Introducción al Sector de Cinta <small>- División Industrial</small>";
        
        $this->views->getView($this,"introCinta",$data);
        }

    }
 ?>