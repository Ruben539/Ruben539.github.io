<?php 

    class Pintura_Lib extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Pintura_Lib(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 7;
        $data['page_tage'] = "Motos Liberadas ";
        $data['page_name'] = "Motos Liberadas ";
        $data['page_title'] = "Motos Liberadas <small>- División Industrial</small>";
        
        $this->views->getView($this,"pintura_lib",$data);
        }

    }
 ?>