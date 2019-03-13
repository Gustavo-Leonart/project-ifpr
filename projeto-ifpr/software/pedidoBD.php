<?php
	$obj_mysqli = new mysqli("localhost", "root", "", "banco");
	$erro = "";
	mysqli_set_charset($obj_mysqli, 'utf8');
    $id_cliente    = "";
    $id_menu       = "";
    $id_usuario    = "";
	$data_cadastro = "";
    $data_entrega  = "";
    $valor         = "";
    $status_pedido = "";

	if(isset($_GET["id_cliente"])&& isset($_GET["id_menu"])&& isset($_GET["id_usuario"])&& isset($_GET["data_entrega"])&& isset($_GET["data_cadastro"])&& isset($_GET["valor"])&& isset($_GET["status_pedido"])){
        $id_cliente    = $_GET["id_cliente"];
        $id_menu       = $_GET["id_menu"];
        $id_usuario    = $_GET["id_usuario"];
    	$data_cadastro = $_GET["data_cadastro"];
        $data_entrega  = $_GET["data_entrega"];
        $valor         = $_GET["valor"];
        $status_pedido = $_GET["status_pedido"];

		$sql = mysqli_query($obj_mysqli, "insert into `pedido` (id_cliente, id_menu, id_usuario, data_cadastro, data_entrega, valor, status_pedido)
		VALUES ($id_cliente, $id_menu, $id_usuario, '$data_cadastro', '$data_entrega', '$valor', $status_pedido);");
	}else if(empty($_GET["id_cliente"])){
		$erro = "Campo cliente obrigatório";
	}else if(empty($_GET["id_menu"])){
		$erro = "Campo menu obrigatório";
	}else if(empty($_GET["id_usuario"])){
		$erro = "Campo usuário obrigatório";
	}else if(empty($_GET["data_cadastro"])){
		$erro = "Campo de data de cadastro obrigatório";
	}else if(empty($_GET["data_entrega"])){
		$erro = "Campo de data da entrega obrigatório";
	}else if(empty($_GET["valor"])){
		$erro = "Campo valor obrigatório";
	}else if(empty($_GET["status_pedido"])){
		$erro = "Campo status do pedido obrigatório";
	}
	if($erro == ""){
		$valida = $valida."Pedido cadastrado com sucesso";
		header("Location:pedido.php?valida=$valida");
	}else{
        $valida = $erro;
		header("Location:pedido.php?valida=$valida");
	}
?>
