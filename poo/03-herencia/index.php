<?php 
require 'clases.php';

$yo = new Persona;
// var_dump($yo);

$yoMasChido = new Informatico;
$yoMasChido->setAltura(1.9);
print_r($yoMasChido->sabeLenguajes(['HTML,CSS,PHP,JS']));
// var_dump($yoMasChido);


$tecnico = new TecnicoRedes;
var_dump($tecnico);
?>