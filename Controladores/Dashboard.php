<?php 

    class Dashboard extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function dashboard(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 2;
        $data['page_tage'] = "Dashboard - División Industrial";
        $data['page_title'] = "";
        $data['page_name'] = "dashboard";
        
        $this->views->getView($this,"dashboard",$data);
        }


    }
 ?>