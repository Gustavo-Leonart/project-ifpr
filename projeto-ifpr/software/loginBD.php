<?php
  $erro = "";
  $valida = false;
  echo "sssss";
  if(!isset($_SESSION)) session_start();
  if(isset($_GET['email']) && isset($_GET['senha']) && !$_GET['email'] == "" && !$_GET['senha'] == ""){
    $var_email = $_GET['email'];
    $var_senha = md5($_GET['senha']);
    $conexao = new mysqli("localhost", "root", "", "banco");
    $busca = mysqli_query($conexao, "select id_usuario, nome, email, senha from usuario where email= '$var_email' and senha = '$var_senha' limit 1");
    if($ver = mysqli_fetch_row($busca)){
      $_SESSION['Id_usuario']		= $ver[0];
      $_SESSION['nome']				= $ver[1];
      $_SESSION['email']			= $ver[2];
      $_SESSION['senha']			= $ver[3];
      $valida = true;
    }else{
      $erro = "Email e/ou senha invalido(s)";
    }
  }else{
    $erro = "Email e/ou senha nao preenchidos.";
  }
  if($valida){
    header("Location:index.php");
  }else{
    header("Location:index.php?erro=$erro");
  }
  //date_default_timezone_set('America/Sao_Paulo');
  //echo date('d/m/Y  H:i:s');
?>