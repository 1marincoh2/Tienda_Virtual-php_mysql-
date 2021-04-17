<?php

class Conexion{

    /*private $host = "localhost";
    private $use = "root";
    private $password ="";
    private $db = "db_sistema";
    */
    private $conect;


    public function __construct(){
        $conexionString = "mysql:hos=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
        try {
            $this->conect = new PDO($conexionString,DB_USER,DB_PASSWORD);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // echo  "conexion exitosa";
        }catch (Exception $e){
            $this->conect = "error de conexion";
            echo "Error : ".$e->getMessage();
        }
    }

    public function Connect(){

        return  $this->conect;
    }

}
//$conect = new Conexion();
?>
