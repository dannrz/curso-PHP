<?php 
class database {
    public static function conectar(){
        $conexion = new mysqli("127.0.0.1","root", "", "notas_master");
        $conexion->query("set names 'utf8'");

        return $conexion;
    }
}
?>