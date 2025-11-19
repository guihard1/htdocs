<?php

require_once "vendor/autoload.php";

use \Lgsilva\BibliotecaPoo\Estante;
use \Lgsilva\BibliotecaPoo\Livro;

echo 'Sistema da Biblioteca iniciado!<br><br>';

$livro1 = new Livro('Jorge Amado', 'Capitães da Areia', '');
$livro2 = new Livro('John Green', 'Quem é você, Alaska?', '');
$livro3 = new Livro('Robert Cecil Martin', 'Clean Code', '');

$estante = new Estante();
$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);
$estante->adicionarLivro($livro3);

$livroEncontrado = $estante->buscarLivroPorTitulo('Clean Code');
print_r($livroEncontrado);