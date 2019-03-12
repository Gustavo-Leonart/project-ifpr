<?php
 $conexao = new mysqli("localhost", "root", "", "banco");
	
	if ($conexao->connect_errno){
		echo "Ocorreu um erro na conexão com o banco de dados.";
		exit;
	}
	mysqli_set_charset($conexao, 'utf8');
?>