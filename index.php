<?php
require_once ("Config/Config.php");
$url = !empty($_GET['url']) ? $_GET['url'] : 'Home/home';
$arraUrl = explode("/", $url);
$controller = $arraUrl[0];
$method = $arraUrl[0];
$params = "";

if (!empty($arraUrl[1])) {

    if ($arraUrl[1] != "") {

        $method = $arraUrl[1];
    }
}

if (!empty($arraUrl[2])) {

    if ($arraUrl[2] != "") {

        for ($i = 2; $i < count($arraUrl); $i++) {
            $params .= $arraUrl[$i] . ',';
        }
        $params = trim($params, ',');

    }

}

spl_autoload_register(function ($class) {
//echo LIBS.'Core/'.$class.".php";
    if (file_exists(LIBS . 'Core/' . $class . ".php")) {

        require_once(LIBS . 'Core/' . $class . ".php");
    }

});

// va en archivo load

$controllerFile = "Controllers/" . $controller . ".php";
if (file_exists($controllerFile)) {

    require_once ($controllerFile);
    $controller = new $controller();
    if (method_exists($controller,$method)){
        $controller->{$method}($params);
    }else{
        echo "No existe el metodo";
    }
} else {
    echo "No existe Controlador";
}
/*
echo "<br>";
echo "Controlador: " . $controller;
echo "<br>";
echo "metodo: " . $method;
echo "<br>";
echo "parametros: " . $params;
//print_r($arraUrl);
*/

?>




