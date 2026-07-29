<?php

require_once 'BibliotecaLocal/autoload.php';

$texto = new texto();
$calc = new calcular();

echo $calc->somar(10,20);
echo "<br><br>";

echo $texto->maiusculo("etec mcm");
echo "<br><br>";

echo $texto->quantidade("123678888");
echo "<br><br>";

echo $texto->removerNaoNum("Kauã, 16 Anos");
echo "<br><br>";