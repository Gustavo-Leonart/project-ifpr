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
    <section>
        <?php
        $conexao = new mysqli("localhost", "root", "", "banco");
        $db = @mysqli_select_db("banco", $conexao);

        $sql = "SELECT COUNT(*) AS total FROM pedido WHERE id_pedido >= 1";
        $result = @mysqli_query($sql, $conexao);
        mysqli_free_result($result);

        $sql = "SELECT * FROM pedido WHERE id_pedido >= 1";
        $result = @mysqli_query($sql, $conexao);
        while ($row = mysqli_fetch_array($result)) {
            $id_pedido     = $row['id_pedido'];
            $encomenda     = $row['des_receita'];
            $data_entrega  = $row['data_entrega'];
            $status_pedido = $row['status_pedido'];
        ?>
        <div class="container pedido">
            <form class="form__produtos" name="form__produtos" action="agendamento.php" method="post">
                <div class="fields__container">
                    <h4>Edição de Pedidos</h4>
                    <div class="form-group block__fields">
                        <label name="cliente" class="fields__title">Encomenda</label>
                        <?php
                        if (!isset($_SESSION)){ session_start();}
                        $conexao = new mysqli("localhost", "root", "", "banco");
                        $busca = mysqli_query($conexao, "select id_menu, des_receita from menu order by des_receita");
                        ?>
                        <select class = "form-control" name="cliente"  required>
                        <?php while($ver = mysqli_fetch_row($busca))  { ?>
                        <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                    <div class="form-group block__fields">
                        <label name="dtaEnt" class="fields__title">Data da Entrega</label>
                        <input class="form-control" type="date" value="<?php echo $row["data_entrega"]; ?>" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="qtde" class="fields__title">Status do Pedido</label>
                        <select class="form-control" value="<?php echo $row["status_pedido"]; ?>">
                            <option value="0">Aguardando entrega</option>
                            <option value="1">Pedido entregue</option>
                            <option value="2">Pedido em andamento</option>
                        </select>
                    </div>
                    <button class="btn__submit" type="submit" name="button">Salvar</button>
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
