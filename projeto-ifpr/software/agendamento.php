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
                    <input id="myInput" type="text" placeholder="Pesquisar agendamento...">
                    <!-- <i class="glyphicon glyphicon-search"></i> -->
                </form>
            </div>
            <!-- Infos -->
            <h4 class="container__title">Agendamentos</h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="tableHead">
                        <tr>
                            <th>Nome</th>
                            <th>Data / Hora</th>
                            <th>Encomenda</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="tableBody">
                        <!-- <tr> -->
                        <?php
                            $conexao = new mysqli("localhost", "root", "", "banco");
                            $sql = mysqli_query($conexao,
                            "SELECT c.id_cliente, c.nome,
                                p.id_cliente, p.data_entrega, p.status_pedido,
                                m.id_menu, m.des_receita
                            FROM cliente c
                                JOIN pedido p ON c.id_cliente = p.id_cliente
                                JOIN menu m ON m.id_menu = p.id_menu ");
                            while ($exibe = mysqli_fetch_assoc($sql)) {
                                echo "<tr>
                                    <td>".$exibe['nome']."</td>
                                    <td>".$exibe['data_entrega']."</td>
                                    <td>".$exibe['des_receita']."</td>
                                    <td>".$exibe['status_pedido']."</td>
                                </tr>";
                            }
                         ?>
                        <!-- </tr> -->
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
