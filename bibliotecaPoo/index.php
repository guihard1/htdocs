<?php

require_once "vendor/autoload.php";

use \Lgsilva\BibliotecaPoo\Livro;

echo 'Sistema da Biblioteca iniciado!';

$livro = new Livro('Jorge Amado', 'Capitães da Areia');
$disponibilidade[] = [
    ];


if($disponibilidade = true){
    return 'Livro Disponivel!';
} else {
    return 'Livro Indisponivel!';
}


echo '<pre>';

echo 'Livro: '. $livro->titulo . '<br>';
echo 'Autor: '. $livro->autor . '<br>';
echo 'Disponibilidade: '. $livro->marcarComoDisponivel . '<br>';
//var_dump($livro);