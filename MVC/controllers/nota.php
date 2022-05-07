<?php 
class NotaController {
    public function listar(){
        require_once 'models/nota.php';
        $nota = new Nota();
        $nota->setContenido('Hola mundo desde nota');
        $nota->setNombre('Nota 1');

        require_once 'views/nota/listar.php';
    }
    public function crear(){

    }
    public function borrar(){
        
    }
}
?>