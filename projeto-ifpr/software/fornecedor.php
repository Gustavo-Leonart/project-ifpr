<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Bootstrap  -->
    <title>Cadastro de Fornecedores</title>
    <link rel="icon" type="image/jpg" href="images/home.jpg">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/produtos.css">
    <script type="text/javascript" src="js/formmask.js"></script>
</head>
<body>
    <section id="navbar"></section>
    <section>
        <div class="container produtos">
            <form class="form__produtos" name="form__produtos" action="fornecedor.php">
                <div class="fields__container">
                    <h4 style="font-weight:500;text-align:center;margin-bottom:32px;color:rgba(0,0,0,.54);">Cadastro de Fornecedores</h4>
                    <div class="form-group block__fields">
                        <label name="nome" class="fields__title">Nome</label>
                        <input class="form-control" type="text" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="dtanasc" class="fields__title">Data de Nascimento</label>
                        <input class="form-control" type="text" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="email" class="fields__title">Email</label>
                        <input class="form-control" type="email" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="cnpj" class="fields__title">CNPJ</label>
                        <input class="form-control" type="text" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="cep" class="fields__title">CEP</label>
                        <input class="form-control" type="text" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="comp" class="fields__title">Complemento</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group block__fields">
                        <label name="telefone" class="fields__title">Telefone</label>
                        <input class="form-control" type="text" required>
                    </div>
                    <button class="btn__submit" type="submit" name="button">Enviar</button>
                    <button class="btn__clean" type="reset" name="button">Limpar</button>
                </div>
            </form>
            <!-- <div class="alert alert-success">
                  Fornecedor cadastrado com <strong>Sucesso</strong>!
                  <button class="close" type="button" data-dismiss="alert">&times;</button>
            </div> -->
    </section>
    <?php include "standard-htmls/footer.html"; ?>
</body>
</html>
<script>
    $("#navbar").load("standard-htmls/navigationbar.html");
</script>
