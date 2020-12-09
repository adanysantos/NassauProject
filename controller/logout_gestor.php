<?php
session_start();

unset($_SESSION['idGestor'], $_SESSION['nomeGestor']);

header("Location: ../view/login/login.php");

?>