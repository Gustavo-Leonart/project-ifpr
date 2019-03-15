<?php
	include "conexao.php";
	$erro = "";
	$des_tipo_produto = "";
	if(isset($_GET["des_tipo_produto"])){
	       $des_tipo_produto = $_GET['des_tipo_produto'];

		$sql = mysqli_query($conexao , "insert into `tipo_produto` (des_tipo_produto)
		VALUES ('$des_tipo_produto');");
	}else if(empty($_GET["des_tipo_produto"])){
		$erro = "Campo obrigatório";
    }
	if($erro == ""){

		$valida = $valida." "."Produto cadastrado com sucesso";
		header("Location:tipo_produto.php?valida=$valida");
	}else{
		header("Location:tipo_produto.php?valida=$valida");
	}
?>
