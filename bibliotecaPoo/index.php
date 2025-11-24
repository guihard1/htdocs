<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "vendor/autoload.php";

use Lgsilva\BibliotecaPoo\Bibliotecario;
use \Lgsilva\BibliotecaPoo\Estante;
use \Lgsilva\BibliotecaPoo\Livro;
use Lgsilva\BibliotecaPoo\Aluno;
use Lgsilva\BibliotecaPoo\Professor;


echo 'Sistema da Biblioteca iniciado!<br><br>';

$livro1 = new Livro('Jorge Amado', 'Capitães da Areia');
$livro2 = new Livro('John Green', 'Quem é você, Alaska?');
$livro3 = new Livro('George R. R. Martin', 'A song of Ice and Fire');
$livro4 = new Livro('Jorge Amado', 'Dona Flor e Seus Dois Maridos');
$livro5 = new Livro('Carolina Maria de Jesus', 'O Quarto do Despejo');
$livro6 = new Livro('Guimarães Rosa', 'Grande Sertão: Veredas');
$livro7 = new Livro('Conceição Evaristo', 'Becos da Memória');
$livro8 = new Livro('Mário de Andrade', 'Macunaíma');

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

try {
    Bibliotecario::emprestarLivro($aluno, $livro1, $estante);
    echo "Livro {$livro1->getTitulo()} emprestado para ". $aluno->getNome(). "<br>";
    Bibliotecario::devolverLivro($aluno, $livro1, $estante);
    echo "Livro {$livro1->getTitulo()} devolvido por ". $aluno->getNome(). "<br>";
} catch (\Exception $e) {
    echo 'Erro: '. $e->getMessage();
}

echo '<pre>';
var_dump($aluno->listarLivrosEmprestados());