<?php
 Class HomeModel{

     public function __construct()
     {
    echo "Mensaje desde el modelo homeModel";
     }
    
     public function getCarrito($params){

        return "Datos Carrito Nº: ". $params;
     }
 }

?>