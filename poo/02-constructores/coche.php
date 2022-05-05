<?php
class Coche
{
    // Atributos o propiedades (variables), pueden ser publicos o privados
    public $color, $velocidad, $caballaje, $plazas; //Se puede acceder a el desde cualquier lugar, desde clases heredadas o fuera de la clase
    protected $marca; //Podemos acceder desde la clase que los define y desde clases que hereden this clase
    private $modelo; // solo se puede acceder desde esta clase.
    // Metodos (en PE es una función) son las acciones que puede hacer la clase

    public function __construct($color, $mark, $model, $speed, $horses, $places)
    {
        // Una buena practica es dar valor a los atributos de la clase en el constructor
        $this->color = $color;
        $this->marca = $mark;
        $this->modelo = $model;
        $this->velocidad = $speed;
        $this->caballaje = $horses;
        $this->plazas = $places;
    }

    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function acelerar()
    {
        $this->velocidad++;
    }
    public function frenar()
    {
        $this->velocidad--;
    }
    public function getVelocidad()
    {
        return $this->velocidad;
    }
    public function setModelo($model)
    {
        $this->modelo = $model;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }

    public function mostrarInfo(Coche $objeto)
    {
        if (is_object($objeto)) {
            $informacion = '<h1>Información del coche</h1>';
            $informacion .= 'Modelo: ' . $objeto->modelo . '<br>';
            $informacion .= 'Color: ' . $objeto->color . '<br>';
            $informacion .= 'Velocidad: ' . $objeto->velocidad . '<br>';
            return $informacion;
        } else {
            return 'El parametro no es un objeto';
        }
    }
}
