<?php

$idade = 18;
$responsavelPresente = false;

if ($idade >= 18) {
    echo 'Pode entrar!';
} elseif ($idade < 18 && $responsavelPresente) {
    echo 'Pode entrar, mas precisa da autorização do resposavel.';
} else {
    echo 'Você é menor de idade e não está acompando de um responsavel.';
}