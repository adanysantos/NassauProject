<?php


if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['nome_empresa']) && !empty($_POST['nome_empresa']) && isset($_POST['setor']) && !empty($_POST['setor']) && isset($_POST['telefone']) && !empty($_POST['telefone']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    require '../model/conexao.php';
    require '../controller/Cliente.class.php';
    require '../controller/Gestor.class.php';

    $conn = Conexao();
    $cliente = new Cliente();

    $nome = addslashes($_POST['nome']);
    $email_cliente = addslashes($_POST['email']);
    $nome_empresa = addslashes($_POST['nome_empresa']);
    $setor_cliente = addslashes($_POST['setor']);
    $telefone_cliente = addslashes($_POST['telefone']);
    $senha_cliente = addslashes(md5($_POST['senha']));

    if($cliente->cadastroCliente($nome, $email_cliente, $senha_cliente, $telefone_cliente, $nome_empresa, $setor_cliente) == true){

       
    }else{
        echo "<script>
                alert ('Erro ao cadastrar!');window.location.href='../view/principal_gestor2.php';        
                </script>";
    }



}else{
    
    echo "<script>
    alert ('Erro ao cadastrar!');window.location.href='../view/principal_gestor2.php';        
    </script>";

}



