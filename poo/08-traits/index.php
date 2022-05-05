<?php

trait Utilidades{
    public function mostrarNombre(){
        echo '<h1>El nombre es: '. $this->nombre . '</h1>';
    }
}

class Coche
{
    public $nombre, $marca;
    public function __construct()
    {
        $this->nombre = 'Enzo Ferrari';
    }
    use Utilidades;
}

class Persona
{
    public $nombre, $apellidos;
    public function __construct()
    {
        $this->nombre = 'Daniel Rodriguez';
    }
    use Utilidades;
}

class Videojuego
{
    public $nombre, $anio;
    public function __construct()
    {
        $this->nombre = 'Halo Wars';
    }
    use Utilidades;
}

$coche = new Coche();
$persona = new Persona();
$videojuego = new Videojuego();

$coche->mostrarNombre();
$persona->mostrarNombre();
$videojuego->mostrarNombre();
?>