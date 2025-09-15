<?php
/*
--    Toda variavel é definida começando com o $
--    As variaveis podem conter apenas:
--    letras
--    numeros
--    underline _
--    As variaveis não podem começar com um número.
--    As variaveis diferenciam letras maiusculas e minusculas.

    String: Representa caracteres no geral (texto) Ex: 'Guilherme'
    Integer: Representa números inteiros, Ex: 10,20, 30, 40....
    Float (Double): Representa números decimais, Ex: 10.1, 1.5, 0.93...
    Boolean: Representa verdadeiro ou falso: true, false.
*/

    //Exemplo de string:
    $texto = 'Pera, uva, maçã e salada mista';
    $nome = 'Guilherme';

    //strpos() - Conta o número de caracteres de uma string.
    //$posicaoPalavraUva = strpos($texto, 'uva');
    //$posicaoPalavraPera = strpos($texto, 'Pera');
      $parteString = substr($texto, 0, 4);


    //strlen() - Conta o número de caracteres de uma string.
    $numeroCaracteres = strlen($nome);

    //echo "Seu nome é: $nome, e possui $numeroCaracteres caracteres. ";
    //echo "A palavra uva começa na posição $posicaoPalavraUva e a palavra Pera na posição $posicaoPalavraPera";
    //echo "Aqui está a palavra: $parteString";

    //Exibir:
    //echo $nome;

    //Concatenar:
    //echo $nome.$nome;

    //Exibir junto com a string:
    //echo "Meu nome é: $nome";

    //$primeiroNome = "Guilherme";

    //echo 'Hello World, ',$primeiroNome;

    /*

    round()
    se usado, ele vai sempre arrendondar para o número mais distante da metade,
    por exemplo, caso coloque o número 2.49, ele automaticamente vai arredondar para baixo para 2
    mas caso coloque 2.50, ele vai arredondar para cima para 3.

    */

    $num3 = 2.50;
    echo 'Arredondamento com round ', round($num3);

    /*

   floor(), se usado ele vai arredondar para baixo.
    No exemplo abaixo, ele vai arredondar para 2.

    */

    $num4 = 2.99;
    echo 'Arredondamento com floor ', floor($num4);

    /*

    a função ceil() arredonda para cima.
    por exemplo, no exemplo abaixo, ele vai arredondar para 6.

    */

    $num5 = 5.001;
    echo 'Arredondamento com ceil ', ceil($num5);