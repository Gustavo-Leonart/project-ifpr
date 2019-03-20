<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home - Seja Bem-Vindo!</title>
    <link rel="icon" type="image/jpg" href="images/home.jpg">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/forms_style.css">
    <link rel="stylesheet" href="css/btns_style.css">
    <script type="text/javascript" src="js/formmask.js"></script>
    <style>
        body{
            font-family: 'Roboto';
            font-size: 1.6em;
        }
    </style>
</head>
<body>
    <?php
      if(!isset($_SESSION)) session_start();
      if($_SESSION['nome'] == null){
      $valida = "Você precisa estar logado";
      header("Location:sair.php?valida=$valida");
      }
    ?>
    <!-- Navigation bar -->
    <section id="navbar"></section>
    <section>
        <div class="container">
            <div class="container produtos">
                <form class="form__produtos" name="form__produtos" action="produtoBD.php">
                    <div class="fields__container">
                        <h4>Controle de Estoque</h4>
                        <?php if(isset($_GET['valida'])){
                          $valida = $_GET['valida'];
                          echo "<div class=\"alert alert-success\">
                                    Produto cadastrado com <strong>sucesso</strong>!
                                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\">&times;</button>
                                </div>";
                        } ?>
                        <div class="form-group block__fields">
                            <label name="desc" class="fields__title">Descrição</label>
                            <input class="form-control"  name = "des_produto" type="text" required>
                        </div>
                        <div class="form-group block__fields">
                            <label name="desc" class="fields__title">fornecedor</label>
                            <?php
                            if (!isset($_SESSION)){ session_start();}
                            $conexao = new mysqli("localhost", "root", "", "banco");
                            $busca = mysqli_query($conexao, "select id_fornecedor, nome from fornecedor order by nome");
                            ?>
                            <select class = "form-control" name="fornecedor"  required>
                            <?php while($ver = mysqli_fetch_row($busca))  { ?>
                            <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option>
                          <?php } ?>
                        </select>
                        </div>
                        <div class="form-group block__fields">
                            <label name="desc" class="fields__title">Tipo Produto</label>
                            <?php
                            if (!isset($_SESSION)){ session_start();}
                            $conexao = new mysqli("localhost", "root", "", "banco");
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
                                    <label name="dtaComp" class="fields__title">Data da compra</label>
                                </div>
                                <input class="form-control" name = "data_compra" type="date" required>
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <label name="dtaVali" class="fields__title">Data de Validade</label>
                                </div>
                                <input class="form-control" name = "data_validade" type="date" required>
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <label name="qtde" class="fields__title">Quantidade</label>
                                </div>
                                <input class="form-control" name= "quantidade" type="number" required>
                            </div>
                        </div>
                        <button class="btn__submit" type="submit" name="button">Enviar</button>
                        <button class="btn__clean" type="reset" name="button">Limpar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Rodapé -->
    <section id="footer"></section>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
<script>
    $("#navbar").load("standard-htmls/navigationbar.php");
    $("#footer").load("standard-htmls/footer.html");
</script>
