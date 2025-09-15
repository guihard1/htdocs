<?php

    $nome = 'Luiz Guilherme Campos Rodrigues da Silva';
    $idade = 29;
    $aposentadoriaH = 65;
    $aposentadoriaM = 60;
    $sexo = 'H';
    $salarioMensal = 1512.00;
    $salarioAnual = $salarioMensal * 12;
    $esta_empregado = true;
    $habilidades = ['PHP', 'JavaScript', 'HTML', 'CSS'];

    $anos_necessarios_para_aposentar = null;
    $anos_necessarios_para_aposentar = $sexo == 'H' ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;