<?php
include '../model/conexao.php';
include_once ("../controller/funcoes.php");

if(isset($_SESSION['idGestor']) && !empty($_SESSION['idGestor'])):



// include_once("../consultaCliente.php");
// include("../funcoes/exibeTecnico.php");
// include("../funcoes/listaChamados.php");

//Lista todos os chamados
// $resultado = "SELECT c.idChamado,c.data_abertura, c.tipo_servico, c.desc_problema, c.estado,c.prioridade, tec.nome_tecnico FROM chamado c JOIN tecnico tec ON c.idTecnico = tec.idTecnico";
// $resultado_chamado = mysqli_query($conn, $resultado);


?>
<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="author" content="John Júnior">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
  <link href="../img/icone.png" rel="icon">
  <script src="../jquery/dist/jquery.js"></script>
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
label{
  font-weight: 700;
}
#estado{
  height: 2px;
}
  </style>

  <title>HELPDESK - GESTOR</title>
</head>

<body class="fundo2" id="container-imagem">
<div >
  <div class="wrapper">
    <div class="sidebar">
      <img src="../img/logo.png" class="img-menu"></>
      <ul>
        <li><a href="principal_gestor2.php"><i class="fas fa-home"></i>Home</a></li>
        <li><a onclick="ExibeConteudo(5)"><i class="fas fa-address-card"></i>Chamados</a></li>
        <li><a onclick="ExibeConteudo(1)"><i class="fas fa-user"></i>Cadastros</a></li>
        <li><a onclick="ExibeConteudo(7)"><i class="fas fa-address-book"></i>Técnicos</a></li>  
        <li><a onclick="ExibeConteudo(8)"><i class="fas fa-address-book"></i>Clientes</a></li> 
        <li><a href="#"><i class="fas fa-project-diagram"></i>Relatórios</a></li>
        <li><a onclick="ExibeConteudo(1)"><i class="fas fa-blog"></i>Painel</a></li>
      </ul>
      <div class="redes_sociais">
        <!-- <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a> -->
        <!-- <footer class="footer">
          <p align="ritgh">Copyright &copy; 2020 - Desenvolvido pela <strong>Equipe de Desenolvimento - SI</strong> - Todos os direitos reservados.
              </p> 
        </footer>  -->
      </div>
    </div>


    <div class="main_content">
      <div class="header">
        <i class="fas fa-user-tag "></i>
        <?php
        echo "Bem-vindo, <strong>" . $_SESSION['nomeGestor'] . "</strong>";
        // echo consultaCliente();
        ?>
        <a type="button" class="btn btn_login float-right" href="../controller/logout_gestor.php">Sair</a>
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
   // 
    if(n == 1){
        campo.innerHTML= `
               
          <div class="row col-md-12">
            <div class="btn btn_login col-4">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(2)"><i class="fas fa-user-shield" style="border:none!important"></i> Cadastrar Técnico</button>

              </div>
            </div>
            <div class="btn btn_login col-4">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(1)"><i class="fas fa-user"></i> Cadastrar Cliente</button>

              </div>
            </div>
            <div class="btn btn_login col-4">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(3)"><i class="fas fa-user"></i> Cadastrar Gestor</button>

              </div>
            </div>
          
          </div>
        

          <div class="card-body">
            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Cadastrar Cliente</h1>
            </div>
            <hr>
            <form method="POST" action="../controller/cadastroCliente.php">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Nome</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Nome" require>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Login</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                    </div>
                    <input type="text" name="email" id="inputEmail" class="form-control" placeholder="E-mail" require>
                  </div>

                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Nome da Empresa</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                    </div>
                    <input type="text" name="nome_empresa" id="inputEmpresa" class="form-control" placeholder="Digite o nome da sua empresa" require>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Setor</labeld4>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input type="text" name="setor" id="inputSetor" class="form-control" placeholder="Ex: Admin, Financeiro, Logistica, etc.." require>
                  </div>

                </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                  <label>Telefone</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input type="text" name="telefone" id="inputTelefone" class="form-control" placeholder="(DDD) XXXXX-XXXX" require>
                  </div>

                </div>
                  <div class="form-group col-md-6">
                  <label>Senha</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Crie uma senha para acesso" require>
                  </div>

            </div>
              </div>
              <button type="submit" class="btn btn_login" name="btnCadCli">Cadastrar</button>
          
          
              </form>
          </div>

        
        
        
    
        
        `
    }
    if(n == 2){
      campo.innerHTML = `
    
          <div class="row col-md-12">
            <div class="btn btn_login col-4">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(2)"><i class="fas fa-user-shield" style="border:none!important"></i> Cadastrar Técnico</button>

              </div>
            </div>
            <div class="btn btn_login col-4">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(1)"><i class="fas fa-user"></i> Cadastrar Cliente</button>

              </div>
            </div>
            <div class="btn btn_login col-4">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(3)"><i class="fas fa-user"></i> Cadastrar Gestor</button>

              </div>
            </div>       

          </div>
       

      <div class="card-body">
            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Cadastrar Técnico</h1>
            </div>
            <hr>
            <form method="POST" action="../controller/cadastroTecnico.php">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Nome</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Nome" require>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>E-mail</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                    </div>
                    <input type="text" name="email" id="inputEmail" class="form-control" placeholder="E-mail" require>
                  </div>

                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>CPF</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                    </div>
                    <input type="number" name="cpf" id="inputCpf"  class="form-control" placeholder="CPF" maxlength="11" require>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Telefone</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input type="text" name="telefone" id="inputTelefone" class="form-control" placeholder="Telefone" maxlength="12" require>
                  </div>

                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Área de Atuação</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <label class="input-group-text"lect01"><i class="fas fa-chart-area"></i></label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="area_atuacao">
                      <option selected>Escolher...</option>
                      <option value="Hardware">Hardware</option>
                      <option value="Software">Software</option>
                      
                    </select>

                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Senha</label>
                  <div class="input-group">
                    
                   
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Crie uma senha para acesso" require>
                  </div>

              
                </div>
              </div>
              <button type="submit" class="btn btn_login">Cadastrar</button>
          
              
              </form>
          </div>

      `
    }

    if(n == 3){
      campo.innerHTML = `
      
      <div class="row col-md-12">
        <div class="btn btn_login col-4">
          <div class="btn btn_login">
          <button type="submit" class="btn btn_login" onclick="ExibeConteudo(2)"><i class="fas fa-user-shield" style="border:none!important"></i> Cadastrar Técnico</button>

          </div>
        </div>
        <div class="btn btn_login col-4">
          <div class="btn btn_login">
          <button type="submit" class="btn btn_login" onclick="ExibeConteudo(1)"><i class="fas fa-user"></i> Cadastrar Cliente</button>

          </div>
        </div>
        <div class="btn btn_login col-4">
          <div class="btn btn_login">
          <button type="submit" class="btn btn_login" onclick="ExibeConteudo(3)"><i class="fas fa-user"></i> Cadastrar Gestor</button>

          </div>
        </div>
        

      </div>
    
      <div class="card-body">
            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Cadastrar Gestor</h1>
            </div>
            <hr>
            <form method="POST" action="../controller/cadastroGestor.php">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Nome</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Nome" require>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>E-mail</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                    </div>
                    <input type="text" name="email" id="inputEmail" class="form-control" placeholder="E-mail" require>
                  </div>

                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>CPF</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                    </div>
                    <input type="text" name="cpf" id="inputCpf" class="form-control" placeholder="CPF" require>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <labeld>Telefone</labeld>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input type="text" name="telefone" id="inputTelefone" class="form-control" placeholder="Telefone" require>
                  </div>

                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                <label>Senha</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Crie uma senha para acesso" require>
                </div>
                  
                </div>
              </div>
              <button type="submit" class="btn btn_login">Cadastrar</button>
          
             
              </form>
          </div>

      `
    }

    if(n == 4){
      campo.innerHTML = `
      
          <div class="row col-md-12">
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(4)"><i class="fas fa-user-shield" style="border:none!important"></i> Abrir Chamado</button>

              </div>
            </div>
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(6)"><i class="fas fa-user"></i> Consultar Chamados</button>

              </div>
            </div>
           

          </div>
      
      <div class="card-body">
            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Abrir Chamado</h1>
            </div>
            <hr>
            <form method="POST" action="../controller/abrirChamadoCliente.php">
              <div class="form-row">
              <div class="form-group col-md-12">
                  <label>Nome Cliente</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>

                    <?php
                    
                    $pdo = Conexao();
                    $consulta = $pdo->query("SELECT idCliente, nome, email, telefone, nome_empresa, setor FROM cliente");
                    ?>
                    <!--<input type="text" name="nome" id="inputNome" class="form-control" placeholder="<?php //echo $_SESSION['nomeGestor']?>" disabled>-->
                    <select class="custom-select" id="inputGroupSelect01" name="cliente">
                    <option selected disabled value="0">Escolher...</option>
                    <?php
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
              ?>
               
                <option value="<?php echo $linha['idCliente'];?>"><?php echo $linha['nome']. " - ". $linha['nome_empresa'];?></option>
                <?php
            }
            ?>
                                      
                    </select>

                  </div>
                </div>
             <div class="form-group col-md-6">
                  <label>Data de Abertura</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                    </div>
                    <input type="date" name="data" class="form-control" placeholder="Data atual">
                  </div>
                </div>
          <!--      <div class="form-group col-md-6">
                  <label>Setor</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input type="text" name="setor" id="inputSetor" class="form-control" placeholder="Ex: Admin, Financeiro, Logistica, etc.." disabled>
                  </div>

                </div> -->
              <div class="form-group col-md-12">
              <label>Selecione o Serviço</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="input-group-text"lect01"><i class="fas fa-chart-area"></i></labeld4>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="tipo_servico">
                  <option selected disabled value="0">Escolher...</option>
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
                <label>Tipos de Serviços</label>
                <textarea class="form-control" style="width: 100%; height: 130px;" type="text" placeholder="HARDWARE: Monitor, Teclado, Mouse, Impressora, e etc..&#10;SOFTWARE: Sistema Operacional, Pacote Office, Browser, e etc..&#10;TELECOMUNICAÇÕES: Cabos de par-trançados, Telefonia, e etc..&#10;OUTROS: Problema específico não identificado, sujeito a ánalise tecnica." readonly></textarea>
                  
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Comentários</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="descricao"></textarea>

                  
                </div>
              </div>
              
              <button type="submit" class="btn btn_login">Abrir Chamado</button>
          
           
              </form>
          </div>

      `

    }

    if(n == 5){
      campo.innerHTML = `
     
          <div class="row col-md-12">
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(4)"><i class="fas fa-user-shield" style="border:none!important"></i> Abrir Chamado</button>

              </div>
            </div>
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(6)"><i class="fas fa-user"></i> Consultar Chamados</button>

              </div>
            </div>
           

          </div>
      

     

      `
    }
    if(n==6){
      campo.innerHTML = `
    
          <div class="row col-md-12">
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(4)"><i class="fas fa-user-shield" style="border:none!important"></i> Abrir Chamado</button>

              </div>
            </div>
            <div class="btn btn_login col-6">
              <div class="btn btn_login">
              <button type="submit" class="btn btn_login" onclick="ExibeConteudo(6)"><i class="fas fa-user"></i> Consultar Chamados</button>

              </div>
            </div>
           

          </div>
  
         
      <div class="card-body">
      
            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Painel de Chamados</h1>
            </div>
            <hr>
              <?php exibeChamados();?>
           
          </div>
         

      `

    }

    if(n == 7){
      campo.innerHTML = `
      

      <div class="card-body">
            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Painel de Técnicos</h1>
            </div>
            <hr>
          <?php exibeTecnicos();?>
          </div>

      `

    }

    if(n == 8){
      campo.innerHTML = `
      

      <div class="card-body">
            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Painel de Clientes</h1>
            </div>
            <hr>
     
           <?php exibeClientes();?>
          </div>

      `

    }


      
}

</script>

</html>

<div class="modal fade bd-example-modal-lg col-12" tabindex="-1" role="dialog" id="modal1">
  <div class="modal-dialog modal-lg col-12" role="document">
    <div class="modal-content" style="width: 1300px;margin-left: -200px;">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Atualização de Chamados <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-repeat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
</svg>
              
              </h1>
            </div>
            

            <?php exibeChamadosModal();?>

          </div>
        </div>  
      </div>
    </div>
  </div>
</div>

<?php else: header("Location: ../view/login/login.php"); endif; ?>