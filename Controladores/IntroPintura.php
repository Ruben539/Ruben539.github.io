<?php 

    class IntroPintura extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function IntroPintura(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 19;
        $data['page_tage'] = "Introducción al Sector de Pintura ";
        $data['page_name'] = "Introducción al Sector de Pintura ";
        $data['page_title'] = "Introducción al Sector de Pintura <small>- División Industrial</small>";
        
        $this->views->getView($this,"introPintura",$data);
        }

    }
 ?>