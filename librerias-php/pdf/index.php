<?php
require_once '../vendor/autoload.php';

$pdf = new Spipu\Html2Pdf\Html2Pdf();

ob_start();
require_once 'pdf.html';
$html = ob_get_clean();

$pdf->writeHTML($html);
$pdf->output('pdf_generado.pdf');
