<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Sobre a empresa</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
        <div class="container cards__block" style="height:auto !important;">
            <h4 class="title__card">Sobre</h4>
            <div class="card">
                <p>A empresa NewerBite é voltada ao desenvolvimento de sistemas de gerenciamento.</p>
                <p>Nosso software surgiu, juntamente, com a ideia do Professor Richard Jojima Nagamato(IFPR - Campus Colombo), a qual
                uma confeitaria necessitaria de um sistema objetivando a assistência no gerenciamento geral do estabelecimento.</p>
                <p>Este software foi o primeiro a ser desenvolvido, profissionalmente, pela empresa!</p>
            </div>
            <h4 class="title__card">Contato</h4>
            <div class="card">
                <p>(41) 98854-7002 / (41) 99509-9457 / (41) 99222-8938</p>
                <p>Ou também, por Email:</p>
                <p>gusta.leonart@gmail.com / theodoronowas@gmail.com / cavallilucasmateus@gmail.com</p>
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
    $("#navbar").load("standard-htmls/navigationbar.php");
    $("#footer").load("standard-htmls/footer.html");
</script>
