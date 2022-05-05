<?php 
require 'coche.php';
$coche = new Coche ('Lila', 'Ford', 'Mustang', 350, 500, 4);
$coche->color = 'rosa';
$coche->setMarca('Audi');

echo $coche->mostrarInfo($coche);



// var_dump($coche);
?>