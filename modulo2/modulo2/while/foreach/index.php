<?php

$nomes = ['Luiz', 'Guilherme', 'Maria', 'João'];

foreach ($nomes as $nome) {
    echo $nome . '<br>';
}

for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i] . '<hr>';
}