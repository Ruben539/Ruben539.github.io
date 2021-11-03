<?php 

    class Chapas extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Chapas(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 18;
        $data['page_tage'] = "Chapas Utilizadas ";
        $data['page_name'] = "Chapas Utilizadas ";
        $data['page_title'] = "Chapas Utilizadas <small>- División Industrial</small>";
        
        $this->views->getView($this,"chapas",$data);
        }

    }
 ?>