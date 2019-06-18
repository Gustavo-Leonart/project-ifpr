<?php
	include "conexao.php";
	$erro            = "";
	$des_produto	   = "";
	$marca           = "";
	$preco	         = "";
	$data_validade   = "";
	$data_compra	   = "";
	$id_fornecedor      = "";
	$quantidade	     = "";
	$id_tipo_produto = "";
	$prod_ml         = "";
	$prod_g         = "";

	if(isset($_GET["des_produto"])&& isset($_GET["marca"])&& isset($_GET["preco"])&& isset($_GET["data_validade"])&& isset($_GET["data_compra"])&& isset($_GET["quantidade"])
	&& isset($_GET["id_fornecedor"])&& isset($_GET["id_tipo_produto"])&& isset($_GET["prod_ml"])&& isset($_GET["prod_g"])){
		$des_produto    = $_GET['des_produto'];
		$marca	       = $_GET['marca'];
		$preco	       = $_GET['preco'];
	  $data_validade = $_GET['data_validade'];
	  $data_compra   = $_GET['data_compra'];
	  $quantidade    = $_GET['quantidade'];
	  $id_fornecedor    = $_GET['id_fornecedor'];
	  $id_tipo_produto = $_GET['id_tipo_produto'];
    $prod_ml       = $_GET['prod_ml'];
		$prod_g        = $_GET['prod_g'];

		$sql = mysqli_query($conexao , "insert into `produto` (id_tipo_produto, id_fornecedor, des_produto, marca, preco, data_validade, data_compra, quantidade, prod_ml, prod_g)
		VALUES ($id_tipo_produto, $id_fornecedor, '$des_produto', '$marca', '$preco', '$data_validade', '$data_compra' , $quantidade, $prod_ml, $prod_g);");
	}else if(empty($_GET["des_produto"])){
		$erro = "Campo obrigatório";
	}else if(empty($_GET["marca"])){
		$erro = "Campo marca obrigatório";
	}else if(empty($_GET["preco"])){
		$erro = "Campo preço obrigatório";
	}else if(empty($_GET["data_validade"])){
		$erro = "Campo de data obrigatório";
	}else if(empty($_GET["data_compra"])){
		$erro = "Campo de data da compra obrigatório";
	}else if(empty($_GET["quantidade"])){
		$erro = "Campo de quantidade da compra obrigatório";
	}else if(empty($_GET["id_fornecedor"])){
		$erro = "Campo de fornecedor da compra obrigatório";
	}else if(empty($_GET["id_tipo_produto"])){
  		$erro = "Campo de id_produto obrigatório";
  	}
	if($erro == ""){
		$valida = "Produto cadastrado com sucesso";
		header("Location:produtos.php?valida=$valida");
	}else{
		header("Location:produtos.php?valida=$valida");
	}
?>
