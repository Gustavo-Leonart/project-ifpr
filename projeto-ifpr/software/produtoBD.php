<?php
	$obj_mysqli = new mysqli("localhost", "root", "", "banco");
	$erro = "";
	mysqli_set_charset($obj_mysqli, 'utf8');
	$des_produto	 = "";
	$marca = "";
	$preco	 = "";
  $data_validade	 = "";
  $data_compra	 = "";
  $fornecedor = "";
  $quantidade	 = "";
  $id_tipo_produto = "";
	if(isset($_GET["des_produto"])&& isset($_GET["marca"])&& isset($_GET["preco"])&& isset($_GET["data_validade"])&& isset($_GET["data_compra"])&& isset($_GET["quantidade"])&& isset($_GET["fornecedor"])&& isset($_GET["id_tipo_produto"])){
		$des_produto	= $_GET['des_produto'];
		$marca	= $_GET['marca'];
		$preco	= $_GET['preco'];
    $data_validade	= $_GET['data_validade'];
    $data_compra	= $_GET['data_compra'];
    $quantidade = $_GET['quantidade'];
    $fornecedor = $_GET['fornecedor'];
    $id_tipo_produto = $_GET['id_tipo_produto'];
		$sql = mysqli_query($obj_mysqli, "insert into `produto` (id_tipo_produto,id_fornecedor,des_produto, marca, preco, data_validade, data_compra, quantidade)
		VALUES ($id_tipo_produto,$fornecedor,'$des_produto', '$marca', $preco, '$data_validade', '$data_compra' , $quantidade);");
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
	}else if(empty($_GET["fornecedor"])){
		$erro = "Campo de fornecedor da compra obrigatório";
	}else if(empty($_GET["id_tipo_produto"])){
  		$erro = "Campo de id_produto obrigatório";
  	}
	if($erro == ""){

		$valida = $valida." "."Produto cadastrado com sucesso";
		header("Location:produtos.php?valida=$valida");
	}else{
		header("Location:produtos.php?valida=$valida");
	}
?>
