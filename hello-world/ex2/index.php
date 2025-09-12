<?php

    $estaEstudando = false;
    $valorEstaEstudandoInvertido = !$estaEstudando;

    //Verdadeiro - True, 1
    //Falso - False, 0
    //var_dump (informa o tipo de dado)

    var_dump($estaEstudando);
    var_dump($valorEstaEstudandoInvertido);

    if ($estaEstudando){
        echo 'Estou estudando';
    } else {
        echo 'Vá estudar';
    }