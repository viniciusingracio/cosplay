<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <title>Cadastro</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    </head>

    <body>
        <form method="post" action="cadastrando.php">
            Nome: <input type="text" name="nome" placeholder="Digite seu Nome"><br><br>
            Sobrenome: <input type="text" name="sobrenome" placeholder="Digite seu Sobrenome"><br><br>
            Usuário: <input type="text" name="usuario" placeholder="Digite seu Usuário"><br><br>
            E-mail: <input type="email" name="email" placeholder="Digite seu Email"><br><br>
            Senha: <input type="password" name="senha" placeholder="Senha"><br><br>
        <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>