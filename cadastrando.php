<?php
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //echo "$nome - $sobrenome - $email";

    $result_usuario = "INSERT INTO usuarios(nome, sobrenome, usuario, email, senha) VALUES('$nome','$sobrenome','$usuario','$email','$senha')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
?>


