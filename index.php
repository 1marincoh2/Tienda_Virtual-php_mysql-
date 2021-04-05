<?php

$url = !empty($_GET['url']) ? $_GET['url'] : 'Home/home';
$arraUrl = explode("/",$url);
$controller = $arraUrl[0];
$method = $arraUrl[0];
$params = "";

if (!empty($arraUrl[1])){

    if ($arraUrl[1] != ""){

     $method = $arraUrl[1];
    }
}

if (!empty($arraUrl[2])){

    if ($arraUrl[2] != ""){

        for ($i=2; $i< count($arraUrl); $i++) {
            $params .= $arraUrl[$i].',';
        }
        $params = trim($params,',');

    }

}
echo "<br>";
echo "Controlador: " . $controller;
echo "<br>";
echo "metodo: ". $method;
echo "<br>";
echo "parametros: ".$params;
//print_r($arraUrl);





 ?>




