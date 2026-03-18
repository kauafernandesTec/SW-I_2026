function CalcularIMC() {

    var Peso = document.getElementById("peso").value;
    var Altura = document.getElementById("altura").value;
  
    var p = parseFloat(Peso);
    var a = parseFloat(Altura);
    var imc = p / (a * a);

     // deixar vazio, pois se não a obesidade grave aparece se o usuario calcular sem preencher o peso e altura, além de ficar NaN

    if (Peso == "" || Altura == "") {
    }
   
    else {


        if (imc <= 18.5) {
            document.getElementById("IMC").innerText = "IMC: " + imc.toFixed(2) + " Magreza";
        }
        else if (imc <= 24.9) {
            document.getElementById("IMC").innerText = "IMC: " + imc.toFixed(2) + " Normal";
        }
        else if (imc <= 29.9) {
            document.getElementById("IMC").innerText = "IMC: " + imc.toFixed(2) + " Sobrepeso";
        }
        else if (imc <= 39.9) {
            document.getElementById("IMC").innerText = "IMC: " + imc.toFixed(2) + " Obesidade";
        }
        else {
            document.getElementById("IMC").innerText = "IMC: " + imc.toFixed(2) + " Obesidade Grave";
        }

         // toFixed(2) limita as casas decimais

    }

}