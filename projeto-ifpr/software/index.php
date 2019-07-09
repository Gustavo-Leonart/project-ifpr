<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home - Seja Bem-Vindo!</title>
    <link rel="icon" type="image/jpg" href="images/home.jpg">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            font-family: 'Roboto', arial, sans-serif;
            font-size: 1.6em;
        }
    </style>
</head>
<body style="background-color:#ECEFF1 !important;">
    <!-- Navigation bar -->
    <?php
    include "conexao.php";
        if(!isset($_SESSION)) session_start();
        if(isset($_SESSION['nome'])){
            echo "<section id=\"navbar\"></section>";
      }
        else {
      echo "<section id=\"navbar1\"></section>";

    }

    

    /*if(isset($_GET['valida'])){
        $valida = $_GET['valida'];
        echo $valida = '<div class="container-fluid alert alert-danger" style="max-width:60%;font-size:1.1em;">
            Email ou senha <strong>Inválidos!</strong>
            <button type="button" class="close" data-dismiss="alert">&times;</strong>
        </div>';
    }*/
    ?>

    <!-- Main content -->
    <!-- Informações -->
    <section>
        <div class="infos__container">
            <h1 class="infos__title">Informações</h1>
            <div class="block__infos">
                <p class="infos">
                  Software criado para facilitar um gerenciamento de uma confeitaria!
               </p>
           </div>
           <h1 class="infos__title">Detalhes</h1>
           <div class="block__infos">
               <p class="infos">
                 Para saber mais sobre nós, acesse o link abaixo:
                 <ul class="infos__links">
                     <li><a href="sobre&contato.php">Sobre Nós!</a></li>
                 </ul>
               </p>
           </div>
           <h1 class="infos__title">Ações</h1>
           <div class="block__infos">
               <p class="infos">
                   <ul class="infos__links">
                       <li><a href="pedido.php">Adicionar um pedido</a></li>
                       <li><a href="agendamento.php">Ver pedidos agendados</a></li>
                       <li><a href="menu.php">Adicionar receitas</a></li>
                       <li><a href="produtos.php">Adicionar novos produtos</a></li>
                       <li><a href="tipo_produto.php">Adicionar tipos de produto</a></li>
                   </ul>
               </p>
           </div>
       </div>
   </section>
    <!-- Rodapé -->
    <section id="footer"></section>

</body>
</html>
<script>
    $("#navbar").load("standard-htmls/navigationbar.php");
    $("#navbar1").load("standard-htmls/navigationbarnaologado.php");
    $("#footer").load("standard-htmls/footer.html");
</script>
