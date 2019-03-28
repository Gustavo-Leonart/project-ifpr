$(document).ready(function() {
    function limpa_cep() {
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
    }
    $("#cep").blur(function() {
        var cep = $(this).val().replace(/\D/g, '');

        if (cep != "") {
            var validacep = /^[0-9]{8}$/;

            if(validacep.test(cep)) {
                $("#rua").val("Validando...");
                $("#bairro").val("Validando...");
                $("#cidade").val("Validando...");
                $("#uf").val("Validando...");
                //Consulta o webservice do viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                    }
                    else {
                        limpa_cep();
                        alert("CEP não encontrado.");
                    }
                });
            }
            else {
                limpa_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_cep();
        }
    });
});
