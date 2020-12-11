<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    require '../model/conexao.php';
    require '../controller/Cliente.class.php';

        $conn = Conexao();
        $c = new Cliente();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $senha = md5($senha);

        if($c->loginCliente($email, $senha) == true){
            if(isset($_SESSION['idCliente'])){
                header("Location: ../view/principal_cliente.php");

            }else{
                header("Location: ../view/login/login_cliente.php");
            }

        }else{
            header("Location: ../view/login/login_cliente.php");

        }



}else{
    header("Location: ../view/login/login_cliente.php");
}