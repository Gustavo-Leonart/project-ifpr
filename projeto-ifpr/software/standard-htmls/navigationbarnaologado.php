<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/register.css" />
    <link rel="stylesheet" href="css/navigationbar.css">
    <script type="text/javascript" src="js/formmask.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Font awesome -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" > -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar">
        <div class="container nav">
            <div class="emp__logo">
                <a href="index.php">
                    <img src="images/emp-name.jpg" alt="NewerBite" style="max-height:60px;" />
                </a>
            </div>
            <div class="dropdown">
               <button class="btn" type="button" name="button" data-toggle="modal" data-target="#login__modal">
                   Entrar
               </button>
               </ul>
           </div>
        </div>
    </nav>

    <!-- mdoal de login -->
    <div class="modal fade" id="login__modal">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" style="text-align: center; font-size: 2.2em;">Login</h4>
               </div>
               <div class="modal-body">
                   <form class="form__login__container" action="loginBD.php" >
                       <div class="form__fields__login">
                           <label for="login">Email</label>
                           <div class="form__fields__input">
                               <input type="text" name="email" placeholder="Insira seu email..." required>
                           </div>
                       </div>
                       <div class="form__fields__login">
                           <label for="password">Senha</label>
                           <div class="form__fields__input">
                               <input type="password" name="senha" value="" placeholder="Insira sua senha..." required>
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
                   <form name="formSignUp" action="index.html" method="post">
                       <div class="form__sign__container">
                           <div class="form__fields__container">
                               <div class="form__fields">
                                   <label for="email">E-mail</label>
                                   <input type="email"  placeholder="exemplo@hotmail.com..." required>
                               </div>
                               <div class="form__fields">
                                   <label for="nome">Nome <span style="font-size:.8em;color:#E53935;">*</span></label>
                                   <input type="text" placeholder="Insira o nome completo..." required>
                               </div>
                               <!-- <div class="form__fields">
                                   <label for="celular">Celular <span style="font-size:.8em;color:#E53935;">*</span></label>
                                   <input type="text" name="cel" placeholder="Ex:(41) 99999-9999" maxlength="15" onkeypress="mascaraCelular(formSignUp.cel)" onblur="validaCelular(formSignUp.cel)" required>
                                   <p class="alert" style="display:none;">Celular Inválido</p>
                               </div> -->
                               <div class="form__fields">
                                   <label for="senha">Senha <small style="font-weight:normal;font-size:.75em;">( 6 à 32 caractéres )</small> <span style="font-size:.8em;color:#E53935;">*</span></label>
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
