<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "vendor/autoload.php";

use \Lgsilva\BibliotecaPoo\Estante;
use \Lgsilva\BibliotecaPoo\Livro;
use Lgsilva\BibliotecaPoo\Aluno;
use Lgsilva\BibliotecaPoo\Professor;
use Lgsilva\BibliotecaPoo\Visitante;

echo 'Sistema da Biblioteca iniciado!<br><br>';

$livro1 = new Livro('Jorge Amado', 'Capitães da Areia', '');
$livro2 = new Livro('John Green', 'Quem é você, Alaska?', '');
$livro3 = new Livro('George R. R. Martin', 'A song of Ice and Fire', '');
$livro4 = new Livro('Jorge Amado', 'Dona Flor e Seus Dois Maridos', '');
$livro5 = new Livro('Carolina Maria de Jesus', 'O Quarto do Despejo', '');
$livro6 = new Livro('Guimarães Rosa', 'Grande Sertão: Veredas', '');
$livro7 = new Livro('Conceição Evaristo', 'Becos da Memória', '');
$livro8 = new Livro('Mário de Andrade', 'Macunaíma', '');

$estante = new Estante();
$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);
$estante->adicionarLivro($livro3);
$estante->adicionarLivro($livro4);
$estante->adicionarLivro($livro5);
$estante->adicionarLivro($livro6);
$estante->adicionarLivro($livro7);
$estante->adicionarLivro($livro8);

//$livroEncontrado = $estante->buscarLivroPorTitulo('Clean Code');

$aluno = new Aluno('Luciano do São Paulo');
$aluno2 = new Aluno('Calleri do DM');


if ($aluno->podePegarEmprestado()) {
    echo 'O aluno pode pegar livros emprestados! <br>';
    $aluno->adicionarLivroEmprestado($livro1);
    $livro1->emprestado();
    $estante->removerLivro($livro1);
} else {
    echo 'O aluno não pode pegar livros emprestados! <br>';
}

if ($aluno2->podePegarEmprestado()) {
    echo 'O aluno 2 pode pegar livros emprestados! <br>';
    if ($livro1->disponivel()){
        echo 'O Livro 1 está disponivel! <br>';
    } else {
        echo 'O Livro 1 não está disponivel! <br>';
    }
    $aluno2->adicionarLivroEmprestado($livro1);
} else {
    echo 'O aluno não pode pegar livros emprestados! <br>';
}

echo '<pre>';
//var_dump($professor->podePegarEmprestado());
//var_dump($aluno->podePegarEmprestado());
//var_dump($visitante->podePegarEmprestado());

var_dump($aluno->listarLivrosEmprestados());
var_dump($aluno2->listarLivrosEmprestados());