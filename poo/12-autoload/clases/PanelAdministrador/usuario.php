<?php 
namespace PanelAdministrador;

class Usuario {
    public $nombre, $email;

    public function __construct()
    {
        $this->nombre = 'Antonio Pineda';
        $this->email = 'antonio@gmail.com';
    }
}

?>