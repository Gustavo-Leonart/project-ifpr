﻿<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home - Seja Bem-Vindo!</title>
    <link rel="icon" type="image/jpg" href="images/home.jpg">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/automaticSlides.js"></script>
    <style>
        body{
            font-family: 'Roboto', arial, sans-serif;
            font-size: 1.6em;
        }
    </style>
</head>
<body>
    <!-- Navigation bar -->
    <?php
        if(!isset($_SESSION)) session_start();
        if(isset($_SESSION['nome'])){
            echo "<section id=\"navbar1\"></section>";
			}
        else {
		  echo "<section id=\"navbar\"></section>";
		}

    ?>
    <!-- Main content -->
    <section>
        <!-- IMGS -->
        <!-- <div class="slideshow__container">
            <div class="imgs__container">
                <img class="plusSlides fade img-responsive" src="images/img1.jpg">
                <img class="plusSlides fade img-responsive" src="images/img2.jpg">
                <img class="plusSlides fade img-responsive" src="images/img3.jpg">
            </div>
        </div> -->
    </section>
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
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <div class="img__bg__body"></div>
</body>
</html>
<?php

?>
<script>

    $("#navbar").load("standard-htmls/navigationbarnaologado.php");
    $("#navbar1").load("standard-htmls/navigationbar.php");
    $("#footer").load("standard-htmls/footer.php");
</script>