<?php

$i = 1;

//Multiplicação de 5.
while ($i <= 10) {
    echo $i * 5 . '<br>';
    $i++;
}

$i = 1;
$soma = 0;

//Crie um script para escrever a soma de todos numeros de 1 a 20 com while

while ($i <= 20) {
    echo "A variavel SOMA é: $soma, contador atual: $i <br/>";
    $soma = $soma + $i;
    $i++;
}
echo "A soma é: $soma";

//Crie um script que escreva todos números de 1 a 10 com FOR.

for ($i = 1; $i <=10; $i++) {
    echo $i;
}

// um script PHP que desenha meio triângulo com asteriscos (*) de 10 linhas.
//Você pode usar um for dentro de outro for
//Abaixo ele passa pelo primeiro for iniciando $linhas em 1 até que $linhas seja 10
//enquanto isso no segundo for $colunas inicia em 1 mas sempre que soma 1 na próxima vez ele vai somar 1 a mais na variavel $colunas.

for ($linhas = 1; $linhas <= 10; $linhas++) {
    for ($colunas = 1; $colunas <= $linhas; $colunas++) {
        echo '*';
    }
    echo '<br>';
}

$array = [1, 2, 3, 4, 5];
$resultado = 0;

foreach ($array as $valor) {
    $resultado += $valor;
}
echo "O resultado da soma dos números de 1 a 5 é: $resultado" . '<br>';

$array = ["Bolsa" => 100, "Sapato" => 200, "Tenis" => 300];

foreach ($array as $dados => $valor) {
    echo "Produto: $dados, Valor: $valor <br/><br/>";
    $subtotal += $valor;
}

echo "Subtotal: R$$subtotal";