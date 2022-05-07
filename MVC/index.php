<h1>Bienvenido</h1>
<?php
require_once 'controllers/usuario.php';

$controller = $_GET["controller"] . 'Controller';
if (isset($controller) && class_exists($controller)) {
    $controlador = new $controller();
    if ($_GET['action'] && method_exists($controlador, $_GET["action"])) {
        $action = $_GET["action"];
        $controlador->$action();
    } else {
        echo 'El metodo no existe';
    }
} else {
    echo 'El controlador que buscas no existe';
}
/* $controlador->mostrarTodos();
$controlador->crear(); */



?>