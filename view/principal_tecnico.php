<?php
include '../model/conexao.php';

if(isset($_SESSION['idTecnico']) && !empty($_SESSION['idTecnico'])):


include_once("../consultaCliente.php");
include_once("../controller/tecnico/painel_chamado.php");
// include("../funcoes/encerraChamado.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
  <link href="../img/icone.png" rel="icon">
  <script src="../jquery/dist/jquery.mim.js"></script>
  <script src="../popper.js/dist/popper.min.js"></script>
  <script src="../bootstrap/dist/js/bootstrap.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">

  <!--node_modules/css/styles.css-->
  <!--<link type= "text/css"  rel="stylesheet" href="node_modules/css/styles.css">-->
  <link href="../fontawesome/css/all.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../css/style.css">
  <!--<link rel="stylesheet" href="node_modules/css/botoes.scss">-->
  <style>
    .btn_login {
      background-color: #4b4276;
      font-weight: 600;
      color: white;
      align: left;
      
    }

    .btn_login:hover {
      background-color: #594f8d;
      font-weight: 600;
      color: white;
      
    }
    .btn_login:focus{
      outline: none;
  box-shadow: none;
    }
    .tabela{
      background-color: #4b4276;
      color: white;
    }

    .footer p{
      margin-top: 12px;
      margin-left: -5px;
      color: white;
      font-size: 12px;
      font-family:'Open Sans', sans-serif;
}
      
}
  </style>

  <title>HELPDESK - TÉCNICO</title>
</head>

<body class="fundo2" id="container-imagem">
<div >
  <div class="wrapper">
    <div class="sidebar">
    <img src="../img/logo.png" class="img-menu"></>
      <ul>
        <li><a href="principal_tecnico.php"><i class="fas fa-home"></i>Home</a></li>
        <li><a onclick="ExibeConteudo(1)"><i class="fas fa-address-card"></i>Meus Chamados</a></li>
        <li><a href="#"><i class="fas fa-project-diagram"></i>Relatórios</a></li>
      </ul>
      <div class="redes_sociais">
        <!-- <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a> -->
        <footer class="footer">
          <p align="ritgh">Copyright &copy; 2020 - Desenvolvido pela <strong>Equipe de Desenolvimento - SI</strong> - Todos os direitos reservados.
              </p> 
        </footer> 
      </div>
    </div>


    <div class="main_content">
      <div class="header alert alert-success">
        <i class="fas fa-user-tag "></i>
        <?php
        echo "Bem-vindo, <strong>" . $_SESSION['tecnicoNome'] . "</strong>";
        // echo consultaCliente();
        ?>
        <a type="button" class="btn btn_login float-right" href="../controller/logout_tecnico.php">Sair</a>
      </div>
      <div class="magica" id="div2">

        <div class="info">
          
        </div>
      </div>
      <div class="col-12">
        <div class="card col-12" id="div1">

        </div>
      </div>
    </div>

  </div>

  </div>

  </div>
        </div>  
</body>

<!--<script src="node_modules/js/funcoes.js"></script>-->
<script>
var campo = document.querySelector('#div1');
function ExibeConteudo(n) {

    if(n == 1){
      campo.innerHTML = `
      <div class="info">
          <div class="row col-md-12">
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(3)"><i class="fas fa-user-shield" style="border:none!important"></i> Fechados</button>

              </div>
            </div>
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(2)"><i class="fas fa-user"></i> Consultar Chamados</button>

              </div>
            </div>
           

          </div>
        </div>
      `

    }


    if(n == 2){
      campo.innerHTML = `<?php exibeChamado();?>`
    }
    if(n == 3){
      campo.innerHTML = `<?php chamadosFechados();?>`
    }


      
}

</script>

</html>
<?php else: header("Location: ../view/login/login_tecnico.php"); endif; ?>