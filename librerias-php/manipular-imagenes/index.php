<?php
require_once '../vendor/autoload.php';

$foto = "venom.jpg";
$saveTo = "fotomodificada.jpg";

$thumb = new PHPThumb\GD($foto);
$thumb->resize(50, 50);
$thumb->show();
$thumb->save($saveTo);