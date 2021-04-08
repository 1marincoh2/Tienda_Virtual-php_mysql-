<?php

 class Home extends Controllers {

     public function __construct()
     {
       parent::__construct();
     }

     public function Home($params){
      echo "Mensaje desde el Controlador";
     }

     public function datos($params){
         echo "Dato Recibido: " .$params;
     }
       public function Carrito($params){
         $carrito = $this-> model->getCarrito($params);
          echo $carrito;
        }
 }

?>
