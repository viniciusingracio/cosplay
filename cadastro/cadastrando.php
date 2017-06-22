<html>
<head>
    <title>Cadastrando</title>
</head>

<body>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "logincosplay";
die(mysqli_error()) or $conexao = mysqli_connect($host, $user, $pass);
mysqli_select_db($banco) or die(mysqli_error());
?>

<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysqli_query($conexao, "INSERT INTO usuarios(nome, sobrenome, email, senha) VALUES($nome:varchar(250), $sobrenome:varchar(250), $email:varchar(250)), senha:varchar(250) ");
?>

</body>
</html>
