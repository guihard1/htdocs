<?php

$frutas = ["Laranja", "Limão"];
$outras_frutas = ["Abacaxi", "Uva"];

array_push($frutas, "Uva"); //Especifíque pra onde vai a adição e depois o que vai ser adicionado.

array_shift($frutas); //Remove o primeiro elemento do array.

array_pop($frutas); //Remove o ultimo elemento do array.

$temAbacaxi = in_array("Abacaxi", $frutas); //Verifica se o elemento existe no array.

$todasFrutas = array_merge($outras_frutas, $frutas); //Junta todos os arrays.

var_dump($frutas);