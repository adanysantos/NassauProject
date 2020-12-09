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
                    
                  //  $pdo = Conexao();
                  //  $consulta = $pdo->query("SELECT idCliente, nome, email, telefone, nome_empresa, setor FROM cliente");
                  exibeSelect();
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