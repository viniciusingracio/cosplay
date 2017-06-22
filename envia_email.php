<?php

$para= "viniciusingracio@gmail.com, brunamonteirobrito@gmail.com, bruna@cosplay.bigbangtecnologia.com.br";
$assunto= "Contato Pelo Site";
$nome= $_REQUEST['nome'];
$fone= $_REQUEST['telefone'];
$email= $_REQUEST['email'];
$msg= $_REQUEST['assunto'];

    $corpo=   "<strong> Esse Email veio através do site da Big Bang Tecnologia!!!</strong><br><br>";
    $corpo .= "<strong> Nome: </strong> $nome";
    $corpo .= "<br><strong> Telefone: </strong> $fone";
    $corpo .= "<br><strong> Email: </strong> $email";
    $corpo .= "<br><strong> Mensagem: </strong> $msg";

$header= "Content-Type: text/html; charset= utf-8\n";
$header .= "from: $email\n";

mail($para,$assunto,$corpo,$header);

header("location:contato.php?msg=enviado");


?>
