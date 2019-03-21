<?php
    include "conexao.php";
    $id =$_REQUEST['id_pedido'];

    // sending query
    mysqli_query($conexao, "DELETE FROM pedido WHERE id_pedido = $id")
    or die(mysql_error());

    header("Location:agendamento.php");

    ?>
