<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Bootstrap  -->
    <title>Receita</title>
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
            $id_menu = $_GET["id_menu"];
            $sql = mysqli_query($conexao, "SELECT id_menu, nome_receita, des_receita
            FROM menu WHERE id_menu = $id_menu");

            while ($exibe = mysqli_fetch_array($sql)) {
        ?>
        <div class="container pedido">
            <a class="btn btn-info text-light" href="visualizarReceita.php" style="margin-bottom:1rem;">Visualizar Outras Receitas</a>
            <div class="fields__container">
                <h4>Receita Cadastrada</h4>
                <div class="form-inline">
                    <div class="form-group">
                        <label for="id_pedido">ID da Receita</label>
                        <input class="form-control" type="int" name="id_menu" value="<?php echo $id_menu;?>" readonly>
                    </div>
                </div>
                <?php echo $exibe['nome_receita']; ?>

                <button class="btn__submit" type="submit" name="button">Salvar</button>
                <button class="btn__submit" type="reset" name="button">Limpar</button>
            </div>
        </div>
        <?php } ?>
    </section>
    <?php include "standard-htmls/footer.html"; ?>
</body>
</html>
<script>
    $("#navbar").load("standard-htmls/navigationbar.php");
</script>
