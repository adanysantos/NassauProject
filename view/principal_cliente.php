<?php
include '../model/conexao.php';
include_once ("../controller/funcoes.php");

if(isset($_SESSION['idCliente']) && !empty($_SESSION['idCliente'])):
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
      
      

  </style>

  <title>HELPDESK - CLIENTE</title>
</head>

<body class="fundo2" id="container-imagem">
<div >
  <div class="wrapper">
    <div class="sidebar">
    <img src="../img/logo.png" class="img-menu"></>
      <ul>
        <li><a href="principal_cliente.php"><i class="fas fa-home"></i>Home</a></li>
        <li><a onclick="ExibeConteudo(2)"><i class="fas fa-address-card"></i>Chamados</a></li>
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
        echo "Bem-vindo, <strong>" . $_SESSION['nomeCliente'] . "</strong>";
        // echo consultaCliente();
        ?>
        <a type="button" class="btn btn_login float-right" href="../controller/logout_cliente.php">Sair</a>
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
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(1)"><i class="fas fa-user-shield" style="border:none!important"></i> Abrir Chamado</button>

              </div>
            </div>
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(3)"><i class="fas fa-user"></i> Consultar Chamados</button>

              </div>
            </div>
           

          </div>
        </div>
      <div class="card-body">
            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Abrir Chamado</h1>
            </div>
            <hr>
            <form method="POST" action="../controller/abrirChamado_cliente.php">
              <div class="form-row">
              <div class="form-group col-md-12">
                  <label for="inputEmail4">Nome</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="nome" id="inputNome" class="form-control" placeholder="<?php echo  $_SESSION['nomeCliente'];?>" disabled>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nome da Empresa</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                    </div>
                    <input type="text" name="nome_empresa" id="inputEmpresa" class="form-control" placeholder="<?php echo  $_SESSION['empresaCliente'];?>" disabled>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Setor</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input type="text" name="setor" id="inputSetor" class="form-control" placeholder="<?php echo $_SESSION['setorCliente'];?>" disabled>
                  </div>

                </div> 
              <div class="form-group col-md-12">
              <label for="inputState">Selecione o Serviço</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-chart-area"></i></label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="tipo_servico">
                  <option selected>Escolher...</option>
                  <option value="Hardware">Hardware</option>
                  <option value="Software">Software</option>
                  <option value="Telecomunicações">Telecomunicações</option>
                  <option value="Outros">Outros</option>
                </select>

              </div>
            </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                <label for="inputPassword4">Tipos de Serviços</label>
                <textarea class="form-control" style="width: 100%; height: 130px;" type="text" placeholder="HARDWARE: Monitor, Teclado, Mouse, Impressora, e etc..&#10;SOFTWARE: Sistema Operacional, Pacote Office, Browser, e etc..&#10;TELECOMUNICAÇÕES: Cabos de par-trançados, Telefonia, e etc..&#10;OUTROS: Problema específico não identificado, sujeito a ánalise tecnica." readonly></textarea>
                  
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="exampleFormControlTextarea1">Comentários</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="descricao"></textarea>

                  
                </div>
              </div>
              
              <button type="submit" class="btn btn_login">Enviar</button>
          
           
              </form>
          </div>

      `

    }

    if(n == 2){
      campo.innerHTML = `
      <div class="info">
          <div class="row col-md-12">
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(1)"><i class="fas fa-user-shield" style="border:none!important"></i> Abrir Chamado</button>

              </div>
            </div>
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(3)"><i class="fas fa-user"></i> Consultar Chamados</button>

              </div>
            </div>
           

          </div>
        </div>

     

      `
    }
    if(n==3){
      campo.innerHTML = `
      <div class="info">
          <div class="row col-md-12">
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(1)"><i class="fas fa-user-shield" style="border:none!important"></i> Abrir Chamado</button>

              </div>
            </div>
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(3)"><i class="fas fa-user"></i> Consultar Chamados</button>

              </div>
            </div>
           

          </div>
        </div>

      <div class="card-body">
            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Painel de Chamados</h1>
            </div>
            <hr>
            <?php
            exibeChamadoCliente();
            ?>
            </tbody>
            </table> 
          </div>

      `

    }

      
}

</script>

</html>

<?php else: header("Location: ../view/login/login_cliente.php"); endif; ?>