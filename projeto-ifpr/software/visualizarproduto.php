<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Agendametos</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/agendamento.css">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
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
    $valida = "Você precisa estar logado";
    header("Location:sair.php?valida=$valida");
    }
  ?>

    <!-- Navigation bar -->
    <section id="navbar"></section>
    <!-- Agendamentos -->
    <section>
        <div class="container">
            <div class="search__person__container">
                <form class="search__person">
                    <input id="myInput" type="text" placeholder="Pesquisar produtos...">
                    <!-- <i class="glyphicon glyphicon-search"></i> -->
                </form>
            </div>
            <!-- Infos -->
            <h4 class="container__title">Produtos cadastrados</h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="tableHead">
                        <tr>
                            <th>Descrição</th>
                            <th>Marca</th>
                            <th>Preço</th>
                            <th>Validade</th>
                            <th>Quantidade</th>
                        </tr>
                    </thead>
                    <tbody class="tableBody">
                      <?php
                      $entra = new mysqli("localhost", "root", "", "banco");
                      $busca = mysqli_query($entra, "select des_produto,marca, preco,date_format(data_validade, '%d/%m/%y'),quantidade from produto order by des_produto");
                      while($ver = mysqli_fetch_row($busca)){
                          echo "<tr>";
                          echo "<td>$ver[0]</td>";
                          echo "<td>$ver[1]</td>";
                          echo "<td>$ver[2]</td>";
                          echo "<td>$ver[3]</td>";
                          echo "<td>$ver[4]</td>";
                          echo "<tr>";
                      }
                         ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Rodapé -->
    <section id="footer"></section>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myInput").on("keyup",
            function(){
                var value = $(this).val().toLowerCase();
                $(".tableBody tr").filter(
                    function(){
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    }
                );
            }
        );
    });
    // Arquivos HTML externos
    $("#navbar").load("standard-htmls/navigationbar.php");
    $("#footer").load("standard-htmls/footer.html");
</script>
