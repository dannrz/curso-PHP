<?php 

try{
    if(isset($_GET["id"])){
        echo '<h1>El parametro es: ' . $_GET["id"] . '</h1>';
    } else {
        throw new Exception('Faltan parametros');
    }
    throw new Exception('Hay un error');
} catch(Exception $e){
    echo 'Ha habido un error: ' . $e->getMessage();
}

?>