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
            <form class="form__produtos" name="form__produtos" action="pedidoBD.php">
                <div class="fields__container">
                    <?php if(isset($_GET['valida'])){
                      $valida = $_GET['valida'];
                      echo "<div class=\"alert alert-success\">
                                Pedido cadastrado com <strong>sucesso</strong>!
                                <button class=\"close\" type=\"button\" data-dismiss=\"alert\">&times;</button>
                            </div>";
                    } ?>
                    <h4>Cadastro de Pedidos</h4>
                    <div class="form-group block__fields">
                        <label name="cliente" class="fields__title">Cliente</label>
                        <?php
                        if (!isset($_SESSION)){ session_start();}
                        $conexao = new mysqli("localhost", "root", "", "banco");
                        $busca = mysqli_query($conexao, "select id_cliente, nome from cliente order by nome");
                        ?>
                        <select class = "form-control" name="id_cliente"  required>
                        <?php while($ver = mysqli_fetch_row($busca))  { ?>
                        <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                    <div class="form-group block__fields">
                        <label name="cliente" class="fields__title">Usuário que cadastrou</label>
                        <?php
                        if (!isset($_SESSION)){ session_start();}
                        $conexao = new mysqli("localhost", "root", "", "banco");
                        $busca = mysqli_query($conexao, "select id_usuario, nome from usuario order by nome");
                        ?>
                        <select class = "form-control" name="id_usuario"  >
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
                        $busca = mysqli_query($conexao, "select id_menu, nome_receita from menu order by nome_receita");
                        ?>
                        <select class = "form-control" name="id_menu"  required>
                        <?php while($ver = mysqli_fetch_row($busca))  { ?>
                        <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                    <div class="form-group form-inline">
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="data_cadastro">Data de Cadastro</label>
                            </div>
                            <input name="data_cadastro" class="form-control" type="date" required>
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="data_entrega">Data de Entrega</label>
                            </div>
                            <input name="data_entrega" class="form-control" type="date" required>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label for="valor">Valor</label>
                            </div>
                            <input class="form-control" name="valor" type="text" maxlength="8">
                        </div>
                    </div>
                    <div class="form-group block__fields">
                        <label name="status_pedido" class="fields__title">Status do Pedido</label>
                        <select class="form-control" name="status_pedido">
                            <option value="0">Aguardando entrega</option>
                            <option value="1">Pedido entregue</option>
                            <option value="2">Em andamento</option>
                            <option value="3">Cancelado</option>
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
