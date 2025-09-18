<?php
session_start();
/*
 * Usuário válido: admin
 * senha válida: admin
 * ---
 * header() envia um cabeçalho html
 * */

if (!empty($_POST['login']) && !empty($_POST['password'])) {
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    if ($login == 'admin' && $password == 'admin') {
        $_SESSION['login'] = $login;
        if (!empty($_POST['tema'])) {
            setcookie('tema', htmlspecialchars($_POST['tema']));
        }
        header('Location: welcome.php');
        exit();
    } else {
        echo'Login ou senha incorretos<br/>';
        echo '<a href="index.php">Tentar novamente</a><br/>';
    }
} else {
    echo 'Preencha todos os campos';
    echo '<a href="index.php">Voltar</a><br/>';
}
