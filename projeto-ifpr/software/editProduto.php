<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Bootstrap  -->
    <title>Edição de produtos</title>
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
    <?php
      if(!isset($_SESSION)) session_start();
      if($_SESSION['nome'] == null){
      $valida = "Você precisa estar logado";
      header("Location:sair.php?valida=$valida");
      }
    ?>
    <section id="navbar"></section>
    <section style="height:100vh;">
        <?php
            include "conexao.php";
            $id = $_GET["id_produto"];
            $sql = mysqli_query($conexao, "SELECT tp.id_tipo_produto, tp.des_tipo_produto,
                f.id_fornecedor, f.nome, pd.marca, pd.preco, DATE_FORMAT(pd.data_validade, '%d/%m/%Y'),
                DATE_FORMAT(pd.data_compra, '%d/%m/%Y'), pd.quantidade, pd.prod_ml, pd.prod_g
                FROM produto pd
                JOIN tipo_produto tp ON pd.id_tipo_produto = tp.id_tipo_produto
                JOIN fornecedor f ON pd.id_fornecedor = f.id_fornecedor
            WHERE id_pedido = $id");

            while ($edit = mysqli_fetch_row($sql)) {
        ?>
        <div class="container pedido">
            <a class="btn btn-info text-light" href="visualizarproduto.php" style="margin-bottom:1rem;">Voltar ao Estoque</a>
            <form class="form__produtos" name="form__produtos" action="updatePedido.php" method="post">
                <div class="fields__container">
                    <h4>Edição de Produtos</h4>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="id_pedido">ID de Agendamento</label>
                            <input class="form-control" type="int" name="id_produto" value="<?php echo $id;?>" readonly>
                        </div>
                    </div>
                    <div class="form-group block__fields">
                        <label name="id_tipo_produto" class="fields__title">Encomenda</label>
                        <?php
                        if (!isset($_SESSION)){ session_start();}
                        $conexao = new mysqli("localhost", "root", "", "banco");
                        $busca = mysqli_query($conexao, "select id_tipo_produto, des_tipo_produto from tipo_produto order by des_tipo_produto");
                        ?>
                        <select class = "form-control" name="id_tipo_produto" required>
                            <option class="btn-success" value="<?php echo $edit[0]; ?>"><?php echo $edit[1]; ?></option>
                            <?php while($ver = mysqli_fetch_row($busca))  { ?>
                            <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button class="btn__submit" type="submit" name="button">Salvar</button>
                    <button class="btn__submit" type="reset" name="button">Limpar</button>
                </div>
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
