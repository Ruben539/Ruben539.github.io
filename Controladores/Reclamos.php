<?php 

    class Reclamos extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Reclamos(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 26;
        $data['page_tage'] = "Reclamos de Origen ";
        $data['page_name'] = "Reclamos de Origen ";
        $data['page_title'] = "Reclamos de Origen <small>- División Industrial</small>";
        
        $this->views->getView($this,"reclamos",$data);
        }

    }
 ?>