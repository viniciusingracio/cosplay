<?php
$msg=0;
$msg= $_REQUEST['msg'];
?>

<!DOCTYPE HTML>

<html>
    <head>
        <meta charset="utf-8">
        <title>Formulário de Contato</title>
    </head>

    <body>
        <?php if ($msg==enviado): ?>
        <h3>Mensagem Enviada. Em breve entraremos em contato!</h3>
        <?php else: ?>
        <fieldset>
            <legend><h3>Formulário de Contato</h3></legend>
            <form action="envia_email.php" method="post">
                <label for="nome"> Nome: </label><br>
                <input id="nome" name="nome" type="text" required><br>
                <label for="telefone"> Telefone: </label><br>
                <input id="telefone" name="telefone" type="tel" required><br>
                <label for="email"> E-mail: </label><br>
                <input id="email" name="email" type="email" required><br>
                <label for="assunto"> Mensagem: </label><br>
                <textarea name="assunto" id="assunto"> </textarea><br>
                <input type="submit">
            </form>
        </fieldset>
        <?php endif; ?>
    </body>
</html>