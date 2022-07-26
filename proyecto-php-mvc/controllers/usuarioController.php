<?php
require_once 'models/usuario.php';
class usuarioController
{
    public function index()
    {
        echo 'Controlador de usuario accion index';
    }

    public function registro()
    {
        require_once 'views/usuarios/registro.phtml';
    }
    public function save()
    {
        if ($_POST) {
            $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : false;
            $apellidos = isset($_POST["apellidos"]) ? $_POST["apellidos"] : false;
            $email = isset($_POST["email"]) ? $_POST["email"] : false;
            $password = isset($_POST["password"]) ? $_POST["password"] : false;

            if ($nombre && $apellidos && $email && $password) {
                $usuario = new usuario;

                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                $save = $usuario->save();
                if ($save) {
                    $_SESSION["register"] = "complete";
                } else {
                    $_SESSION["register"] = "failed";
                }
            }
        } else {
            $_SESSION["register"] = "failed";
        }
        header("Location:" . base_url . "usuario/registro");
    }
}
