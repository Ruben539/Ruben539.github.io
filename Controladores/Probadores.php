<?php 

    class Probadores extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Probadores(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 24;
        $data['page_tage'] = "Cantidad por Probador ";
        $data['page_name'] = "Cantidad por Probador ";
        $data['page_title'] = "Cantidad por Probador <small>- División Industrial</small>";
        
        $this->views->getView($this,"probadores",$data);
        }

    }
 ?>