<?php
	$obj_mysqli = new mysqli("localhost", "root", "", "banco");
	$erro = "";
	mysqli_set_charset($obj_mysqli, 'utf8');
	$nome	     = "";
	$rg          = "";
	$cpf	     = "";
	$dataNasc    = "";
	$email	     = "";
	$cep         = "";
	$num_casa	 = "";
	$complemento = "";
    $telefone    = "";
	if(isset($_GET["nome"])&& isset($_GET["rg"])&& isset($_GET["cpf"])
    && isset($_GET["dataNasc"])&& isset($_GET["email"])&& isset($_GET["cep"])&& isset($_GET["num_casa"])&& isset($_GET["complemento"])&& isset($_GET["telefone"])){
		$nome        = $_GET['nome'];
		$rg	         = $_GET['rg'];
		$cpf	     = $_GET['cpf'];
	    $dataNasc    = $_GET['dataNasc'];
	    $email       = $_GET['email'];
	    $cep         = $_GET['cep'];
	    $num_casa    = $_GET['num_casa'];
	    $complemento = $_GET['complemento'];
        $telefone    = $_GET['telefone'];

		$sql = mysqli_query($obj_mysqli, "insert into `cliente` (nome, rg, cpf, dataNasc, email, cep, num_casa, complemento, telefone)
		VALUES ('$nome', '$rg', '$cpf', '$dataNasc', '$email', '$cep', $num_casa, '$complemento', '$telefone');");
	}else if(empty($_GET["nome"])){
		$erro = "Campo obrigatório";
	}else if(empty($_GET["rg"])){
		$erro = "Campo rg obrigatório";
	}else if(empty($_GET["cpf"])){
		$erro = "Campo cpf obrigatório";
	}else if(empty($_GET["dataNasc"])){
		$erro = "Campo de data de nascimento obrigatório";
	}else if(empty($_GET["email"])){
		$erro = "Campo de email obrigatório";
	}else if(empty($_GET["cep"])){
		$erro = "Campo cep obrigatório";
	}else if(empty($_GET["num_casa"])){
		$erro = "Campo de número da casa obrigatório";
	}else if(empty($_GET["telefone"])){
  		$erro = "Campo de telefone obrigatório";
  	}
	if($erro == ""){
		$valida = $valida."Cliente cadastrado com sucesso";
		header("Location:cliente.php?valida=$valida");
	}else{
        $valida = $erro;
		header("Location:cliente.php?valida=$valida");
	}
?>
