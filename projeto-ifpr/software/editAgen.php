<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Bootstrap  -->
    <title>Edição de agendamentos</title>
    <link rel="icon" type="image/jpg" href="images/home.jpg">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/btns_style.css">
    <link rel="stylesheet" href="css/forms_style.css">
</head>
<body>
    <section id="navbar"></section>
    <section style="height:100vh;">
        <?php
            include "conexao.php";
            $id = $_GET["id_cliente"];
            $sql = mysqli_query($conexao, "SELECT m.id_menu, m.nome_receita,
                DATE_FORMAT(p.data_entrega, '%d/%m/%Y'), p.status_pedido, sp.desc_status
            FROM pedido p
            JOIN menu m ON p.id_menu = m.id_menu
            JOIN status_pedido sp ON p.status_pedido = sp.id_status_pedido
            WHERE id_cliente = $id");

            while ($edit = mysqli_fetch_row($sql)) {


        ?>
        <div class="container pedido">
            <form class="form__produtos" name="form__produtos" action="agendamento.php" method="post">
                <div class="fields__container">
                    <h4>Edição de Pedidos</h4>
                    <div class="form-group block__fields">
                        <label name="nome_receita" class="fields__title">Encomenda</label>
                        <?php
                        if (!isset($_SESSION)){ session_start();}
                        $conexao = new mysqli("localhost", "root", "", "banco");
                        $busca = mysqli_query($conexao, "select id_menu, nome_receita from menu order by nome_receita");
                        ?>
                        <select class = "form-control" name="nome_receita" required>
                            <option value="<?php echo $edit[0]; ?>"><?php echo $edit[1]; ?></option>
                            <?php while($ver = mysqli_fetch_row($busca))  { ?>
                            <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group block__fields">
                        <label name="dtaEnt" class="fields__title">Data da Entrega</label>
                        <input class="form-control" type="date" value="<?php echo $edit[2]; ?>" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="qtde" class="fields__title">Status do Pedido</label>
                        <select class="form-control" value="">
                            <option value="<?php echo $edit[3]; ?>"><?php echo $edit[4]; ?></option>
                            <option value="1">Aguardando entrega</option>
                            <option value="2">Pedido entregue</option>
                            <option value="3">Em andamento</option>
                            <option value="4">Cancelado</option>
                        </select>
                    </div>
                    <button class="btn__submit" type="submit" name="button">Salvar</button>
                    <button class="btn__submit" type="reset" name="button">Limpar</button>
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
        <?php } ?>
    </section>
    <?php include "standard-htmls/footer.html"; ?>
</body>
</html>
<script>
    $("#navbar").load("standard-htmls/navigationbar.php");
</script>
