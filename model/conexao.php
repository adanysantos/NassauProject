<?php
session_start();

    function Conexao(){

        $dsn = 'mysql:host=localhost;dbname=sysfacul;charset=utf8';
        $usuario = 'root';
        $senha = 'Pgepa@2020';

        global $pdo;

            try{
                $pdo = new PDO($dsn, $usuario, $senha);
                return $pdo;

            } catch(PDOException $ex){

                echo 'Erro: '.$ex->getMessage();
            }
    }
