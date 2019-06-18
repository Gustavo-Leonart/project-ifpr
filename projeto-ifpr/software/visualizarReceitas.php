<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Receitas Cadastradas</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/agendamento.css">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
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
    <!-- Receitas -->
    <section>
        <div class="container" style="max-width:1359px;">
            <div class="search__person__container">
                <form class="search__person">
                    <input id="myInput" type="text" placeholder="Pesquisar agendamento...">
                    <!-- <i class="glyphicon glyphicon-search"></i> -->
                </form>
            </div>
            <!-- Infos -->
            <h4 class="container__title">Receitas Cadastradas</h4>
            <a class="" href="pedidosAtrasados.php"></a>
            <div class="table-responsive" id="tableAgenda">
                <table class="table">
                    <thead class="tableHead">
                        <tr>
                            <th>Nome da Receita</th>
                            <th>Descrição da receita</th>
                            <th>Tempo de Preparo(em horas)</th>
                            <th>Data de Cadastro</th>
                        </tr>
                    </thead>
                    <tbody name="table" class="tableBody">
                        <!-- <tr> -->
                        <?php
                        include "conexao.php";
                            $sql = mysqli_query($conexao, "SELECT id_menu, nome_receita, des_receita,
                            tempo_preparo, DATE_FORMAT(data_cadastro, '%d/%m/%Y') as data_cadastro FROM menu");
                            while ($exibe = mysqli_fetch_assoc($sql)) {
                                echo "<tr>
                                    <td>".$exibe['nome_receita']."</td>
                                    <td>".$exibe['des_receita']."</td>
                                    <td>".$exibe['tempo_preparo']."</td>
                                    <td>".$exibe['data_cadastro']."</td>";
                                echo "</tr>";
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
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
