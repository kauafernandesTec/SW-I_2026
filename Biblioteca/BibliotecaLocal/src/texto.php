<?php

class texto
{
    public function maiusculo($texto)
    {
    return strtoupper($texto);
    }

    public function quantidade($texto)
    {
    return strlen($texto);
    }

    public function removerNaoNum($texto)
    {
    return preg_replace('/[^0-9]/', '', $texto);
    }
    

}