<?php
	$obj_mysqli = new mysqli("localhost", "root", "", "banco");
	$erro = "";
	mysqli_set_charset($obj_mysqli, 'utf8');
	$nome	 = "";
	$email	 = "";
	$senha	 = "";
	if(isset($_GET["nome"]) && isset($_GET["email"]) && isset($_GET["senha"])){
		$nome	= $_GET['nome'];
		$email	= $_GET['email'];
		$senha	= md5($_GET['senha']);
		$queryEmail = mysqli_query($obj_mysqli, "select * from usuario where email = '$email'");
		if($row = mysqli_fetch_row($queryEmail)){
			$erro = "Usuario j� existe";
		}else{
			$sql = mysqli_query($obj_mysqli, "insert into `usuario` (nome, email, senha)
										VALUES ('$nome', '$email', '$senha');");
		}
	}else if(empty($_GET["nome"])){
		$erro = "Campo nome obrigat�rio";
	}else if(empty($_GET["email"])){
		$erro = "Campo email obrigat�rio";
	}else if(empty($_GET["senha"])){
		$erro = "Campo senha obrigat�rio";
	}
	if($erro == ""){
		$valida = "Usuario cadastrado com sucesso";
		header("Location:index.php?valida=$valida");
	}else{
		header("Location:index.php?erro=$erro");
	}
?>