<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Bootstrap  -->
    <title>Cadastro de produtos</title>
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
            <form class="form__produtos" name="form__produtos" action="produtos.php" method="post">
                <div class="fields__container">
                    <div class="form-group block__fields">
                        <label name="desc" class="fields__title">Descrição</label>
                        <input class="form-control" type="text" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="marca" class="fields__title">Marca</label>
                        <input class="form-control" type="text" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="dtaVali" class="fields__title">Data de Validade</label>
                        <input class="form-control" type="date" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="dtaComp" class="fields__title">Data da compra</label>
                        <input class="form-control" type="date" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="preco" class="fields__title">Preço</label>
                        <input class="form-control" name="preco" type="text" onkeypress="mascaraPreco(.form__produtos.preco)">
                    </div>
                    <div class="form-group block__fields">
                        <label name="qtde" class="fields__title">Quantidade</label>
                        <input class="form-control" type="number" required>
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
    $("#navbar").load("standard-htmls/navigationbar.html");
</script>
