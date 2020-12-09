<?php 

if ($_POST['estado_cham'] === 0 && $_POST['prioridade'] === 0){
    echo "<script>alert ('Selecione todos os campos!');window.location.href='../view/principal_gestor2.php';</script>";
}else if($_POST['novo_tec'] === 0){
    require '../model/conexao.php';
    require '../controller/Gestor.class.php';

    $conn = Conexao();
    $gestor = new Gestor();

    $id_chamado = $_POST['id_chamado'];
    $novo_tec = $_POST['novo_tec'];
    $novo_estado = $_POST['estado_cham'];
    $prioridade = $_POST['prioridade'];

    if($gestor->updateChamadoCTec($id_chamado, $novo_tec, $novo_estado, $prioridade) == true){
        echo "<script>alert ('Chamado atualizado com sucesso!');window.location.href='../view/principal_gestor2.php';</script>";
    }else{
        echo "<script>alert ('Erro ao atualizar chamado, tente novamente!');window.location.href='../view/principal_gestor2.php';</script>";
    }
}else {

    require '../model/conexao.php';
    require '../controller/Gestor.class.php';

    $conn = Conexao();
    $gestor = new Gestor();

    $id_chamado = $_POST['id_chamado'];
   // $novo_tec = $_POST['novo_tec'];
    $novo_estado = $_POST['estado_cham'];
    $prioridade = $_POST['prioridade'];

    if($gestor->updateChamado($id_chamado/*, $novo_tec*/, $novo_estado, $prioridade) == true){
        echo "<script>alert ('Chamado atualizado com sucesso!');window.location.href='../view/principal_gestor2.php';</script>";
    }else{
        echo "<script>alert ('Erro ao atualizar chamado, tente novamente!');window.location.href='../view/principal_gestor2.php';</script>";
    }

}