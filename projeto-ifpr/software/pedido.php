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
            <form class="form__produtos" name="form__produtos" action="produtos.php" method="post">
                <div class="fields__container">
                    <h4>Cadastro de Pedidos</h4>
                    <div class="form-group block__fields">
                        <label name="cliente" class="fields__title">Cliente</label>
                        <?php
                        if (!isset($_SESSION)){ session_start();}
                        $conexao = new mysqli("localhost", "root", "", "banco");
                        $busca = mysqli_query($conexao, "select id_cliente, nome from cliente order by nome");
                        ?>
                        <select class = "form-control" name="cliente"  required>
                        <?php while($ver = mysqli_fetch_row($busca))  { ?>
                        <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                    <div class="form-group block__fields">
                        <label name="menu" class="fields__title">Menu</label>
                        <?php
                        if (!isset($_SESSION)){ session_start();}
                        $conexao = new mysqli("localhost", "root", "", "banco");
                        $busca = mysqli_query($conexao, "select id_menu, des_receita from menu order by des_receita");
                        ?>
                        <select class = "form-control" name="menu"  required>
                        <?php while($ver = mysqli_fetch_row($busca))  { ?>
                        <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                    <div class="form-group block__fields">
                        <label name="dtaCad" class="fields__title">Data de Cadastro</label>
                        <input class="form-control" type="date" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="dtaEnt" class="fields__title">Data da Entrega</label>
                        <input class="form-control" type="date" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="valor" class="fields__title">Valor</label>
                        <input class="form-control" name="valor" type="text" onkeypress="mascaraPreco(.form__produtos.preco)">
                    </div>
                    <div class="form-group block__fields">
                        <label name="qtde" class="fields__title">Status do Pedido</label>
                        <select class="form-control" name="">
                            <option value="0">Aguardando entrega</option>
                            <option value="1">Pedido entregue</option>
                        </select>
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
