<?php 

    class IntroRuedas extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function IntroRuedas(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 20;
        $data['page_tage'] = "Introducción al Sector de Ruedas ";
        $data['page_name'] = "Introducción al Sector de Ruedas ";
        $data['page_title'] = "Introducción al Sector de Ruedas <small>- División Industrial</small>";
        
        $this->views->getView($this,"IntroRuedas",$data);
        }

    }
 ?>