<?php 

class Tecnico{

    public function loginTecnico($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM tecnico where email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['idTecnico'] = $dado['idTecnico'];
            $_SESSION['nomeTecnico'] = $dado['nome_tecnico'];

            return true;
        }else{
            return false;
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

}