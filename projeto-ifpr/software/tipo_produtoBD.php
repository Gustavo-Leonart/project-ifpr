<?php
	$obj_mysqli = new mysqli("localhost", "root", "", "banco");
	$erro = "";
	mysqli_set_charset($obj_mysqli, 'utf8');
	$des_tipo_produto = "";
	if(isset($_GET["des_tipo_produto"])){
	       $des_tipo_produto = $_GET['des_tipo_produto'];

		$sql = mysqli_query($obj_mysqli, "insert into `tipo_produto` (des_tipo_produto)
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
