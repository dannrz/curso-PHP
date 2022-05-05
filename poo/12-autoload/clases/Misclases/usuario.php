<?php 
namespace MisClases;

class Usuario {
    public $nombre, $email;

    public function __construct()
    {
        $this->nombre = 'Daniel Rodriguez';
        $this->email = 'daniel@gmail.com';
    }
}

?>