<?php
include "conexao.php";
$id              = $_POST["id_produto"];
$des_produto     = $_POST['des_produto'];
$marca	         = $_POST['marca'];
$preco	         = $_POST['preco'];
$data_validade   = $_POST['data_validade'];
$data_compra     = $_POST['data_compra'];
$quantidade      = $_POST['quantidade'];
$id_fornecedor   = $_POST['id_fornecedor'];
$id_tipo_produto = $_POST['id_tipo_produto'];
$prod_ml         = $_POST['prod_ml'];
$prod_g          = $_POST['prod_g'];

$update = mysqli_query($conexao, "UPDATE produto set id_tipo_produto = $id_tipo_produto,
    id_fornecedor = $id_fornecedor, des_produto = '$des_produto', marca = '$marca',
    preco = '$preco', data_validade = '$data_validade', data_compra = '$data_compra',
    quantidade = $quantidade, prod_ml = $prod_ml, prod_g = $prod_g
    WHERE id_produto = $id");
    header("Location:editProduto.php?id_produto=$id&alterado");
?>
