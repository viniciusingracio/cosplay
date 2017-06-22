<?php
    $host = "br518.hostgator.com.br";
    $user = "thebi671_cosplay";
    $pass = "scpastec1539";
    $dbname = "thebi671_logincosplay";

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if(!$conn) {
        die("Falha no Acesso: " . mysqli_connect_error());
    }
    else{
        echo "Conexão OK";
    }
?>