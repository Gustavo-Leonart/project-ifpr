
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
                    <li class="menu__item"><button id="login" class="button__modal">Entrar <span class="fa fa-sign-in-alt" style="font-size:.9em;"></span></button></li>
              
        </div>
    </nav>
    <!-- mdoal de login -->
    <div class="modal fade" id="login__modal" role="dialog">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" style="text-align: center; font-size: 2.2em;">Login</h4>
               </div>
               <div class="modal-body">
                   <form class="form__login__container" action="loginBD.php">
                       <div class="form__fields__login">
                           <label for="login">Email</label>
                           <div class="form__fields__input">
                               <input type="text" name="email" placeholder="Insira seu Email..." required>
                           </div>
                       </div>
                       <div class="form__fields__login">
                           <label for="password">Senha</label>
                           <div class="form__fields__input">
                               <input type="password" name="senha" placeholder="Insira sua senha..." required>
                           </div>
                       </div>
                       <div class="form__buttons__login">
                           <button type="submit" class="form__button__next"><span> Continuar</span></button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
   <!-- Modal de cadastro -->
   <div class="modal fade" id="cadastrar__modal" role="dialog">
         <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" style="text-align: center; font-size: 2.2em;">Cadastro</h4>
                 </div>
                 <div class="modal-body">
                   <form name="formSignUp" action="index.php" method="post">
                       <div class="form__sign__container">
                           <div class="form__fields__container">
                               <div class="form__fields">
                                   <label for="email">E-mail</label>
                                   <input type="email"  placeholder="exemplo@hotmail.com...">
                               </div>
                               <div class="form__fields">
                                   <label for="nome">Nome <span style="font-size:.8em;color:#E53935;">*</span></label>
                                   <input type="text" placeholder="Insira o nome completo..." required>
                               </div>
                               <div class="form__fields">
                                   <label for="rg">RG <span style="font-size:.8em;color:#E53935;">*</span></label>
                                   <input type="text" name="rg" placeholder="Ex: 11.111.111-0" maxlength="12" onkeypress="mascaraRg(formSignUp.rg)" onblur="validaRg(formSignUp.rg)" required>
                               </div>
                               <div class="form__fields">
                                   <label for="celular">Celular <span style="font-size:.8em;color:#E53935;">*</span></label>
                                   <input type="text" name="cel" placeholder="Ex:(41) 99999-9999" maxlength="15" onkeypress="mascaraCelular(formSignUp.cel)" onblur="validaCelular(formSignUp.cel)" required>
                                   <p class="alert" style="display:none;">Celular Inv�lido</p>
                               </div>
                           </div>
                           <div class="form__fields__container">
                               <div class="form__fields">
                                   <label for="endere�o">Endere�o <span style="font-size:.8em;color:#E53935;">*</span></label>
                                   <input type="text" placeholder="Insira seu endere�o..." required>
                               </div>
                               <div class="form__fields">
                                   <label for="cep">CEP</label>
                                   <input type="text" name="cep" placeholder="Ex: 12345678" maxlength="8">
                               </div>
                               <div class="form__fields">
                                   <label for="login">Usu�rio <span style="font-size:.8em;color:#E53935;">*</span></label>
                                   <input type="text" placeholder="Insira um nome de usu�rio..." required>
                               </div>
                               <div class="form__fields">
                                   <label for="senha">Senha <small style="font-weight:normal;font-size:.75em;">( 6 � 32 caract�res )</small> <span style="font-size:.8em;color:#E53935;">*</span></label>
                                   <input type="password" min="6" maxlength="32" placeholder="Digite uma senha..." required>
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

                   </form>
               </div>
               <div class="modal-footer">
                   <p style="font-size:.85em;text-align: left;margin:8px 16px;">
                       Campos com " <span style="color:#E53935">*</span> " s�o obrigat�rios
                   </p>
               </div>
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

