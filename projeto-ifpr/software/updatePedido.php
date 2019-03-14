<?php
include "conexao.php";
$id = $_POST["id_pedido"];
$id_menu = $_POST["id_menu"];
$data_entrega = $_POST["data_entrega"];
$status_pedido = $_POST["status_pedido"];
$valor = $_POST["valor"];
if (!isset($_SESSION)) session_start();
echo $success["success"];

$update = mysqli_query($conexao, "UPDATE pedido set id_menu = $id_menu,
    data_entrega = '$data_entrega', status_pedido = $status_pedido, valor = $valor
    WHERE id_pedido = $id");
    header("Location:editAgen.php?id_pedido=$id");
?>
