<?php 
class database {
    public static function conectar(){
        $conexion = new mysqli("192.168.68.20","tesseract", "HexOmeg@96", "notas_master");
        $conexion->query("set names 'utf8'");

        return $conexion;
    }
}
?>