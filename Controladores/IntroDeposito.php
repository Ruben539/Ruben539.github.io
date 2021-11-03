<?php 

    class IntroDeposito extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function IntroDeposito(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 23;
        $data['page_tage'] = "Introducción al Sector de Taller de Levante ";
        $data['page_name'] = "Introducción al Sector de Taller de Levante ";
        $data['page_title'] = "Introducción al Sector de Taller de Levante <small>- División Industrial</small>";
        
        $this->views->getView($this,"introDeposito",$data);
        }

    }
 ?>