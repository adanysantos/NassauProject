<?php
include '../model/conexao.php';

if(isset($_SESSION['idGestor']) && !empty($_SESSION['idGestor'])):



include_once("../consultaCliente.php");
// include("../funcoes/exibeTecnico.php");
include("../funcoes/listaChamados.php");

//Lista todos os chamados
$resultado = "SELECT c.idChamado,c.data_abertura, c.tipo_servico, c.desc_problema, c.estado,c.prioridade, tec.nome_tecnico FROM chamado c JOIN tecnico tec ON c.idTecnico = tec.idTecnico";
$resultado_chamado = mysqli_query($conn, $resultado);


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

  <title>HELPDESK - GESTOR</title>
</head>

<body class="fundo2" id="container-imagem">
<div >
  <div class="wrapper">
    <div class="sidebar">
      <img src="../img/logo.png" class="img-menu"></>
      <ul>
        <li><a href="principal_gestor.php"><i class="fas fa-home"></i>Home</a></li>
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
        <footer class="footer">
          <p align="ritgh">Copyright &copy; 2020 - Desenvolvido pela <strong>Equipe de Desenolvimento - SI</strong> - Todos os direitos reservados.
              </p> 
        </footer> 
      </div>
    </div>


    <div class="main_content">
      <div class="header">
        <i class="fas fa-user-tag "></i>
        <?php
        echo "Bem-vindo, <strong>" . $_SESSION['gestorNome'] . "</strong>";
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
            <form method="POST" action="../cadastro_cliente.php">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nome</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Nome" require>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Login</label>
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
                  <label for="inputEmail4">Nome da Empresa</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                    </div>
                    <input type="text" name="nome_empresa" id="inputEmpresa" class="form-control" placeholder="Digite o nome da sua empresa" require>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Setor</label>
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
                  <label for="inputPassword4">Telefone</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input type="text" name="telefone" id="inputTelefone" class="form-control" placeholder="(DDD) XXXXX-XXXX" require>
                  </div>

                </div>
                  <div class="form-group col-md-6">
                  <label for="inputPassword4">Senha</label>
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
            <form method="POST" action="../cadastro_tecnico.php">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nome</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Nome" require>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">E-mail</label>
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
                  <label for="inputEmail4">CPF</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                    </div>
                    <input type="number" name="cpf" id="inputCpf"  class="form-control" placeholder="CPF" maxlength="11" require>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Telefone</label>
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
                  <label for="inputState">Área de Atuação</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-chart-area"></i></label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="area_atuacao">
                      <option selected>Escolher...</option>
                      <option value="Hardware">Hardware</option>
                      <option value="Software">Software</option>
                      
                    </select>

                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputState">Senha</label>
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
            <form method="POST" action="../cadastro_gestor.php">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nome</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Nome" require>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">E-mail</label>
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
                  <label for="inputEmail4">CPF</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                    </div>
                    <input type="text" name="cpf" id="inputCpf" class="form-control" placeholder="CPF" require>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Telefone</label>
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
                <label for="inputPassword4">Senha</label>
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
            <form method="POST" action="../abrir_chamado.php">
              <div class="form-row">
              <div class="form-group col-md-12">
                  <label for="inputEmail4">Nome</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="nome" id="inputNome" class="form-control" placeholder="<?php echo $_SESSION['gestorNome']?>" disabled>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nome da Empresa</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                    </div>
                    <input type="text" name="nome_empresa" id="inputEmpresa" class="form-control" placeholder="Digite o nome da sua empresa" disabled>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Setor</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input type="text" name="setor" id="inputSetor" class="form-control" placeholder="Ex: Admin, Financeiro, Logistica, etc.." disabled>
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
            <?php
            //Consulta no banco
              // $resultado = "SELECT c.idChamado,c.data_abertura, c.tipo_servico, c.desc_problema, c.estado, tec.nome_tecnico FROM chamado c JOIN tecnico tec ON c.idTecnico = tec.idTecnico";
              // $resultado_chamado = mysqli_query($conn, $resultado);
            //  $result_chamado = "SELECT c.idChamado,c.data_abertura, c.tipo_servico, c.desc_problema, c.estado tec.nome FROM chamado c JOIN tecnico tec ON c.idTecnico = tec.idTecnico";
            //  $resultado_chamado_join = mysqli_query($conn, $result_chamado);
            // while( $linha_join = mysqli_fetch_assoc($resultado_chamado_join)){  
             //     $varia = $linha_join['nome'];
            //     }
            
            
            ?>
           
            <table class="table table-striped">
            
            <thead class="tabela">
            
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Criado em</th>
              <th scope="col">Produto</th>
              <th scope="col">Técnico</th>
              <th scope="col">Descrição</th>
              <th scope="col">Status</th>
              <th scope="col">Prioridade</th>
              <th scope="col">Salvar</th>
            </tr>
            
            </thead>  
            <tbody>
            <?php
            
              while($linha_chamado = mysqli_fetch_assoc($resultado_chamado)){
                
            ?>  
               <tr>
               <form method="POST" action="../update_chamado.php">
                <input type="hidden" name="<?php $linha_chamado['idChamado'];?>">
                  <th scope="col">#<?php echo $linha_chamado['idChamado'];?></th>
                  <th scope="col"><?php echo date("d/m/Y", strtotime($linha_chamado['data_abertura']));?></th> 
                  <th scope="col"><?php echo $linha_chamado['tipo_servico'];?></th>
                  <th scope="col"><?php echo $linha_chamado['nome_tecnico']?></th>
                  <th scope="col"><?php echo $linha_chamado['desc_problema'];?></th>
                  <th scope="col">
                  <?php 
                  if ($linha_chamado['estado'] === "Aberto") {?>
                      <span class="alert-danger"><?php echo $linha_chamado['estado'];?></span></th>
                 <?php     
                  } elseif ($linha_chamado['estado'] === "Em andamento") {?>
                     <span class="alert-warning"><?php echo $linha_chamado['estado'];?></span></th>
                 <?php   
                  } elseif ($linha_chamado['estado'] === "Fechado") {?>
                      <span class="alert-success"><?php echo $linha_chamado['estado'];?></span></th>
                  <?php    
                  }
                  
                  ?>
                  </th>
                  <th scope="col"><?php echo $linha_chamado['prioridade'];?></th>

                  <th scope="col">
                  <?php
                  if($linha_chamado['estado'] === "Fechado"){

                  }else{?>
                    <a href="../painel_chamados.php" style="color:#4b4276";><i class="fas fa-edit" style="color:#4b4276";></i></a>
                  <?php  
                  }
                  ?>
                  </th>
                  </form>
                </tr>
                
            <?php
              }
            
            ?>
             
              
            </tbody>
            
            </table> 
           
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
            <?php
            //Consulta no banco
              $resultado = "SELECT idTecnico, nome_tecnico, email, cpf, telefone, area_atuacao FROM tecnico";
              $resultado_tecnico = mysqli_query($conn, $resultado);
            //  $result_chamado = "SELECT c.idChamado,c.data_abertura, c.tipo_servico, c.desc_problema, c.estado tec.nome FROM chamado c JOIN tecnico tec ON c.idTecnico = tec.idTecnico";
            //  $resultado_chamado_join = mysqli_query($conn, $result_chamado);
            // while( $linha_join = mysqli_fetch_assoc($resultado_chamado_join)){  
             //     $varia = $linha_join['nome'];
            //     }
            
            
            ?>
            <table class="table table-striped">
            <thead class="tabela">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col">Área de Atuação</th>
            
            </tr>
            </thead>  
            <tbody>
            <?php
            
              while($linha_tecnico= mysqli_fetch_assoc($resultado_tecnico)){
                
            ?>    
                <tr>
                  <th scope="col">#<?php echo $linha_tecnico['idTecnico'];?></th>
                  <th scope="col"><?php echo $linha_tecnico['nome_tecnico'];?></th>
                  <th scope="col"><?php echo $linha_tecnico['email'];?></th>
                  <th scope="col"><?php echo $linha_tecnico['cpf'] ?></th>
                  <th scope="col"><?php echo $linha_tecnico['telefone'];?></th>
                  <th scope="col"><?php echo $linha_tecnico['area_atuacao'];?></th>
                </tr>
            <?php
              }
            
            ?>
            </tbody>
            </table> 
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
            <?php
            //Consulta no banco
              $resultado = "SELECT idCliente, nome, email, telefone, nome_empresa, setor FROM cliente";
              $resultado_cliente = mysqli_query($conn, $resultado);
            //  $result_chamado = "SELECT c.idChamado,c.data_abertura, c.tipo_servico, c.desc_problema, c.estado tec.nome FROM chamado c JOIN tecnico tec ON c.idTecnico = tec.idTecnico";
            //  $resultado_chamado_join = mysqli_query($conn, $result_chamado);
            // while( $linha_join = mysqli_fetch_assoc($resultado_chamado_join)){  
             //     $varia = $linha_join['nome'];
            //     }
            
            
            ?>
            <table class="table table-striped">
            <thead class="tabela">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Empresa</th>
            <th scope="col">Setor</th>
            
            </tr>
            </thead>  
            <tbody>
            <?php
            
              while($linha_cliente= mysqli_fetch_assoc($resultado_cliente)){
                
            ?>    
                <tr>
                  <th scope="col">#<?php echo $linha_cliente['idCliente'];?></th>
                  <th scope="col"><?php echo $linha_cliente['nome'];?></th>
                  <th scope="col"><?php echo $linha_cliente['email'];?></th>
                  <th scope="col"><?php echo $linha_cliente['telefone'] ?></th>
                  <th scope="col"><?php echo $linha_cliente['nome_empresa'];?></th>
                  <th scope="col"><?php echo $linha_cliente['setor'];?></th>
                </tr>
            <?php
              }
            
            ?>
            </tbody>
            </table> 
          </div>

      `

    }


      
}

</script>

</html>
<?php else: header("Location: ../view/login/login.php"); endif; ?>