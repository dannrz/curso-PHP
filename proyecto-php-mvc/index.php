<?php
session_start();

require_once 'autoload.php';
require_once 'config/params.php';
require_once 'helpers/utils.php';
require_once 'config/db.php';
require_once 'views/layout/header.phtml';
require_once 'views/layout/sidebar.html';


function show_error()
{
    $error = new errorController();
    $error->index();
}

if (!isset($_GET["c"]) && !isset($_GET["a"])) {
    $controller = controller_default;
} else {
    $controller = $_GET["c"] . 'Controller';
}
if (isset($controller) && class_exists($controller)) {
    $controlador = new $controller();
    if (!isset($_GET["c"]) && !isset($_GET["a"])) {
        $action = action_default;
        $controlador->$action();
    } elseif ($_GET['a'] && method_exists($controlador, $_GET["a"])) {
        $action = $_GET["a"];
        $controlador->$action();
    } else {
        show_error();
    }
} else {
    show_error();
}

require_once 'views/layout/footer.phtml';;
