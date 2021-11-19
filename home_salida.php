<?php

$name = $_POST['name'];
$lastName = $_POST['last_name'];
$age = $_POST['age'];

$i = "<p>";
$p = "Datos: ". $name. " - " . $lastName . " - ". $age;
$o = "</p>";

require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($i . $p . $o);
$html2pdf->output();
?>