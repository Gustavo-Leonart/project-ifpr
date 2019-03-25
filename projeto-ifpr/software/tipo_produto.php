<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Bootstrap  -->
    <title>Tipos de produtos</title>
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
    if(!isset($_SESSION)) session_start();
    if($_SESSION['nome'] == null){
    $valida = "Você precisa estar logado";
    header("Location:sair.php?valida=$valida");
    }
  ?>
    <section id="navbar"></section>
    <section>
        <div class="container produtos" style="height:100vh;">
            <form class="form__produtos" name="form__produtos" action="tipo_produtoBD.php">
                <div class="fields__container">
                    <h4>Cadastro de Produtos</h4>
                    <?php if(isset($_GET['valida'])){
                      $valida = $_GET['valida'];
                      echo "<div class=\"alert alert-success\">
                                Tipo de produto cadastrado com <strong>sucesso</strong>!
                                <button class=\"close\" type=\"button\" data-dismiss=\"alert\">&times;</button>
                            </div>";
                    } ?>
                    <div class="form-group block__fields">
                        <label name="desc" class="fields__title">Tipo do Produto</label>
                        <input class="form-control"  name = "des_tipo_produto" type="text" required>
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
