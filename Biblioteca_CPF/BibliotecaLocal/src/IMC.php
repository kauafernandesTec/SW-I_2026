
<?php 
class imc 
{
 public function CalcularIMC($peso, $altura) {

 


    if ($peso == "" || $altura == "") {
    }
   
    else {

    $p = $peso;
    $a = $altura;
    $imc = $p / ($a * $a);


        if ($imc <= 18.5) {
            return $imc ;
        }
        else if ($imc <= 24.9) {
            return $imc;
        }
        else if ($imc <= 29.9) {
             return $imc;
        }
        else if ($imc <= 39.9) {
             return $imc;
        }
        else {
             return $imc;
        }

    

    }

}

}
?>