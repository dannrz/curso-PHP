<?php 
class NotaController {
    public function listar(){
        require_once 'models/nota.php';
        $nota = new Nota();
        /* $nota->setNombre('Nota 1');
        $nota->setContenido('Hola mundo desde nota'); */

        $notas = $nota->conseguirTodos('notas');

        require_once 'views/nota/listar.phtml';
    }
    public function crear(){
        require_once 'models/nota.php';
        $nota = new Nota();
        $nota->setUserId(1);
        $nota->setTitle('Nota desde PHP MVC');
        $nota->setContent('Contenido de la nota');

        $nota->saveNote();
        header("Location: ?controller=Nota&action=listar");
    }
    public function borrar(){
        
    }
}
?>