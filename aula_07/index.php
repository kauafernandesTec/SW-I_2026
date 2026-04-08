<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Salário</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado do Cálculo</h1>
<main>
    <?php
    $_nome = $_POST["nome"];
    $_salario = $_POST["salario"];
    $_faltas = $_POST["faltas"];
    
    if ($_salario <= 1621.00) {
        $_inss = $_salario * 0.075;
    } elseif ($_salario <= 2902.84) {
        $_inss = $_salario * 0.09;
    } elseif ($_salario <= 4354.27) {
        $_inss = $_salario * 0.12;
    } elseif ($_salario <= 8475.55) {
        $_inss = $_salario * 0.14;
    } else {
        $_inss = 8475.55 * 0.14;
    }

    $_desconto_faltas = ($_salario / 30) * $_faltas;
    
    $_vale_transporte = $_salario * 0.06;
    
    $_total_descontos = $_inss + $_desconto_faltas + $_vale_transporte;
    
    $_salario_liquido = $_salario - $_total_descontos;

    // Limita casa decimal em php
    $_salario_liquido = round($_salario_liquido, 2);
    
    echo "<p>$_nome, o Total do seu salário após os descontos é R$ $_salario_liquido</p>";
    ?>
</main>
</body>
</html>