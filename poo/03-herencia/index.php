<?php 
require 'clases.php';

$yo = new Persona;
// var_dump($yo);

$yoDeNuevo = new Informatico;
$yoDeNuevo->setAltura(1.9);
print_r($yoDeNuevo->sabeLenguajes(['HTML,CSS,PHP,JS']));
// var_dump($yoDeNuevo);


$tecnico = new TecnicoRedes;
var_dump($tecnico);
?>