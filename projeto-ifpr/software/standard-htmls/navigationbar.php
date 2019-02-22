
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/register.css" />
    <script type="text/javascript" src="js/formmask.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php">
                    <!-- <img src="images/img2.jpg" alt="" style="max-height:60px;border:1px solid #fff;" /> -->
                    NewerBite
                </a>
            </div>
            <div class="dropdown">
                <button type="button" name="button" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="fas fa-bars" style="padding:0;"></span>
                </button>
                <ul class="dropdown-menu">
				<li class="menu__item"><a>
				<?php
				 if(!isset($_SESSION)) session_start();
				echo 'Olá, '.$_SESSION['nome'];
		
				?>
				 <li class="menu__item"><a id="cadastrar" style="cursor:pointer;">Cadastrar-se</a></li>
				</a></li>
                    <li class="menu__item"><a href="sobre&contato.html">Sobre</a></li>
                    <li class="menu__item dropdown-submenu">
                        <a class="active" href="#">usuário</a>
                        <ul class="dropdown-menu">
                            <li class="menu__item"><a href="account.html"><span class="far fa-user-circle"></span> Conta</a></li>
                        </ul>
                    </li>
                    <li class="menu__item dropdown-submenu">
                        <a href="#">Pedidos</a>
                        <ul class="dropdown-menu">
                            <li class="menu__item"><a href="#">Fazer um pedido</a></li>
                            <li class="menu__item"><a href="#">Acessar pedido</a></li>
                            <li class="menu__item"><a href="#">Alterar pedido</a></li>
                        </ul>
                 

                    <li class="menu__item dropdown-submenu">
                        <a href="#">Agendamentos</a>
                        <ul class="dropdown-menu">
                            <li class="menu__item"><a href="agendamento.php">Consultar agendamentos</a></li>
							</ul>
							   </li>
					  	    <li class="menu__item dropdown-submenu">
                        <a href="sair.php">sair</a>
                    </li>  

					
							
            </div>
        </div>
    </nav>
	<!-- Modal de cadastro -->
   <div class="modal fade" id="cadastrar__modal" role="dialog">
         <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" style="text-align: center; font-size: 2.2em;">Cadastro</h4>
                 </div>
                 <div class="modal-body">
                   <form name="formSignUp" action="cadastroBD.php">
                       <div class="form__sign__container">
                           <div class="form__fields__container">
                               <div class="form__fields">
                                   <label for="email">E-mail</label>
                                   <input type="email" name ="email" placeholder="exemplo@hotmail.com..." required>

                               </div>
                               <div class="form__fields">
                                   <label for="nome">Nome <span style="font-size:.8em;color:#E53935;">*</span></label>
                                   <input type="text"  name = "nome" placeholder="Insira o nome completo..." required>
                               </div>
                      
                               <div class="form__fields">
                                   <label for="senha">Senha <small style="font-weight:normal;font-size:.75em;">( 6 à 32 caractéres )</small> <span style="font-size:.8em;color:#E53935;">*</span></label>
                                   <input type="password" min="6" maxlength="32" name = "senha"placeholder="Digite uma senha..." required>
                               </div>
                           </div>
                       </div>
                       <!-- buttons area -->
                       <div class="buttons__area">
                           <div class="form__buttons">
                               <button type="reset" class="form__button__reset"><span> Limpar</span></button>
                           </div>
                           <div class="form__buttons">
                               <button type="submit" class="form__button__next" ><span> Concluir</span></button>
                           </div>
                       </div>
                       <!-- Message -->
					   <div class="modal-footer">
						<p style="font-size:.85em;text-align: left;margin:8px 16px;">
                       Campos com " <span style="color:#E53935">*</span> " são obrigatórios
						</p>
					</div>
       </div>
   </div>
</body>
</html>
<script type="text/javascript">
    $("#login").click(function(){
        $("#login__modal").modal();
    });
    $("#cadastrar").click(function(){
        $("#cadastrar__modal").modal();
    });

</script>
