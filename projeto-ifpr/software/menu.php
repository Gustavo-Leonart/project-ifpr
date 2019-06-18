<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Bootstrap  -->
    <title>Cadastro de Receitas</title>
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
    <script type="text/javascript" src="js/preenchimentoProduto.js"></script>

</head>
<body>
    <section id="navbar"></section>
    <section>
        <?php
          if(!isset($_SESSION)) session_start();
          if($_SESSION['nome'] == null){
              $valida = "Você precisa estar logado";
              header("Location:sair.php?valida=$valida");
          }
        ?>
        <div class="container pedido">
            <form class="form__produtos" name="form__produtos" action="menuBD.php">
                <div class="fields__container">
                    <?php if(isset($_GET['valida'])){
                      $valida = $_GET['valida'];
                      echo "<div class=\"alert alert-success\">
                                Receita cadastrada com <strong>sucesso</strong>!
                                <button class=\"close\" type=\"button\" data-dismiss=\"alert\">&times;</button>
                            </div>";
                    } ?>
                    <h4>Cadastro de Receitas</h4>
                    <div class="form-group form-inline">
                        <div class="input-group">
                            <div class="input-group-append">
                                <label name="nome_receita" class="fields__title">Nome da Receita</label>
                            </div>
                            <input name="nome_receita" class="form-control">
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label for="data_cadastro">Data de Cadastro</label>
                            </div>
                            <input name="data_cadastro" class="form-control" type="date" required>
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label name="des_receita" class="fields__title">Tempo de Preparo</label>
                            </div>
                            <div class="input-group">
                                <input name="tempo_preparo" class="form-control" name="des_receita" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group block__fields">
                        <?php
                         include "conexao.php";
                          $id_produto = $_GET["id_produto"];
                          $query = mysqli_query($conexao, "SELECT *
                            FROM produto WHERE id_produto = $id_produto");
                          $value = mysqli_fetch_array($query);

                        ?>
                        <label name="des_receita" class="fields__title">Descrição da Receita</label>
                        <textarea id="des_produto" name="des_receita" class="form-control" rows="8" cols="80" value="<?php echo $value['des_produto']; ?>"></textarea>
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
