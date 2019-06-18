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
            $id = $_GET["id_menu"];
            $sql = mysqli_query($conexao, "SELECT nome_receita, des_receita, tempo_preparo, DATE_FORMAT(data_cadastro, '%d/%m/%Y')
            FROM menu WHERE id_menu = $id");
            if($sql === false){
              echo "esta merda so falha";
            }else{
            while ($exibe = mysqli_fetch_row($sql)) {
        ?>
        <div class="container pedido">
            <a class="btn btn-info text-light" href="agendamento.php" style="margin-bottom:1rem;">Voltar a Agendamentos</a>
            <form class="form__produtos" name="form__produtos">
                <div class="fields__container">
                    <h4>Receita Cadastrada</h4>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="id_produto">ID da Receita</label>
                            <input class="form-control" type="int" name="id_menu" value="<?php echo $id;?>" readonly>
                        </div>
                    </div>
                    <div class="form-group block__fields">
                        <label name="nome_receita" class="fields__title">Nome da Receita/label>
                          <input class="form-control" name="nome_receita" type="text" value="<?php echo $exibe[0]; ?>">
                    </div>
                    <div class="form-group block__fields">
                        <label name="des_receita" class="fields__title">Descrição da Receita/label>
                        <div class="input-group nome_receita">
                            <textarea class="form-control" name="des_receita"><?php echo $exibe[1]; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group block__fields">
                        <label name="tempo_preparo" class="fields__title">Nome da Receita/label>
                        <input class="form-control" name="tempo_preparo" type="text" value="<?php echo $exibe[2]; ?>">
                    </div>
                    <div class="form-group block__fields">
                        <label name="data_cadastro" class="fields__title">Nome da Receita/label>
                        <input class="form-control" name="data_cadastro" type="text" value="<?php echo $exibe[3]; ?>">
                    </div>
                </div>
            </form>
        </div>
        <?php }
      } ?>
    </section>
    <?php include "standard-htmls/footer.html"; ?>
</body>
</html>
<script>
    $("#navbar").load("standard-htmls/navigationbar.php");
</script>
