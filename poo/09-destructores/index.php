<?php

class Usuario{
    public $nombre, $email;

    public function __construct()
    {
        echo 'Instancia creada';
    }
    public function __destruct()
    {
        echo 'Destruyendo el objeto';
    }
}

$user = new Usuario();

for($i = 0; $i <= 100; $i++){
    echo $i . '<br>';
}

?>