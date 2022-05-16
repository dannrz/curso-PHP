<?php 
class NotaController {
    public function listar(){
        require_once 'models/nota.php';
        $nota = new Nota();
        $nota->setNombre('Nota 1');
        $nota->setContenido('Hola mundo desde nota');

        $notas = $nota->conseguirTodos('notas');

        require_once 'views/nota/listar.phtml';
    }
    public function crear(){

    }
    public function borrar(){
        
    }
}
?>