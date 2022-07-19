<?php
require_once '../vendor/autoload.php';

$db = new mysqli("localhost", "root", "", "notas_master");
$db->query("set names 'utf8'");

$query = $db->query('SELECT * FROM notas');
$num_rows = $query->num_rows;

// Inicia paginacion
$pg = new Zebra_Pagination();
$pg->records($num_rows);
$numero_elementos_pg = 2;

$pg->records_per_page($numero_elementos_pg);
$page = $pg->get_page();

$start = (($page - 1) * $numero_elementos_pg);
$notas = $db->query("SELECT * FROM notas limit {$start}, {$numero_elementos_pg}");

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css">';
while($nota = $notas->fetch_object()){
    echo 
    "
    <h1>{$nota->titulo}</h1>
    <h3>{$nota->descripcion}</h3><hr>
    ";
}

$pg->render();