<?php

$nomes = ['Luiz', 'Guilherme', 'Maria', 'João'];

//percorre array $nomes e pra cada indice dele [0],[1]... que coloquei $nome, eu imprimo ele.
foreach ($nomes as $nome) {
    echo $nome . '<br>';
}


//count($nomes) serve para contar quantos elementos tem no array $nomes que criei acima.
for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i] . '<hr>';
}

//Array associativo.
$dados = [
    'nome' => 'Luiz',
    'idade' => 29
];

//Aqui ele pega só os valores do array associativo.
foreach ($dados as $item) {
    echo $item . '<br>';
}

//Aqui ele pega os valores e as chaves.
foreach ($dados as $chave => $valor) {
    echo "Chave: $chave, Valor: $valor <br>";
}