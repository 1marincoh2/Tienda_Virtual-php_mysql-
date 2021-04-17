<?php
 Class HomeModel extends Mysql {

     public function __construct()
     {
         parent::__construct();
     }

     public function setUser(string $nombre, int $edad){
         $query_insert = "INSERT INTO Usuario(nombre,edad) values(?,?)";
         $arrData = array($nombre,$edad);
         $request_insert=$this->insert($query_insert,$arrData);
         return $request_insert;

     }

     public function getUser($id){
         $sql="SELECT * FROM Usuario WHERE id = $id";
         $request=$this->select($sql);
         return $request;
     }

     public function updateUser(int $id, string $nombre, int $edad){
         $sql="UPDATE Usuario SET nombre=?, edad=? WHERE id = $id";
         $arrData = array($nombre,$edad);
         $request=$this->update($sql,$arrData);
         return $request;
     }
     public function getUsers(){
         $sql="SELECT * FROM Usuario ";
         $request=$this->select_all($sql);
         return $request;
     }
     public function delUser($id){
         $sql="DELETE FROM Usuario WHERE id=$id";
         $request=$this->delete($sql);
         return $request;
     }

 }

?>