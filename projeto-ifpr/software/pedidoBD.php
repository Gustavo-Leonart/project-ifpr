<?php
	include "conexao.php";
	if (!isset($_SESSION["Id_usuario"])) {
		session_start();
	}
	$erro = "";
    $id_cliente    = "";
    $id_menu       = "";
    $id_usuario    = $_SESSION["Id_usuario"];
	$data_cadastro = "";
    $data_entrega  = "";
    $valor         = "";

	if(isset($_GET["id_cliente"])&& isset($_GET["id_menu"])&& isset($_GET["data_entrega"])&& isset($_GET["data_cadastro"])&& isset($_GET["valor"])){
        $id_cliente    = $_GET["id_cliente"];
        $id_menu       = $_GET["id_menu"];
    	$data_cadastro = $_GET["data_cadastro"];
        $data_entrega  = $_GET["data_entrega"];
        $valor         = $_GET["valor"];

		$sql = mysqli_query($conexao , "insert into `pedido` (id_cliente, id_menu, id_usuario, data_cadastro, data_entrega, valor)
		VALUES ($id_cliente, $id_menu, $id_usuario, '$data_cadastro', '$data_entrega', '$valor');");
	}else if(empty($_GET["id_cliente"])){
		$erro = "Campo cliente obrigatório";
	}else if(empty($_GET["id_menu"])){
		$erro = "Campo menu obrigatório";
	}else if(empty($_GET["data_cadastro"])){
		$erro = "Campo de data de cadastro obrigatório";
	}else if(empty($_GET["data_entrega"])){
		$erro = "Campo de data da entrega obrigatório";
	}else if(empty($_GET["valor"])){
		$erro = "Campo valor obrigatório";
	}
	if($erro == ""){
		$valida = $valida."Pedido cadastrado com sucesso";
		header("Location:pedido.php?valida=$valida");
	}else{
        $valida = $erro;
		header("Location:pedido.php?valida=$valida");
	}
?>
