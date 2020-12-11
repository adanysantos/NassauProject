
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css">
    <link href="../../img/icone.png" rel="icon">
    <script src="../../jquery/dist/jquery.mim.js"></script>
    <script src="../../popper.js/dist/popper.min.js"></script>
    <script src="../../bootstrap/dist/js/bootstrap.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.css">
    
    <!--node_modules/css/styles.css-->
    <!--<link type= "text/css"  rel="stylesheet" href="node_modules/css/styles.css">-->
    <link href="../../fontawesome/css/all.css" rel="stylesheet">
    <link type= "text/css"  rel="stylesheet" href="../../css/estilo_login.css">
    <title>HELPDESK | Login | Técnico</title>
    


</head>
<body>
    <div class="login">
        <img src="../../img/usuario.png" class="usuario" width="100" height="100" alt="">
        <h1>Login</h1>
        <h5>TÉCNICO</h5>
        <form method="POST" action="../../controller/validaTecnico.php">
        <div class="form-group">
             <p>Nome</p>
               <div class="input-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" name="email" id="inputNome" class="form-control" placeholder="Insira seu e-mail" required>
                </div>
        </div>
        <div class="form-group">
             <p>Senha</p>
                <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                   </div>
               <input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Insira sua senha" required>
                </div>
        </div>
            <!-- <i class="fas fa-user"></i><p>Usuário</p>
            <input type="text" name="email" placeholder="Insira seu e-mail"> -->
            <!-- <p>Senha</p>
            <input type="password" name="senha" placeholder="Insira sua senha"> -->
            <input type="submit" name="" value="Login">
            <a href="#">Esqueceu sua senha?</a><br>
            <!-- <a href="#">Ainda não possui uma conta?</a> -->

        </form>


    </div>

    <!-- Exibe mensagem de erro -->
    <div class="col-6 alerta">
        <p class="text-center  alert-danger">
            <?php
            if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }

            ?>
        </p>
    </div>
        
</body>
</html>