<?
  $erro = "";
  $valida = false;
  echo "sssss";
  if(!isset($_SESSION)) session_start();
  if(isset($_GET['email']) && isset($_GET['senha']) && !$_GET['email'] == "" && !$_GET['senha'] == ""){
    $var_email = $_GET['email'];
    $var_senha = md5 ($_GET['senha']);
    $conexao = new mysqli("localhost", "root", "", "banco");
    $busca = mysqli_query($conexao, "select id_usuario, nome, email, senha from usuario where email= '$email' and senha = $senha'' limit 1");
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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <title>Efetuar Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css' />
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css' />
    <style>

        body {
            font-family: 'Roboto';
            /* margin: 0 auto; */
        }
    </style>
</head>
<body>
    <!-- Infos p/ login -->
    <section class="body__login__container">
        <fieldset>
            <h3 style="text-align: center; font-size: 2.2em;">Login</h3>
            <form class="form__login__container" action="index.php" method="post">
                <div class="form__fields__login">
                    <label for="login">Login</label>
                    <div class="form__fields__input">
                        <input type="text" name="email" placeholder="Insira seu email..." />
                    </div>
                </div>
                <div class="form__fields__login">
                    <label for="password">Senha</label>
                    <div class="form__fields__input">
                        <input type="password" name="senha"  placeholder="Insira sua senha..." />
                    </div>
                </div>
                <div class="form__buttons__login">
                    <button type="submit" class="form__button__next"><span> Continuar</span></button>
                </div>
            </form>
            <!-- Cadastro -->
            <h4 class="register">
                Não possui um login?
                <br />
                <a href="cadastrar.html" title="Clique Aqui e registre-se!">Registre-se</a> agora!
            </h4>
        </fieldset>
    </section>
</body>
</html>
