<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Bootstrap  -->
    <title>Cadastro de Clientes</title>
    <link rel="icon" type="image/jpg" href="images/home.jpg">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/btns_style.css">
    <link rel="stylesheet" href="css/forms_style.css">
    <!-- mascaramento do fromulario -->
    <script type="text/javascript" src="js/formmask.js"></script>
    <!-- verificação de cep e preenchimento -->
    <script type="text/javascript" src="js/preechimentoCep.js"></script>
</head>
<body>
    <?php
      if(!isset($_SESSION)) session_start();
      if($_SESSION['nome'] == null){
          $valida = "Você precisa estar logado";
          header("Location:sair.php?valida=$valida");
      }
    ?>
    <section id="navbar"></section>
    <section>
        <div class="container cliente">
            <form class="form__produtos" name="form__produtos" action="clienteBD.php">
                <div class="fields__container">
                    <?php if(isset($_GET['valida'])){
                      $valida = $_GET['valida'];
                      echo "<div class=\"alert alert-success\">
                                $valida!
                                <button class=\"close\" type=\"button\" data-dismiss=\"alert\">&times;</button>
                            </div>";
                    } ?>
                    <h4>Cadastro de Clientes</h4>
                    <div class="form-group">
                        <label name="nome" class="fields__title">Nome Completo</label>
                        <input name="nome" class="form-control" type="text" required>
                    </div>
                    <div class="form-group">
                        <label name="email" class="fields__title">Email</label>
                        <input name="email" class="form-control" type="email" required>
                    </div>
                    <div class="form-group">
                        <label name="telefone" class="fields__title">Telefone</label>
                        <input name="telefone"class="form-control" type="text" required  maxlength="15" onkeypress="mascaraCelular(form__produtos.telefone)">
                    </div>
                    <div class="form-group form-inline">
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="rg">RG</label>
                            </div>
                            <input class="form-control" name="rg" type="text" required maxlength="12" onkeypress="mascaraRG(form__produtos.rg)">
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="cpf">CPF</label>
                            </div>
                            <input class="form-control " name="cpf" type="text" required  maxlength="11" onchange="VerificaCPF(this.value)" onblur="mascaraCPF(form__produtos.cpf);" >
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="dataNasc">Data de Nascimento</label>
                            </div>
                            <input name="dataNasc" class="form-control" type="date" required>
                        </div>
                    </div>
                    <div class="form-group form-inline">
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="cep">CEP</label>
                            </div>
                            <input class="form-control" name="cep" type="text" id="cep" required  maxlength="10" onkeypress="mascaraCEP(form__produtos.cep);" >
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="Cidade">Cidade</label>
                            </div>
                            <input class="form-control" id="cidade" name="cidade" required  maxlength="30">
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="Rua">Rua</label>
                            </div>
                            <input class="form-control" name="rua" type="text" id="rua">
                        </div>
                    </div>
                    <div class="form-group form-inline">
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="uf">Estado</label>
                            </div>
                            <input class="form-control" name="uf" type="text" id="uf">
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="bairro">Bairro</label>
                            </div>
                            <input class="form-control" name="bairro" type="text" id="bairro">
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="num_casa">Número</label>
                            </div>
                            <input name="num_casa" class="form-control" type="text" maxlength="5">
                        </div>
                    </div>
                    <div class="form-group form-inline">
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="complemento">Complemento</label>
                            </div>
                            <input name="complemento" class="form-control" type="text">
                        </div>
                    </div>
                    <button class="btn__submit" type="submit" name="button">Enviar</button>
                    <button class="btn__clean" type="reset" name="button">Limpar</button>
                </div>
            </form>
        </div>
    </section>
    <?php include "standard-htmls/footer.html"; ?>
</body>
</html>
<script>
    $("#navbar").load("standard-htmls/navigationbar.php");
</script>
