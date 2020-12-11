<?php


if($_POST['cliente'] == 0  && $_POST['tipo_servico'] = 0 && empty($_POST['descricao'])){

    echo "<script>alert ('Preencha todos os campos!!');</script>";
} else{
    require '../model/conexao.php';
    require '../controller/Cliente.class.php';
    
    $conn = Conexao();
    $gestor = new Cliente();

    $cliente = $_POST['cliente'];
    $tipo_servico = $_POST['tipo_servico'];
    $desc_problema = addslashes($_POST['descricao']);
    $data = $_POST['data'];
    $estado = "Aberto";
    $tecnico = 14;
   


    if($gestor->abrirChamadoCliente($cliente, $tipo_servico, $desc_problema, $estado, $tecnico,$data) == true){
        echo "<script>
                alert ('Chamado cadastrado com sucesso!');window.location.href='../view/principal_cliente.php';        
                </script>";
    }else{
        "<script>alert ('Erro ao abrir chamado!!');</script>";
    }

}