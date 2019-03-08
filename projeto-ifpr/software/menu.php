<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Bootstrap  -->
    <title>Cadastro de Pedidos</title>
    <link rel="icon" type="image/jpg" href="images/home.jpg">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/forms_style.css">
    <link rel="stylesheet" href="css/btns_style.css">
    <script type="text/javascript" src="js/formmask.js"></script>
</head>
<body>
    <section id="navbar"></section>
    <section>
        <div class="container pedido">
            <form class="form__produtos" name="form__produtos" action="pedidoBD.php" method="post">
                <div class="fields__container">
                    <h4>Cadastro de Pedidos</h4>
                    <div class="form-group block__fields">
                        <label name="des_receita" class="fields__title">Descrição da receita</label>
                        <textarea class="form-control" rows="8" cols="80"></textarea>
                    </div>
                    <div class="form-group block__fields">
                        <label name="des_receita" class="fields__title">Tempo de preparo</label>
                        <div class="input-group">
                            <input class="form-control" name="des_receita" type="text">
                            <div class="input-group-append">
                              <span class="input-group-text">Horas</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group block__fields">
                        <label name="dtaCad" class="fields__title">Data de Cadastro</label>
                        <input class="form-control" type="date" required>
                    </div>
                    <button class="btn__submit" type="submit" name="button">Enviar</button>
                    <button class="btn__clean" type="reset" name="button">Limpar</button>
                </div>
                <?php if(isset($_GET['valida'])){
                  $valida = $_GET['valida'];
                  echo "<div class=\"alert alert-success\">
                            Pedido cadastrado com <strong>sucesso</strong>!
                            <button class=\"close\" type=\"button\" data-dismiss=\"alert\">&times;</button>
                        </div>";
                } ?>
            </form>
        </div>
    </section>
    <?php include "standard-htmls/footer.html"; ?>
</body>
</html>
<script>
    $("#navbar").load("standard-htmls/navigationbar.php");
</script>
