<?php

 class Home extends Controllers
 {

     public function __construct()
     {
         parent::__construct();
     }

     public function Home()
     {
         $data['page_id']=1;
         $data['tag_page']= "Home";
         $data['page_title']="Pagina_Principal";
         $data['page_name']="home";
         $data['page_content']="Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.";
        $this->views->getView($this,"home",$data);
     }

    /* public function datos($params)
     {
         echo "Dato Recibido: " . $params;
     }

     public function carrito($params)
     {
         $carrito = $this->model-> getCarrito($params);
         echo $carrito;
     }*/
 }

?>
