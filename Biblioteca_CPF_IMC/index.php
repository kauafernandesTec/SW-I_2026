<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculos PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<header class="header">
<h1>Painel de Cálculos</h1>
</header>

<body>

    <div class="box">
        <?php
        require_once 'BibliotecaLocal/autoload.php';
        $imc = new imc();
        echo "IMC: " . $imc->CalcularIMC(30,1.70);
        echo "<br><br>";

        $cpf = new cpf();

        if ($cpf->ValidarCPF('487.486.838-09')) {
            echo "CPF válido";
        } else {
            echo "CPF inválido";
        }
        ?>
    </div>

</body>
</html>