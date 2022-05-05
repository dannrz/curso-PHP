<?php 
// Clase es el elemento principal de POO
// Molde para crear objetos con caracteristicas similares
class Coche {
    // Atributos o propiedades (variables), pueden ser publicos o privados
    public $color = 'rojo', $modelo = 'enzo', $velocidad = 300, $marca = 'ferrari', $caballaje = 500, $plazas = 2;
    // Metodos (en PE es una función) son las acciones que puede hacer la clase
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function acelerar(){
        $this->velocidad++;
    }
    public function frenar(){
        $this->velocidad--;
    }
    public function getVelocidad(){
        return $this->velocidad;
    }
    public function setModelo($model){
        $this->modelo = $model;
    }

}
// -----------------------------------------------------------------------------------------

// Crear objeto
$coche = new Coche;
// Usar metodos
$coche->getVelocidad();
$coche->setColor('Amarillo');
echo 'El color del coche es ' . $coche->getColor() . '<br>';

for($i = 1; $i <= 4; $i++){
    $coche->acelerar();
}
$coche->frenar();

echo 'La velocidad del coche es de: ' . $coche->getVelocidad() . '<br>';

$coche2 = new Coche;
$coche2->setColor('Azul');
$coche2->setModelo('Gallardo');
echo $coche->getColor() . '<br>';
echo $coche2->getColor() . '<br>';

var_dump($coche);
var_dump($coche2);
