<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculos PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<?php
require_once 'BibliotecaLocal/autoload.php';
$imc = new imc();
echo $imc->CalcularIMC(30,1.70);
echo "<br><br>";

?>
 
</body>
</html>