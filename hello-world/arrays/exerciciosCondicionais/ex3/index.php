<?php

$clienteGastos = 150;
$membroVip = true;
$desconto = 0;

if ($clienteGastos > 200 || $membroVip == true) {
    $desconto = 0.20;
} else if ($clienteGastos >= 150 && $clienteGastos <= 200) {
    $desconto = 0.10;
}

echo "O valor do desconto é de: ". $desconto;