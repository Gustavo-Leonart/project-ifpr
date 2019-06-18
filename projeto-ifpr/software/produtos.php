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
    <link rel="stylesheet" href="css/forms_style.css">
    <link rel="stylesheet" href="css/btns_style.css">
    <script type="text/javascript" src="js/formmask.js"></script>
</head>
<body>
  <?php
    include "conexao.php";
    if(!isset($_SESSION)) session_start();
    if($_SESSION['nome'] == null){
    $valida = "Você precisa estar logado";
    header("Location:sair.php?valida=$valida");
    }
  ?>
    <section id="navbar"></section>
    <section>
        <div class="container produtos">
            <form class="form__produtos" name="form__produtos" action="produtoBD.php">
                <div class="fields__container">
                    <h4>Cadastro de Produtos</h4>
                    <?php if(isset($_GET['valida'])){
                      $valida = $_GET['valida'];
                      echo "<div class=\"alert alert-success\">
                                Produto cadastrado com <strong>sucesso</strong>!
                                <button class=\"close\" type=\"button\" data-dismiss=\"alert\">&times;</button>
                            </div>";

                    } ?>
                    <div class="form-group block__fields">
                        <label name="des_produto" class="fields__title">Descrição</label>
                        <input class="form-control"  name = "des_produto" type="text" required>
                    </div>
                    <div class="form-group block__fields">
                        <label name="id_fornecedor" class="fields__title">Fornecedor</label>
                        <?php
                        if (!isset($_SESSION)){ session_start();}
                        include "conexao.php";
                        $busca = mysqli_query($conexao, "select id_fornecedor, nome from fornecedor order by nome");
                        ?>
                        <select class = "form-control" name="id_fornecedor"  required>
                        <?php while($ver = mysqli_fetch_row($busca))  { ?>
                        <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                    <div class="form-group block__fields">
                        <label name="id_tipo_produto" class="fields__title">Tipo Produto</label>
                        <?php
                        if (!isset($_SESSION)){ session_start();}
                        include "conexao.php";
                        $busca = mysqli_query($conexao, "select id_tipo_produto, des_tipo_produto from tipo_produto order by des_tipo_produto");
                        ?>
                        <select class = "form-control" name="id_tipo_produto"  required>
                        <?php while($ver = mysqli_fetch_row($busca))  { ?>
                        <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                    <div class="form-group">
                            <label name="marca" class="fields__title">Marca</label>
                            <input class="form-control" name ="marca" type="text" required>
                        </div>
                    </div>
                    <div class="form-group form-inline">
                        <div class="input-group">
                            <div class="input-group-append">
                                <label name="data_compra" class="fields__title">Data da Compra</label>
                            </div>
                            <input class="form-control" name = "data_compra" type="date" required>
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label name="data_validade" class="fields__title">Data de Validade</label>
                            </div>
                            <input class="form-control" name = "data_validade" type="date" required>
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label name="quantidade" class="fields__title">Quantidade</label>
                            </div>
                            <input class="form-control" name= "quantidade" type="number" required>
                        </div>
                    </div>
                    <div class="form-group form-inline">
                        <div class="input-group">
                            <div class="input-group-append">
                                <label name="preco" class="fields__title">Preço do produto</label>
                            </div>
                            <input class="form-control" name = "preco" type="number">
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label name="prod_ml" class="fields__title">Peso liquído</label>
                            </div>
                            <input class="form-control" name = "prod_ml" type="number">
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <label name="prod_g" class="fields__title">Peso em gramas</label>
                              </div>
                            <input class="form-control" name = "prod_g" type="number">
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
