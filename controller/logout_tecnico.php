<?php
session_start();

unset($_SESSION['idTecnico'], $_SESSION['nomeTecnico']);

header("location: ../view/login/login_tecnico.php");

?>