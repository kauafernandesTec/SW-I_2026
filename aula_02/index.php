<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <h1>Aula 02 - PHP e Html</h1>
    <?php
    $nome = "Kauã";
    $a = 10;
    $b = 5;
    $soma = $a + $b;
    echo "<p>Bem vindo $nome</p>";
    echo "<p>Bem vindo " . $nome . "</p>";
    echo "<p style = 'color : red;'>A soma é: $soma </p>";

    ?>
</body>
</html>