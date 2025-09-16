<?php

//Calculo do salário anual.
function calcularSalarioAnual(float $salarioMensal): string
{
    $tercoDeFerias = $salarioMensal / 3;
    $salarioAnual = ($salarioMensal * 13) + $tercoDeFerias;
    return convertNumberToBRL($salarioAnual);
}

//Está empregado.
function statusEmprego($esta_empregado)
{
    return $esta_empregado ? $situacaoEmprego = 'Empregado' : $situacaoEmprego = 'Desempregado';
}

//Quantos anos faltam para se aposentar.
/*
 * @param int $aposentadoria
 * @param int $idade
 * @param string $sexo
 * */
function anosParaAposentar($aposentadoria, $idade, $sexo)
{
    $aposentadoria = $sexo == 'H' ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;
    $res = $aposentadoria - $idade;
    return $res;
}

//Transformar um numero em valor monetário.
/*
 * @param float $valor Valor numérico
 *
 * @return string Valor em reais
 * */
function convertNumberToBRL(float $valor): string
{
    return 'R$ ' . number_format($valor, 2, ',', '.');
}