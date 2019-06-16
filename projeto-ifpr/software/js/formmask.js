// Validação de número inteiro
function maskInteiro(){
    if(event.keyCode < 48 || event.keyCode > 57){
        event.returnValue = false;
        return false;
    }
    return true;
}
// Formatar genericamente os campos
function formataCampo(campo, mask, evento){
    var boolMask;
    var digitado = evento.keyCode;
    exp = /\-|\.|\/|\(|\)| /g
    onlyNumbers = campo.value.toString().replace(exp, "");

    var posicaoCampo = 0;
    var novoValor = "";
    var tamanhoMask = onlyNumbers.length;

    if (digitado != 8) {
        for(i = 0; i <= tamanhoMask; i++){
            boolMask = ((mask.charAt(i) == "-") || (mask.charAt(i) == ".") || (mask.charAt(i) == "/") || (mask.charAt(i) == ","))
            boolMask = boolMask || ((mask.charAt(i) == "(") || (mask.charAt(i) == ")") || (mask.charAt(i) == " "))
            if (boolMask) {
                novoValor += mask.charAt(i);
                tamanhoMask++;
            }else{
                novoValor += onlyNumbers.charAt(posicaoCampo);
                posicaoCampo++;
            }
        }
        campo.value = novoValor;
        return true;
    }else{
        return true;
    }
}
// Funções de mascaramento
function mascaraRG(rg){
    if(maskInteiro(rg) == false){
        event.returnValue = false;
    }
    return formataCampo(rg, '00.000.000-0', event);
}
function mascaraCPF(cpf){
    if(maskInteiro(cpf) == false){
        event.returnValue = false;
    }
    return formataCampo(cpf, '000.000.000-00', event);
}
function mascaraCEP(cep){
    if(maskInteiro(cep) == false){
        event.returnValue = false;
    }
    return formataCampo(cep, '00.000-000', event);
}
function mascaraCelular(cel){
    if(maskInteiro(cel) == false){
        event.returnValue = false;
    }
    return formataCampo(cel, '(00) 00000-0000', event);
}
function mascaraCNPJ(cnpj){
    if(maskInteiro(cnpj) == false){
        event.returnValue = false;
    }
    return formataCampo(cnpj, '00.000.000/0000-00', event);
}
function mascaraData(data){
    if(maskInteiro(data) == false){
        event.returnValue = false;
    }
    return formataCampo(data, '00/00/0000', event);
}

//validação de cpf
function VerificaCPF(c){
    var i;
    s = c;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;

    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }
    if (d1 == 0){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }

    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
  //  if(d1 == "00000000000" || d1 == "11111111111" || d1 == "22222222222" || d1 == "33333333333" || d1 == "44444444444"
  //  || d1 == "55555555555" || d1 == "66666666666" || d1 == "77777777777" || d1 == "88888888888" || d1 == "99999999999"){
  //    alert("CPF Inválido")
  //    v = true;
  //    return false;
  //  }
    if (!v) {
        alert(c + " : CPF Válido")
    }
}

//validação de CNPJ
function validarCNPJ(cnpj) {

    cnpj = cnpj.replace(/[^\d]+/g,'');

    if(cnpj == '') return false;

    if (cnpj.length != 14){
        alert("CNPJ Inválido")
        return false;
    }
    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" ||
        cnpj == "11111111111111" ||
        cnpj == "22222222222222" ||
        cnpj == "33333333333333" ||
        cnpj == "44444444444444" ||
        cnpj == "55555555555555" ||
        cnpj == "66666666666666" ||
        cnpj == "77777777777777" ||
        cnpj == "88888888888888" ||
        cnpj == "99999999999999"){
        alert("CNPJ Inválido")
        return false;
    }

    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0)){
      alert("CNPJ Inválido")
        return false;
    }
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1)){
          alert("CNPJ Inválido")
          return false;
    }

    return true;

}
