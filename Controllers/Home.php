<?php
 class Home{

     public function __construct()
     {
     }

     public function Home($params){
         echo "Mensaje desde el Controlador";
     }

     public function datos($params){
         echo "Dato Recibido: " .$params;
     }
 }

?>
