<?php

/*
 * Gera uma string de saudação
 *
 * @param string $nome Nome da pessoa
 * @param string $sobrenome Sobrenome da pessoa
 * @param int $idade Idade da pessoa
 *
 * @return string Saudação
 * */
function parametrosNomeados(string $nome, string $sobrenome, int $idade): string
{
    return "Olá, $nome $sobrenome. Você tem $idade anos.";
}

//echo parametrosNomeados(idade: 34, sobrenome: 'Silva', nome: 'Luiz');

/*
 * No PHPDOC a gente documenta através de comentários, assim como descrito abaixo.
 * Soma dois numeros
 *
 * @param float $n1 Primeiro numero a ser somado
 * @param float $n2 Segundo numero a ser somado
 *
 * @return float Soma dois números
 * */

function somar(float $n1,float $n2): float
{
    return $n1 + $n2;
}

somar(10, 20);

echo somar(10, 20);