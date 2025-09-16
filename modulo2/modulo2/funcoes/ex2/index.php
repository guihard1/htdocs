<?php
function somar($num1, $num2, $num3 = null)
{
    if ($num3) {
        return "Número 1: $num1, Número 2: $num2, Número: $num3";
    } else {
        return "Número 1: $num1, Número 2: $num2";
    }
}
function verificaIdade($anoNascimento)
{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}

function entrarFesta($anoNascimento, $acompanhado = true) {
    $idade = verificaIdade($anoNascimento);
    if ($idade >= 18) {
        echo 'Você pode entrar na festa!';
    } elseif ($idade < 18 && $acompanhado) {
        echo 'Você pode entrar acompanhado de um maior de idade.';
    } else {
        echo 'Você não pode entrar na festa.';
    }

}

echo entrarFesta(1994, false) . "<br>";
echo entrarFesta(2016, true) . "<br>";
echo entrarFesta(2014, false) . "<br>";