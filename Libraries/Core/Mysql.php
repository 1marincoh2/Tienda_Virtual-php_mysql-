<?php
class Mysql extends Conexion{
  private $conexion;
  private $strquery;
  private $arrValues;

   function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion-> Connect();
    }
    //insertar registro
    public function insert(string $query,array $arraValues)
    {

        $this->strquery = $query;

        $this->arrValues = $arraValues;
        $insert = $this->conexion->prepare($this->strquery);
        $resInsert = $insert->execute($arraValues);
        if ($resInsert) {
            $lastInsert = $this->conexion->lastinsertId();
        } else {
            $lastInsert = 0;
        }
        return $lastInsert;


    }

     //buscar registro
    public function select(string $query)
    {
      $this->strquery = $query;
      $result = $this->conexion->prepare($this->strquery);
      $result-> execute();
      $data = $result->fetch(PDO::FETCH_ASSOC);
      return $data;
    }

    //devuelve todos los registros
    public function select_all(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result-> execute();
        $data = $result->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }

    //buscar registro
    public function selec(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result-> execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    //actualizar datos
    public function update(string $query,array $arrValues)
    {
        $this->strquery = $query;
        $this->arrValues= $arrValues;
        $update = $this->conexion->prepare($this->strquery);
        $resExecute = $update->execute($this->arrValues);
        return $resExecute;
    }
    //eliminar registro
    public function delete(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result-> execute();
        return $result;
    }
}

?>