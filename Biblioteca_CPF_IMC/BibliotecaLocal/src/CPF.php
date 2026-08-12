<?php
class cpf
{
    public function ValidarCPF($cpf)
    {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if (strlen($cpf) != 11) {
            return false;                                                             
    }

    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    $soma = 0;

    for ($i = 0; $i < 9; $i++) {
        $soma += $cpf[$i] * (10 - $i);
    }

    $resto = $soma % 11;

    if ($resto < 2) {
        $digito1 = 0;
    } else {
        $digito1 = 11 - $resto;
    }

    if ($cpf[9] != $digito1) {
        return false;
    }

    $soma = 0;

    for ($i = 0; $i < 10; $i++) {
        $soma += $cpf[$i] * (11- $i);
    }

    $resto = $soma %11;

    if ($resto < 2) {
        $digito2 = 0;
    } else {
        $digito2 = 11 - $resto;
    }

    if ($cpf[10] != $digito2) {
        return false;
    }

    return true;

    }

}

?>