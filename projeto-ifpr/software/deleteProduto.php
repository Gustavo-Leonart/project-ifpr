<?php
    include "conexao.php";
    $id =$_REQUEST['id_produto'];

    // sending query
    mysqli_query($conexao, "DELETE FROM produto WHERE id_produto = $id")
    or die(mysql_error());

    header("Location:visualizarproduto.php");

    ?>
