<?php
class Persona
{
    public $nombre, $apellidos, $altura, $edad;
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($name)
    {
        $this->nombre = $name;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function setApellidos($apellidos)
    {
        $this->nombre = $apellidos;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->nombre = $altura;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edad)
    {
        $this->nombre = $edad;
    }

    public function hablar()
    {
        return 'Estoy hablando';
    }
    public function caminar()
    {
        return 'Estoy caminando';
    }
}

class Informatico extends Persona
{
    public $lenguajes,$experienciaProgramador;

    public function __construct()
    {
        $this->lenguajes = ['HTML','CSS','JS','PHP'];
        $this->experienciaProgramador = '10 años';
    }

    public function sabeLenguajes(Array $lenguajes) {
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;
    }
    public function programar()
    {
        return 'Soy programador';
    }
    public function repararComputadora()
    {
        return 'Reparar ordenadores';
    }
}

class TecnicoRedes extends Informatico{
    public $testear,$experienciaRedes;
    
    public function __construct()
    {
        parent::__construct();
        $this->testear = 'Experto';
        $this->experienciaRedes = '5 años';
    }

    public function auditarRedes(){
        return 'Estoy auditando una red';
    }
    
}