function processarValidacao() {
    const valorInput = document.getElementById('cpf').value;
    const ehValido = validarCPF(valorInput);

    if (ehValido) {
        alert("O CPF" + valorInput + "é VAlido");
    } else {
        alert("O CPF" + valorInput + "é INVALIDO");
    }
}

function soma() {
    const valorInput = document.getElementById('cpf').value;
    const valorNome = document.getElementById('nome').value;
    const valorEmail = document.getElementById('email').value;
    const valorEndereco = document.getElementById('endereco').value;
    alert("Olá " +valorNome + " Seu cpf é: "+valorInput + " , seu email é: "+valorEmail + " e seu endereço é: "+valorEndereco);
}

function validarCPF (cpf) {
    cpf = cpf.replace(/[^\d]+/g, '');
    if (cpf.length !== 11 || !!cpf.match(/(\d)\1{10}/)) {
        return false;
    }

    const digitos = cpf.split('').map(el => +el);
}