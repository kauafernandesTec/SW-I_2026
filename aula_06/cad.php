<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h2>Resultado do Processamento</h2>
    </header>
    <main>
        <?php
        $_nome = $_POST["nome"];
        $_sobrenome = $_POST["sobrenome"];
        $_n1 = $_POST["n1"];
        $_n2 = $_POST["n2"];
        $_n3 = $_POST["n3"];
        $_media= (($_n1+$_n2+$_n3)/3);
        echo "<p>É um prazer te conhecer $_nome $_sobrenome</p> <br> <p> sua média é: $_media </p>";
        ?>
    </main>
</body>
</html>