<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste de Comandos PHP</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

    <h2>Split, Replace e Length</h2>

    <form method="POST">

        Digite uma frase:
        <input type="text" name="frase" required>

        Palavra para trocar:
        <input type="text" name="buscar" required>

        Nova palavra:
        <input type="text" name="trocar" required>

        <button type="submit">Enviar</button>

    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $frase = $_POST["frase"];
    $buscar = $_POST["buscar"];
    $trocar = $_POST["trocar"];

    $tamanho = strlen($frase);

    $separado = explode(" ", $frase);

    $novaFrase = str_replace($buscar, $trocar, $frase);

    echo "<div class='resultado'>";

    echo "<h3>Resultados</h3>";

    echo "Quantidade de caracteres: " . $tamanho . "<br><br>";

    echo "Palavras separadas:<br>";

    foreach ($separado as $palavra) {
        echo $palavra . "<br>";
    }

    echo "<br>";

    echo "Frase alterada:<br>";
    echo $novaFrase;

    echo "</div>";
}

?>

</div>

</body>
</html>