<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="css/navigationbar.css" />
    <link rel="stylesheet" href="css/modals.css" />
    <link rel="stylesheet" href="css/footer.css">
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
           </div>
        </div>
    </nav>

    <!-- mdoal de login -->
    <div class="modal fade" id="login__modal">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" style="text-align: center; font-size: 2.2em;">Login</h4>
                   <button class="close" type="button" data-dismiss="modal">
                       &times;
                   </button>
               </div>
               <div class="modal-body">
                   <form class="form__modal__container" action="loginBD.php" >
                       <div class="modal__fields">
                           <div class="fields__block">
                               <label for="login">Email</label>
                               <input type="text" name="email" placeholder="Insira seu email..." required>
                           </div>
                           <div class="fields__block">
                               <label for="password">Senha</label>
                               <input type="password" name="senha" value="" placeholder="Insira sua senha..." required>
                           </div>
                           <div class="buttons__area">
                               <div class="modal__button">
                                   <button type="submit" class="button__submit" ><span> Continuar</span></button>
                               </div>
                           </div>
                       </div>
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
    $("#login__modal").modal({backdrop: 'static', keyboard: false});
</script>
