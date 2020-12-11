<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    require '../model/conexao.php';
    require '../controller/Tecnico.class.php';

        $conn = Conexao();
        $c = new Tecnico();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $senha = md5($senha);

        if($c->loginTecnico($email, $senha) == true){
            if(isset($_SESSION['idTecnico'])){
                header("Location: ../view/principal_tecnico.php");

            }else{
                header("Location: ../view/login/login_tecnico.php");
            }

        }else{
            header("Location: ../view/login/login_tecnico.php");

        }



}else{
    header("Location: ../view/login/login_tecnico.php");
}