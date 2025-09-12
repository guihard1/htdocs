<?php

$usuarioCorreto = 'admin';
$senhaCorreta = '123456';

$usuario = 'admin';
$senha = '123456';

if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
    echo 'Login efetuado com sucesso';
} elseif ($usuario === $usuarioCorreto && $senha != $senhaCorreta) {
    echo 'Senha incorreta';
} elseif ($usuario != $usuarioCorreto && $senha === $senhaCorreta) {
    echo 'Usuario incorreto';
} else {
    echo 'Usuario e senha incorretos';
}