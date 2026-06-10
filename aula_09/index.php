<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Validador CPF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<form method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome"><br><br>

    <label>CPF:</label><br>
    <input type="text" name="cpf"><br><br>

    <button type="submit">Validar</button>

    <?php

if(isset($_POST['cpf'])){

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    $digitos = str_split($cpf);


    $soma1 =
        ($digitos[0] * 10) +
        ($digitos[1] * 9) +
        ($digitos[2] * 8) +
        ($digitos[3] * 7) +
        ($digitos[4] * 6) +
        ($digitos[5] * 5) +
        ($digitos[6] * 4) +
        ($digitos[7] * 3) +
        ($digitos[8] * 2);

    $resto1 = $soma1 % 11;

    if($resto1 < 2){
        $validador1 = 0;
    }else{
        $validador1 = 11 - $resto1;
    }
    $soma2 =
        ($digitos[0] * 11) +
        ($digitos[1] * 10) +
        ($digitos[2] * 9) +
        ($digitos[3] * 8) +
        ($digitos[4] * 7) +
        ($digitos[5] * 6) +
        ($digitos[6] * 5) +
        ($digitos[7] * 4) +
        ($digitos[8] * 3) +
        ($digitos[9] * 2);

    $resto2 = $soma2 % 11;

    if($resto2 < 2){
        $validador2 = 0;
    }else{
        $validador2 = 11 - $resto2;
    }

    if($validador1 == $digitos[9] && $validador2 == $digitos[10]){
        echo "<h2>$nome, CPF válido!</h2>";
    }else{
        echo "<h2>$nome, CPF inválido!</h2>";
    }
}

?>

</form>





</body>
</html>