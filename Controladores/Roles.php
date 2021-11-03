<?php 

    class Roles extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function Roles(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 3;
        $data['page_tage'] = "Roles - Usuario";
        $data['page_name'] = "Roles - Usuario";
        $data['page_title'] = "Roles Usuario <small>- División Industrial</small>";
         $data['page_function_js'] = "function_roles.js";
        $this->views->getView($this,"roles",$data);
        }


    }
 ?>