<?php 

class Gestor{

    public function loginGestor($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM gestor WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['idGestor'] = $dado['idGestor'];
            $_SESSION['nomeGestor'] = $dado['nome'];

            return true;
        }else{
            return false;
        }
    }

    public function cadastroGestor($nome, $email, $cpf, $telefone, $senha){
        global $pdo;

        $nome =  filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $cpf =  filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
        $telefone =  filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $senha =  filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        $senha = md5($senha);
        

        $sql = 'INSERT INTO gestor (nome, email, cpf, telefone, senha) VALUES (?, ?, ?, ?, ?)';
        $sql = $pdo->prepare($sql);
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $email);
        $sql->bindValue(3, $cpf);
        $sql->bindValue(4, $telefone);
        $sql->bindValue(5, $senha);

        if($sql->execute()){
            echo "<script>
                alert ('Gestor Cadastrado!');window.location.href='../view/principal_gestor2.php';        
                </script>";
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

    public function cadastroTecnico($nome_tec, $email_tec, $senha_tec, $cpf_tec, $telefone_tec, $area_atuacao_tec){
        // nome_tecnico, email, senha, cpf, telefone, area_atuacao
        global $pdo;

        $nome_tec = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email_tec = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $senha_tec = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        $cpf_tec = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
        $telefone_tec = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $area_atuacao_tec = filter_input(INPUT_POST, 'area_atuacao', FILTER_SANITIZE_STRING);

        $sql = 'INSERT INTO tecnico (nome_tecnico, email, senha, cpf, telefone, area_atuacao) VALUES (?, ?, ?, ?, ?, ?)';
        $sql = $pdo->prepare($sql);
        $sql->bindValue(1, $nome_tec);
        $sql->bindValue(2, $email_tec);
        $sql->bindValue(3, $senha_tec);
        $sql->bindValue(4, $cpf_tec);
        $sql->bindValue(5, $telefone_tec);
        $sql->bindValue(6, $area_atuacao_tec);

        if($sql->execute()){
            echo "<script>
                alert ('Técnico Cadastrado!');window.location.href='../view/principal_gestor2.php';        
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
                alert ('Chamado cadastrado com sucesso!');window.location.href='../view/principal_gestor2.php';        
                </script>";
        }

        var_dump($stmt->errorInfo());
    }

    public function updateChamado($id_chamado /*$novo_tec*/, $novo_estado, $prioridade){

        global $pdo;

        $id_chamado =  filter_input(INPUT_POST, 'id_chamado', FILTER_SANITIZE_STRING);
       // $novo_tec =  filter_input(INPUT_POST, 'novo_tec', FILTER_SANITIZE_STRING);
        $novo_estado =  filter_input(INPUT_POST, 'estado_cham', FILTER_SANITIZE_STRING);
        $prioridade =  filter_input(INPUT_POST, 'prioridade', FILTER_SANITIZE_STRING);

        $sql = "UPDATE chamado SET prioridade = ?, estado = ? WHERE idChamado = ?";
        $stmt = $pdo->prepare($sql);

        if($stmt->execute([$prioridade, /*$novo_tec*/$novo_estado, $id_chamado])){
            echo "<script>alert ('Chamado atualizado com sucesso!');window.location.href='../view/principal_gestor2.php';</script>";
        }

    }

    public function updateChamadoCTec($id_chamado, $novo_tec, $novo_estado, $prioridade){

        global $pdo;

        $id_chamado =  filter_input(INPUT_POST, 'id_chamado', FILTER_SANITIZE_STRING);
        $novo_tec =  filter_input(INPUT_POST, 'novo_tec', FILTER_SANITIZE_STRING);
        $novo_estado =  filter_input(INPUT_POST, 'estado_cham', FILTER_SANITIZE_STRING);
        $prioridade =  filter_input(INPUT_POST, 'prioridade', FILTER_SANITIZE_STRING);

        $sql = "UPDATE chamado SET prioridade = ?, idTecnico= ?, estado = ? WHERE idChamado = ?";
        $stmt = $pdo->prepare($sql);

        if($stmt->execute([$prioridade, $novo_tec, $novo_estado, $id_chamado])){
            echo "<script>alert ('Chamado atualizado com sucesso!');window.location.href='../view/principal_gestor2.php';</script>";
        }

    }

}