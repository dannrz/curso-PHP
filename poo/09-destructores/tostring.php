<?php

class Usuario{
    private $nombre, $email;

    public function __construct()
    {
        $this->nombre = 'Daniel Rodriguez';
        $this->email = 'rozd.21d97@gmail.com';
    }
    public function getNombre () {
        return $this->nombre;
    }
    public function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    public function getEmail () {
        return $this->email;
    }
    public function setEmail ($email) {
        $this->email = $email;
    }

    public function __toString()
    {
        return "Hola " . $this->nombre . "estas registrado con " . $this->email . '<br>';
    }
    public function __destruct()
    {
        echo 'Destruyendo el objeto';
    }
}

$user = new Usuario();
echo $user->getEmail() . '<br>';
echo $user;
?>