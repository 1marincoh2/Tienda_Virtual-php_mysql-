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
  public function insert(){

      $data = $this->model->setUser("jose alberto marin coh",28);
      print_r($data);
  }

  public function verusuario($id){
      $data = $this->model->getUser($id);
      print_r($data);
  }
     public function actualizar(){
         $data = $this->model->updateUser(2,"alina sayuri marin canul",7)   ;
         print_r($data);
     }
     public function verusuarios($id){
         $data = $this->model->getUsers($id);
         print_r($data);
     }
     public function eliminarusuario($id){
         $data = $this->model->delUser($id);
         print_r($data);
     }

 }

?>
