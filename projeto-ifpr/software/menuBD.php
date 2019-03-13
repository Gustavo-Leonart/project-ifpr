<?php
	$obj_mysqli = new mysqli("localhost", "root", "", "banco");
	$erro = "";
	mysqli_set_charset($obj_mysqli, 'utf8');
    $nome_receita  = "";
    $des_receita   = "";
    $tempo_preparo = "";
	$data_cadastro = "";

	if(isset($_GET["nome_receita"])&& isset($_GET["des_receita"])&& isset($_GET["tempo_preparo"])&& isset($_GET["data_cadastro"])){
        $nome_receita  = $_GET["nome_receita"];
        $des_receita   = $_GET["des_receita"];
        $tempo_preparo = $_GET["tempo_preparo"];
    	$data_cadastro = $_GET["data_cadastro"];

		$sql = mysqli_query($obj_mysqli, "insert into `menu` (nome_receita, des_receita, tempo_preparo, data_cadastro)
		VALUES ('$nome_receita', '$des_receita', '$tempo_preparo', '$data_cadastro');");
	}else if(empty($_GET["nome_receita"])){
		$erro = "Campo obrigatório";
	}else if(empty($_GET["des_receita"])){
		$erro = "Campo obrigatório";
	}else if(empty($_GET["tempo_preparo"])){
		$erro = "Campo de tempo de preparo obrigatório";
	}else if(empty($_GET["data_cadastro"])){
		$erro = "Campo de data de cadastro obrigatório";
	}
	if($erro == ""){
		$valida = $valida."Receita cadastrada com sucesso";
		header("Location:menu.php?valida=$valida");
	}else{
        $valida = $erro;
		header("Location:menu.php?valida=$valida");
	}
?>
