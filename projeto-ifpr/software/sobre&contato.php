<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home - Seja Bem-Vindo!</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        @import "css/navigationbar.css";
        body{
            font-family: 'Roboto';
            font-size: 1.6em;
            /* margin: 0 auto; */
        }
    </style>
</head>
<body>
  <?php
    if(!isset($_SESSION)) session_start();
    if($_SESSION['nome'] == null){
    echo  "<script type=\"text/javascript\">alert('Você não está logado');</script>";
    header("Location:sair.php");
    }
  ?>
    <!-- Navigation bar -->
    <section id="navbar"></section>
    <!-- Desc -->
    <section style="background-color:#f2f3f5;">
        <div class="container">
            <h4 class="title__sobre">Sobre</h4>
            <div class="well">
                <p>breve descrição sobre a empresa.</p>
            </div>
            <h4 class="title__contato">Contato</h4>
            <div class="well">
                <p>0000 000 000</p>
                <p>(41)99999-9999</p>
            </div>
        </div>
    </section>
    <!-- Rodapé -->
    <section id="footer"></section>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<script>
    $("#navbar").load("standard-htmls/navigationbar.html");
    $("#footer").load("standard-htmls/footer.html");
</script>
