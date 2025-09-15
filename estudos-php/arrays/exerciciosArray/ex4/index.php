<?php

$precos = [
    "Bolsa" => '900',
    "Sapato" => '100',
    "Camiseta" => '500',
    "Chinelo" => '50'
];

$precos["Sapato"] += 10;
$precos["Bolsa"] -= 1;

//$precos["Sapato"] = '110';
//$precos["Bolsa"] = '899';

var_dump($precos);