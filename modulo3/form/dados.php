<?php

//Iremos usar o $_POST
//Mas qual a diferença entre $_GET e $_POST?
/*
 * $_GET - Dados são passados pela URL
 * Limite de 2000 caracteres
 * Dados ficam expostos e são facilmente manipuláveis
 *
 * $_POST - Dados são passados pelo corpo da requisição http
 * Não há limite de tamanho
 * Os dados não são tão facilmente modificados pelo usuário
 *
 * */

//if (!empty($_POST['login']) && !empty($_POST['password'])) {
//    $login = htmlspecialchars($_POST['login']);
//    $password = htmlspecialchars($_POST['password']);
//
//    echo 'O seu login é: '.$login.' e a senha: '.$password;
//}


//verifica se os dados do formulário foram enviados
if (!empty($_POST['login']) && !empty($_POST['password'])) {
    //verifica se o login é == adim e senha é == admin
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);


    $message = null;
    if ($login == 'admin' && $password == 'admin') {
        $message = 'Você logou com sucesso';
    } else {
        $message = 'Login ou senha incorretos';
    }
} else {
    $message = 'Preencha todos os campos';
}

?>

<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<main>
    <form action="dados.php" method="post">
        <!--Para que não perca o usuario digitado fazendo com que resete, preencha com value <?php //variavel aqui dentro utilizando ou php ou =. ?> -->
        <label>
            <input type="text" name="login" placeholder="Digite seu login" value="<?= $login ?>">
        </label>
        <br/>
        <label>
            <input type="password" name="password" placeholder="Digite a senha">
        </label>
        <input type="submit" value="Enviar"> <br/>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo $message;
        }
        ?>
    </form>
</main>
</body>
</html>