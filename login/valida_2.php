<?php
//Arquivo de conexão com o banco de dados
include_once("../login/conexao.php");
//@session_start();

    //if(isset($_POST['email'])) && (isset($_POST['senha'])){
        $email= $_POST['email'];
        $senha= $_POST['senha'];
        echo "$email = $senha";



?>

