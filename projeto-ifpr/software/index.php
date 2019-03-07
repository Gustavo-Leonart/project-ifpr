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
        if(isset($_GET['valida'])){
            $valida = $_GET['valida'];
            echo "<div class=\"alert alert-danger\" style=\"font-size:1.35em;\">
                    Email ou senha <strong>inválidos</strong>!
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\">&times;</button>
                </div>";
        } ?>
    <?php
        if(!isset($_SESSION)) session_start();
        if(isset($_SESSION['nome'])){
            echo "<section id=\"navbar\"></section>";
      }
        else {
      echo "<section id=\"navbar1\"></section>";
    }
    ?>

    <!-- Main content -->
    <!-- Informações -->
    <section>
        <div class="infos__container">
            <h1 class="infos__title">Informações</h1>
            <div class="block__infos">
                <p class="infos">

               </p>
           </div>
           <div class="block__infos">
               <p class="infos">
               </p>
           </div>
           <h1 class="infos__title">Detalhes</h1>
           <div class="block__infos">
               <p class="infos">
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
