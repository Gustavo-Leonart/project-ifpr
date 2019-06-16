<?php
include "conexao.php";
$id = $_POST["id_produto"];
$id_menu = $_POST["id_menu"];
$data_entrega = $_POST["data_entrega"];
$status_pedido = $_POST["status_pedido"];
$valor = $_POST["valor"];

$update = mysqli_query($conexao, "UPDATE produto set id_menu = $id_menu,
    data_entrega = '$data_entrega', status_pedido = $status_pedido, valor = $valor
    WHERE id_pedido = $id");
    header("Location:editProduto.php?id_produto=$id&alterado");
?>
