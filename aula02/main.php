<?php 

require_once('./Caneta.php');

$caneta = new Caneta;
$caneta->modelo = 'Faber Castel';
$caneta->cor = 'Azul';
$caneta->ponta = 1.5;

print_r($caneta);

$caneta->destampar();
$caneta->rabiscar();

//print_r($caneta);
?>