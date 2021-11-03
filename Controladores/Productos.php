<?php 

    class Productos extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Productos(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 26;
        $data['page_tage'] = "Productos de Origen ";
        $data['page_name'] = "Productos de Origen ";
        $data['page_title'] = "Productos de Origen <small>- División Industrial</small>";
        
        $this->views->getView($this,"productos",$data);
        }

    }
 ?>