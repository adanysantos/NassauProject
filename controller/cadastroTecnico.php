<?php

if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['cpf']) && !empty($_POST['cpf']) && isset($_POST['telefone']) && !empty($_POST['telefone']) && isset($_POST['area_atuacao']) && !empty($_POST['area_atuacao'])){
    require '../model/conexao.php';
    require '../controller/Tecnico.class.php';


    $conn = Conexao();
    $tecnico = new Tecnico();

    $nome_tec = addslashes($_POST['nome']);
    $email_tec = addslashes($_POST['email']);
    $senha_tec = md5(addslashes($_POST['senha']));
   // $senha_tec = md5($senha_tec);
    $cpf_tec = addslashes($_POST['cpf']);
    $telefone_tec = addslashes($_POST['telefone']);
    $area_atuacao_tec = addslashes($_POST['area_atuacao']);

    if($tecnico->cadastroTecnico($nome_tec, $email_tec, $senha_tec, $cpf_tec, $telefone_tec, $area_atuacao_tec) == true){
        
        
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