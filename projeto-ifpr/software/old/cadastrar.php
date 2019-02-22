<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> Cadastro</title>
	<link rel="stylesheet" type="text/css" href="project-ifpr/projeto-ifpr/software/css/register.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8" />
	<script type="text/javascript" src="js/formmask.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!-- Roboto Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <style>
        body{
            font-family: 'Roboto';
            /* font-size: 1.5em !important; */
            /* margin: 0 auto; */
        }
    </style>
</head>
<body>
	<!-- Infos p/ cadastro -->
		<section class="body__container">
			<form class="form__container" name="formSignUp" action="index.php" method="post">
				<div class="form__sign__container">
					<div class="form__fields__container">
						<div class="form__fields">
							<label for="email">E-mail</label>
							<input type="email"  placeholder="exemplo@hotmail.com...">
						</div>
						<div class="form__fields">
							<label for="nome">Nome e Sobrenome</label>
							<input type="text" placeholder="Insira o nome completo...">
						</div>
						<div class="form__fields">
							<label for="senha">Senha <small style="font-weight:normal;font-size:.75em;">( 6 à 32 caractéres )</small> </label>
							<input type="password" min="6" maxlength="32" placeholder="Digite uma senha...">
						</div>
					</div>
				</div>
				<!-- buttons area -->
				<div class="buttons__area">
					<div class="form__buttons">
						<button type="reset" class="form__button__reset"><span> Limpar</span></button>
					</div>
					<div class="form__buttons">
						<button type="submit" class="form__button__next" ><span> Próximo</span></button>
					</div>
				</div>
			</form>
		</section>
	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
<script type="text/javascript">
	$("#cadastrar").click(function(){
		$("#cadastrar__modal").modal();
	});
</script>
