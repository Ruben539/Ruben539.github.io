<?php 

    class IntroHerreria extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function IntroHerreria(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 18;
        $data['page_tage'] = "Introducción al Sector de Herreria ";
        $data['page_name'] = "Introducción al Sector de Herreria ";
        $data['page_title'] = "Introducción al Sector de Herreria <small>- División Industrial</small>";
        
        $this->views->getView($this,"introHerreria",$data);
        }

    }
 ?>