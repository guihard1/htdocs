<?php

namespace Lgsilva\BibliotecaPoo;

use mysql_xdevapi\Exception;

class Bibliotecario {

    public static function emprestarLivro (Usuario $usuario, Livro $livro, Estante $estante): bool {

         if(!$livro->disponivel()){
             throw new \Exception('O livro não está disponivel.');
             return false;
         }

         if(!$usuario->podePegarEmprestado()) {
             throw new \Exception('O usuário não pode pegar livros emprestados.');
             return false;
         }

        if (!$estante->verificarLivro($livro)) {
            throw new \Exception('O livro não está na estante.');
            return false;
         }

        $livro->emprestado();
        $usuario->adicionarLivroEmprestado($livro);
        $estante->removerLivro($livro);

        return true;
    }

    public static function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante): bool {

        if ($livro->disponivel()) {
            throw new \Exception('O livro está disponivel.');
            return false;
        }

        if($estante->buscarLivroPorTitulo($livro->getTitulo())) {
            throw new \Exception('O livro já está na estante.');
            return false;
        }

        if (!in_array($livro, $usuario->listarLivrosEmprestados())) {
            throw new \Exception('O livro não está com o usuário.');
            return false;
        }

        $usuario->removerLivroEmprestado($livro);
        $estante->adicionarLivro($livro);
        $livro->disponivel();
        return true;
    }
}