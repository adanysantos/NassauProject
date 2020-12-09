<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    require '../model/conexao.php';
    require '../controller/Gestor.class.php';

    $conn = Conexao();
    $g = new Gestor();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $senha = md5($senha);

    if($g->loginGestor($email, $senha) == true){
        if(isset($_SESSION['idGestor'])){
            
           header("Location: ../view/principal_gestor2.php");

        }else{
            echo "<script>
            alert ('Usuário ou senha inválidos!');window.location.href='../view/login/login.php';        
            </script>";
           // header("Location: ../view/principal_gestor2.php");
        }

    }else{
        echo "<script>
            alert ('Usuário ou senha inválidos!');window.location.href='../view/login/login.php';        
            </script>";
        //header("Location: ../view/principal_gestor2.php");

    }



}else{
    echo "<script>
    alert ('Usuário ou senha inválidos!');window.location.href='../view/login/login.php';        
    </script>";
   // header("Location: ../view/principal_gestor2.php");
}