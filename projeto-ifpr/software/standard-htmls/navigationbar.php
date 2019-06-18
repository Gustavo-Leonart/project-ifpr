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
                <span style="margin-right:16px;color:rgba(0,0,0,.54);text-transform:capitalize;">
                    <?php
                      if(!isset($_SESSION)) session_start();
                      echo 'Olá, '.$_SESSION['nome'];
                    ?>
                </span>

                </li>
                <button class="btn" type="button" name="button" data-toggle="dropdown">
                    <span class="fas fa-bars"></span>
                </button>
                <ul class="dropdown-menu">
                    <li class="menu__item"><a href="#"class="dropdown-item" data-toggle="modal" data-target="#cadastrar__modal">Registrar usuário</a></li>
                    <li class="dropdown-submenu menu__item" >
                        <a href="#" class="dropdown-toggle dropdown-item">Produtos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tipo_produto.php">Tipos de produtos</a></li>
                            <li><a class="dropdown-item" href="produtos.php">Cadastrar Produtos</a></li>
                            <li><a class="dropdown-item" href="visualizarproduto.php">Consultar Estoque</a></li>
                        </ul>
                    </li>
                    <li class="menu__item"><a class="dropdown-item" href="agendamento.php">Agendamentos</a></li>
                    <li class="menu__item"><a class="dropdown-item" href="fornecedor.php">Fornecedores</a></li>
                    <li class="menu__item"><a class="dropdown-item" href="cliente.php">Clientes</a></li>
                    <li class="menu__item"><a class="dropdown-item" href="menu.php">Adiconar Receitas</a></li>
                    <li class="menu__item"><a class="dropdown-item" href="visualizarReceitas.php">Consultar Receitas</a></li>
                    <li class="menu__item"><a class="dropdown-item" href="pedido.php">Pedidos</a></li>
                    <li class="menu__item"><a class="dropdown-item" href="sobre&contato.php">Sobre</a></li>
                    <li class="menu__item"><a class="dropdown-item" href="sair.php">Sair <span class="fas fa-sign-out-alt"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

   <!-- Modal de cadastro -->
   <div class="modal fade" id="cadastrar__modal" role="dialog">
         <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" style="text-align: center; font-size: 2.2em;">Cadastro</h4>
                     <button class="close" type="button" data-dismiss="modal">
                         &times;
                     </button>
                 </div>
                 <div class="modal-body">
                   <form name="formSignUp" action="cadastroBD.php">
                       <div class="form__modal__container">
                           <div class="modal__fields">
                               <div class="fields__block">
                                   <label for="email">E-mail</label>
                                   <input type="email" name="email"  placeholder="exemplo@hotmail.com..." required>
                               </div>
                               <div class="fields__block">
                                   <label for="nome">Nome <span style="font-size:.8em;color:#E53935;">*</span></label>
                                   <input type="text" name= "nome"  placeholder="Insira o nome completo..." required>
                               </div>
                               <div class="fields__block">
                                   <label for="senha">Senha <small style="font-weight:normal;font-size:.75em;">( 4 à 16 caractéres )</small> <span style="font-size:.8em;color:#E53935;">*</span></label>
                                   <input type="password" pattern=".{4,16}" name = "senha" placeholder="Digite uma senha..." required>
                               </div>
                           </div>
                       </div>
                       <!-- buttons area -->
                       <div class="buttons__area">
                           <div class="modal__button">
                               <button type="reset" class="button__clean"><span> Limpar</span></button>
                           </div>
                           <div class="modal__button">
                               <button type="submit" class="button__submit" ><span> Concluir</span></button>
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
    $("#cadastrar").click(function(){
        $("#cadastrar__modal").modal();
    });

</script>
