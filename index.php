<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Formulário de inscrição</title>
    <meta name= "author" content="">
    <meta name= "description" content="">
    <meta name= "viewport" content="width-device-width, initial-scale=1">
</head>
<body>
    <p> FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
<form action="script.php" method="post">
    <?php 
        $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '' ;//ternario, ? representa a execução e : o else
        if(!empty($mensagemDeSucesso))
        {
            echo $mensagemDeSucesso;
        }
        
        
        $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '' ;//ternario, ? representa a execução e : o else
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
    ?>
    <p>Your name: <input type="text" name="nome" /></p>
    <p>Your age: <input type="text" name="idade" /></p>
    <p><input type="submit" value="Enviar dados do competidor"/></p>
</form>
</body>
</html>
