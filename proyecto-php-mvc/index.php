<?php
require_once 'autoload.php';
require_once 'views/layout/header.html';
require_once 'views/layout/sidebar.html';

$controller = $_GET["c"] . 'Controller';
if (isset($controller) && class_exists($controller)) {
    $controlador = new $controller();
    if ($_GET['a'] && method_exists($controlador, $_GET["a"])) {
        $action = $_GET["a"];
        $controlador->$action();
    } else {
        echo 'El metodo no existe';
    }
} else {
    echo 'El controlador que buscas no existe';
}

require_once 'views/layout/footer.phtml';;