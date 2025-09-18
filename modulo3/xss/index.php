<?php

/*
 * O que é o XSS(Cross Site Scripting)?
 * Ele nasceu de uma vulnerabilidade que permite que um invasor injete um script malicioso em um site.
 * É um dos ataques mais comuns no mundo da web.
 *
 * Uma das formas de tratar isso é utilizando o htmlspecialchars()
 */


if (!empty($_POST['campanha'])) {
    $login = htmlspecialchars($_POST['campanha']);
    $password = htmlspecialchars($_POST['password']);

    echo "Seu login é: $login, e a senha: $password";
}