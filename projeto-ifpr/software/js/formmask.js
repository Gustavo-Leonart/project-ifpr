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
            boolMask = ((mask.charAt(i) == "-") || (mask.charAt(i) == ".") || (mask.charAt(i) == "/"))
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
function mascaraPreco(preco){
    if(maskInteiro(preco) == false){
        event.returnValue = false;
    }
    return formataCampo(preco, '000.000,0', event);
}
function mascaraCelular(cel){
    if(maskInteiro(cel) == false){
        event.returnValue = false;
    }
    return formataCampo(cel, '(00) 00000-0000', event);
}
// validação das mascaras
// function validaCelular(cel){
//     exp = /\(\d{2}\)\ \d{5}\-\d{4}/
//     if(!exp.test(cel.value))
//         alert('Digite um Celular válido!');
// }
// function validaRg(rg){
//     exp = /\d{2}\.\d{3}\.\d{3}\-\d{1}/
//     if(!exp.test(rg.value))
//         alert('Digite um RG válido!');
// }
