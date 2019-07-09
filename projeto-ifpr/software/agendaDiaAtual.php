<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Agendametos</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/agendamento.css">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <script type="text/javascript">
        function Att() {
            window.location.reload();
        }
    </script>
</head>
<body onload="setTimeout(Att, 60000);">
  <?php
    if(!isset($_SESSION)) session_start();
    if($_SESSION['nome'] == null){
        $valida = "Você precisa estar logado";
        header("Location:sair.php?valida=$valida");
    }
  ?>
    <!-- Agendamentos -->
    <section>
        <div class="container" style="max-width:1359px;">
            <div class="search__person__container">
                <form class="search__person">
                    <input id="myInput" type="text" placeholder="Pesquisar agendamento...">
                    <!-- <i class="glyphicon glyphicon-search"></i> -->
                </form>
            </div>
            <!-- Infos -->
            <h4 class="container__title">Agendamentos do Dia</h4>
            <div class="table-responsive" id="tableAgenda">
                <table class="table">
                    <thead class="tableHead">
                        <tr>
                            <th>Nome</th>
                            <th>Contato</th>
                            <th>Encomenda</th>
                            <th>Data de Entrega</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody name="table" class="tableBody">
                        <!-- <tr> -->
                        <?php
                        include "conexao.php";
                            $sql = mysqli_query($conexao,
                            "SELECT c.id_cliente, c.nome, c.telefone,
                                p.id_pedido, DATE_FORMAT(p.data_entrega, '%d/%m/%Y') as data_entrega , p.status_pedido,
                                m.id_menu, m.nome_receita
                            FROM cliente c
                                JOIN pedido p ON c.id_cliente = p.id_cliente
                                JOIN menu m ON m.id_menu = p.id_menu
                                WHERE data_entrega = CURDATE()
                                ORDER BY data_entrega");
                                if($sql === FALSE) {
                                   die(mysqli_error($conexao));
                                }
                            while ($exibe = mysqli_fetch_assoc($sql)) {
                                echo "<tr>
                                    <td>".$exibe['nome']."</td>
                                    <td>".$exibe['telefone']."</td>
                                    <td>".$exibe['nome_receita']."</a> </td>
                                    <td>".$exibe['data_entrega']."</td>";
                                    if($exibe['status_pedido'] == 1)
                                        echo "<td style=\"color:#005fc1;background-color:#cce5ff;\">Aguardando Entrega <span class=\"spinner-grow spinner-grow-sm\"></span></td>";

                                    elseif($exibe['status_pedido'] == 2)
                                        echo "<td style=\"color:#375743;background-color:#d4edda;\">Pedido Entregue <span class=\"fas fa-check\"></span></td>";

                                    elseif($exibe['status_pedido'] == 3)
                                        echo "<td style=\"color:#856404;background-color:#fff3cd;\">Em andamento <span class=\"spinner-grow spinner-grow-sm\"></span></td>";

                                    elseif($exibe['status_pedido'] == 4)
                                        echo "<td style=\"color:#721c24;background-color:#f8d7da;\">Cancelado <span class=\"fas fa-times\"></span></td>";
                                echo "</tr>";
                            }
                         ?>
                         <div class="imp__container">
                             <button class="btn__imp" type="button" onclick="window.print();">Imprimir agendamentos do dia</button>
                         </div>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
