<?php 
require 'autoload.php';

use Misclases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal {
    public $usuario, $categoria, $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
    public function info(){
        echo __METHOD__;
    }
}
$usuario = new UsuarioAdmin();
$main = new Principal();

var_dump($main->usuario);
var_dump($main->categoria);
var_dump($main->entrada);

$main->info();

/* var_dump($usuario); */


/* Comprobar la existencia de una clase */

/* $clase = class_exists('Misclases\Usuario');
if($clase){
    echo '<h1>La clase existe</h1>';
} else {
    echo '<h1>La clase no existe</h1>';
} */
?>