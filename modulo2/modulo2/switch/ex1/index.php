<?php

/*
 * Retorna o texto representativo do dia da semana (de 1 - Seg a 7 - Dom)
 *
 * @param int $dia Dia da Semana (1-7)
 *
 * @return string Dia da semana em texto
 * */

function diaDaSemana(int $dia): string
{
    if ($dia == 1) {
        return 'Segunda';
    } elseif ($dia == 2) {
        return 'Terça-Feira';
    } elseif ($dia == 3) {
        return 'Quarta-Feira';
    } elseif ($dia == 4) {
        return 'Quinta-Feira';
    } elseif ($dia == 5) {
        return 'Sexta-Feira';
    } elseif ($dia == 6) {
        return 'Sábado';
    } elseif ($dia == 7) {
        return 'Domingo';
    } else {
        return 'Dia inválido.';
    }
}

echo diaDaSemana(1);

/*
 *switch (variavel)
 *
 * case valor1:
 * faz alguma coisa
 * break;
 * */

function diaDaSemana2(int $dia): string
{
    switch ($dia) {
        case 1:
            return 'Segunda';
            break;
        case 2:
            return 'Terça-Feira';
            break;
        case 3:
            return 'Quarta-Feira';
            break;
        case 4:
            return 'Quinta-Feira';
            break;
        case 5:
            return 'Sexta-Feira';
            break;
        case 6:
            return 'Sábado';
            break;
        case 7:
            return 'Domingo';
            break;
        default:
            return 'Dia inválido.';
    }
}