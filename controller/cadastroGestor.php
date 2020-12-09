<?php

if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['cpf']) && !empty($_POST['cpf']) && isset($_POST['telefone']) && !empty($_POST['telefone']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    require '../model/conexao.php';
    require '../controller/Gestor.class.php';
    //nome, email,cpf, telefone, senha

    $conn = Conexao();
    $gestor = new Gestor();

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $cpf = addslashes($_POST['cpf']);
    $telefone = addslashes($_POST['telefone']);
    $senha = addslashes(md5($_POST['senha']));

    if($gestor->cadastroGestor($nome, $email, $cpf, $telefone, $senha) == true){
        

        
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