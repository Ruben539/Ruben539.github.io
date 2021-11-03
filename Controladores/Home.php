<?php 

    class Home extends Controllers{
        
        public function __construct(){

            parent::__construct();
        }

        public function home(){
       //echo "Mensaje desde el Controlador";
        $data['page_id'] = 1;
        $data['page_tage'] = "Home";
        $data['page_title'] = "Pagina Principal";
        $data['page_name'] = "home";
        $data['page_content'] = "Esta pagina es la vista dirigida por contenedores de los controladores";
        $this->views->getView($this,"home",$data);
        }


    }
 ?>