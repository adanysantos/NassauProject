<?php


 function exibeTecnicos(){
  //  require '../model/conexao.php';

    $pdo = Conexao();
    $consulta = $pdo->query("SELECT idTecnico, nome_tecnico, email, cpf, telefone, area_atuacao FROM tecnico");

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
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
         // echo "Nome: {$linha['nome']} - Usuário: {$linha['usuario']}<br />";

    ?>
    <tr>
        <th scope="col"><?php echo $linha['idTecnico']; ?></th>
        <th scope="col"><?php echo $linha['nome_tecnico'] ;?></th>
        <th scope="col"><?php echo $linha['email']; ?></th>
        <th scope="col"><?php echo $linha['cpf'] ;?></th>
        <th scope="col"><?php echo $linha['telefone'] ;?></th>
        <th scope="col"><?php echo $linha['area_atuacao'] ;?></th>
        
    </tr>
      <?php }?>

    </tbody>
    </table> 
    <?php
 };

?>
<?php


function listaTecnicosSelect(){
    $pdo = Conexao();
    $consulta = $pdo->query("SELECT * FROM tecnico");
?>

                    <select class="custom-select" id="inputGroupSelect01" name="novo_tec">
                  
                      <option selected disabled value= "0">Escolher...</option>
                      <?php
                      while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                      ?>
                          <option value="<?php echo $linha['idTecnico'];?>"><?php echo $linha['nome_tecnico']; ?></option>
                      <?php
                      }
                      
                      ?>
                      
                    </select>

<?php

}

?>
<?php


function exibeClientes(){

    $pdo = Conexao();
    $consulta = $pdo->query("SELECT idCliente, nome, email, telefone, nome_empresa, setor FROM cliente");
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
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                // echo "Nome: {$linha['nome']} - Usuário: {$linha['usuario']}<br />";

            ?>
                <tr>
                  <th scope="col">#<?php echo $linha['idCliente'];?></th>
                  <th scope="col"><?php echo $linha['nome'];?></th>
                  <th scope="col"><?php echo $linha['email'];?></th>
                  <th scope="col"><?php echo $linha['telefone'] ?></th>
                  <th scope="col"><?php echo $linha['nome_empresa'];?></th>
                  <th scope="col"><?php echo $linha['setor'];?></th>
                </tr>

                <?php
              }
              ?>
            </tbody>
            </table>
<?php
                }
                                       
function exibeChamados() {

        $pdo = Conexao();
        $consulta = $pdo->query("SELECT c.idChamado,c.data_abertura, c.tipo_servico, c.desc_problema, c.estado,c.prioridade, tec.nome_tecnico FROM chamado c JOIN tecnico tec ON c.idTecnico = tec.idTecnico");
?>
          <table class="table table-striped" style="width:100%;">
            
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
          while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){

            ?>
                 <tr>
                 <form method="POST">
                <input type="hidden" name="<?php $linha['idChamado'];?>">
                  <th scope="col">#<?php echo $linha['idChamado'];?></th>
                  <th scope="col"><?php echo date("d/m/Y", strtotime($linha['data_abertura']));?></th> 
                  <th scope="col"><?php echo $linha['tipo_servico'];?></th>
                  <th scope="col"><?php echo $linha['nome_tecnico']?></th>
                  <th scope="col"><?php echo $linha['desc_problema'];?></th>
                  <th scope="col" id="estado">
                  <?php 
                  if ($linha['estado'] === "Aberto") {?>
                      <span class=" alert alert-danger"><?php echo $linha['estado'];?> <i class="fas fa-exclamation-triangle"></i></span></th>
                 <?php     
                  } elseif ($linha['estado'] === "Em andamento") {?>
                     <span class="alert alert-warning"><?php echo $linha['estado'];?> <i class="fas fa-spinner"></i></span></th>
                 <?php   
                  } elseif ($linha['estado'] === "Fechado") {?>
                      <span class=" alert alert-success"><?php echo $linha['estado'];?> <i class="fas fa-check-circle"></i></span></th>
                  <?php    
                  }
                  
                  ?>
                  </th>
                  <th scope="col"><?php echo $linha['prioridade'];?></th>

                  <th scope="col">
                  <?php
                  if($linha['estado'] === "Fechado"){

                  }else{?>
                    <a data-toggle="modal" data-target="#modal1" style="color:#4b4276";><i class="fas fa-edit" style="color:#4b4276";></i></a>
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
   <?php       
}  
           
function exibeChamadosModal() {
  $pdo = Conexao();
  $consulta = $pdo->query("SELECT c.idChamado,c.data_abertura, c.tipo_servico, c.desc_problema, c.estado,c.prioridade, tec.nome_tecnico, tec.idTecnico FROM chamado c JOIN tecnico tec ON c.idTecnico = tec.idTecnico");

?>           
            <table class="table table-striped table-responsive">
            
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
            
              while($linha_chamado = $consulta->fetch(PDO::FETCH_ASSOC)){
                
            ?>  
               <tr>
               <form method="POST" action="../controller/updateChamado.php">
           
                <input type="hidden" name="id_chamado" value="<?php echo $linha_chamado['idChamado']; ?>">
                  <th scope="col">#<?php echo $linha_chamado['idChamado'];?></th>
                  <th scope="col"><?php echo date("d/m/Y", strtotime($linha_chamado['data_abertura']));?></th> 
                  <th scope="col"><?php echo $linha_chamado['tipo_servico'];?></th>
                  <th scope="col">
                  <?php 
                    if($linha_chamado['idTecnico'] === 99){
                      listaTecnicosSelect();
                    }else{
                      echo $linha_chamado['nome_tecnico'];
                  }
                    ?>
                   
                  </th>
                  
                  <th scope="col"><?php echo $linha_chamado['desc_problema'];?></th>
                  <th scope="col">
                  <?php
                  if($linha_chamado['estado'] === "Fechado"){
                    echo $linha_chamado['estado'];
                   
                  }else{ ?>
                    
                    <select class="custom-select" id="inputGroupSelect02" name="estado_cham">
                        <option selected disabled value= "0">Escolher...</option>
                        <!-- <option value="Aberto">Aberto</option> -->
                        <option value="Em andamento">Em andamento</option>
                        <option value="Fechado">Fechado</option>
                    </select>
                    <?php
                  }
                  ?>
                  
                  </th>
                  <th scope="col">
                  <?php
                  if($linha_chamado['estado'] === "Fechado"){
                       echo $linha_chamado['prioridade'];
                   
                  }else{?>
                    
                    <select class="custom-select" id="inputGroupSelect03" name="prioridade">
                      <option selected disabled value= "0">Escolher...</option>
                      <option value="Alta">Alta</option>
                      <option value="Média">Média</option>
                      <option value="Leve">Leve</option>
                   </select>
                   <?php
                  }
                  ?>
                  </th>

                  <th scope="col">
                  <?php
                  if($linha_chamado['estado'] === "Fechado"){
                      
                   
                  }else{?>
                  <input type="submit" class="btn btn_login float-right" style="color:white;" value="Atualizar">
                  <?php
                  }?>
                  </th>
                  </form>
                </tr>
                
            <?php
              }
            
            ?>
             
              
            </tbody>
            
            </table> 
           
          </div>
         
       

        </div>




<?php
}
?>