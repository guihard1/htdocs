<?php

$cores = [
    "Vermelho",
    "Verde",
    "Azul"
];

array_push($cores, "Amarelo");
array_shift($cores);

var_dump($cores);