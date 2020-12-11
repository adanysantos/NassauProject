<?php

class Cliente{

    public function loginCliente($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM cliente WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['idCliente'] = $dado['idCliente'];
            $_SESSION['nomeCliente'] = $dado['nome'];
            $_SESSION['emailCliente'] = $dado['email'];
            $_SESSION['empresaCliente'] = $dado['nome_empresa'];
            $_SESSION['setorCliente'] = $dado['setor'];
            return true;
        }else{
            return false;
        }
    }

    public function cadastroCliente($nome, $email_cliente, $senha_cliente, $telefone_cliente, $nome_empresa, $setor_cliente){
        global $pdo;


       $nome =  filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
       $email_cliente =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
       $senha_cliente =  filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
       $telefone_cliente=  filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
       $nome_empresa =  filter_input(INPUT_POST, 'nome_empresa', FILTER_SANITIZE_STRING);
       $setor_cliente =  filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_STRING);
       $senha_cliente = md5($senha_cliente);

        $sql = 'INSERT INTO cliente (nome, email, senha, telefone, nome_empresa, setor) VALUES (?, ?, ?, ?, ?, ?)';
        $sql = $pdo->prepare($sql);
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $email_cliente);
        $sql->bindValue(3, $senha_cliente);
        $sql->bindValue(4, $telefone_cliente);
        $sql->bindValue(5, $nome_empresa);
        $sql->bindValue(6, $setor_cliente);

            if($sql->execute()){
                echo "<script>
                alert ('Cliente Cadastrado!');window.location.href='../view/principal_gestor2.php';        
                </script>";
            }

    }
    public function abrirChamadoCliente($cliente, $tipo_servico, $desc_problema, $estado, $tecnico, $data){

        global $pdo;

        $cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
        $tipo_servico = filter_input(INPUT_POST, 'tipo_servico', FILTER_SANITIZE_STRING);
        $desc_problema = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
        $estado = "Aberto";
        $tecnico = 99;
       // $data =  date('Y/m/d');

        $sql = 'INSERT INTO chamado (tipo_servico, data_abertura, idTecnico, estado,  desc_problema, idCliente) VALUES(?, ?, ?, ?, ?, ?)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $tipo_servico);
        $stmt->bindValue(2, $data);
        $stmt->bindValue(3, $tecnico);
        $stmt->bindValue(4, $estado);
        $stmt->bindValue(5, $desc_problema);
        $stmt->bindValue(6, $cliente);

        if($stmt->execute()){
            echo "<script>
                alert ('Chamado cadastrado com sucesso!');window.location.href='../view/principal_cliente.php';        
                </script>";
        }

        var_dump($stmt->errorInfo());
    }


}