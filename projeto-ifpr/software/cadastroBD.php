<?php
	include "conexao.php";
	$erro = "";
	$nome	 = "";
	$email	 = "";
	$senha	 = "";
	if(isset($_GET["nome"]) && isset($_GET["email"]) && isset($_GET["senha"])){
		$nome	= $_GET['nome'];
		$email	= $_GET['email'];
		$senha	= md5($_GET['senha']);
		$queryEmail = mysqli_query($conexao , "select * from usuario where email = '$email'");
		if($row = mysqli_fetch_row($queryEmail)){
			$erro = "Usuario já existe";
		}else{
			$sql = mysqli_query($conexao , "insert into `usuario` (nome, email, senha)
										VALUES ('$nome', '$email', '$senha');");
		}
	}else if(empty($_GET["nome"])){
		$erro = "Campo nome obrigatório";
	}else if(empty($_GET["email"])){
		$erro = "Campo email obrigatório";
	}else if(empty($_GET["senha"])){
		$erro = "Campo senha obrigatório";
	}
	if($erro == ""){
		$valida = "Usuário cadastrado!";
		header("Location:index.php?valida=$valida");
	}else{
		header("Location:index.php?valida=$erro");
	}
?>
