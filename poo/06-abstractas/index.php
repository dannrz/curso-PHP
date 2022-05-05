<?php
abstract class Ordernador
{
    public $encendido;

    abstract public function encender();

    public function apagar()
    {
        $this->encendido = false;
    }
}


class PCAsus extends Ordernador{
    public $sofware;

    public function iniciarSoftware() {
        $this->software = true;
    }
    public function encender()
    {
        $this->encendido = true;
    }
}


$compu = new PCAsus();
$compu->iniciarSoftware();
$compu->encender();
$compu->apagar();

var_dump($compu);