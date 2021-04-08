<?php


class Controllers
{

    public function __construct()
    {
        $this->loadModel();
    }


    public function loadModel()
    {
        //HomeModel.php
        $model = get_class($this) . "Model";
       //var_dump($model);
        //exit();
        $routClass = "Models/" . $model . ".php";
        if (file_exists($routClass)) {
            require_once($routClass);
            $this->$model = new $model();
        }

    }

}

?>