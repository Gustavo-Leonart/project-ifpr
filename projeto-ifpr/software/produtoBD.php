<?php
	$obj_mysqli = new mysqli("localhost", "root", "", "banco");
	$erro = "";
	mysqli_set_charset($obj_mysqli, 'utf8');
	$des_produto	 = "";
	$marca = "";
	$preco	 = "";
  $data_validade	 = "";
  $data_compra	 = "";
  $quantidade	 = "";
	if(isset($_GET["des_produto"])&& isset($_GET["marca"])&& isset($_GET["preço"])&& isset($_GET["data_validade"])&& isset($_GET["data_compra"])&& isset($_GET["quantidade"])){
		$des_produto	= $_GET['des_produto'];
		$marca	= $_GET['marca'];
		$preco	= $_GET['preco'];
    $data_valida	= $_GET['data_validade'];
    $data_compra	= $_GET['data_compra'];
    $quantidade = $_GET['quantidade'];
		$sql = mysqli_query($obj_mysqli, "insert into `produto` (des_produto, marca, preco, data_validade, data_compra, quantidade)
		VALUES ('$des_produto', '$marca', $preco, $data_validade, $data_compra , $quantidade);");

    echo
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
	}
	if($erro == ""){
		$valida = "Usuario cadastrado com sucesso";
		header("Location:produtos.php?valida=$valida");
	}else{
		header("Location:produtos.php?valida=$erro");
	}
?>
