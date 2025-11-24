<?php

namespace Lgsilva\BibliotecaPoo;

class Estante {

    private array $livros = [];

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }

    public function removerLivro(Livro $livro) {
        $this->livros = array_filter(
            $this->livros,
            function ($livroAtual) use ($livro) {

                return $livroAtual !== $livro;
            }
        );
    }

    public function verificarLivro (Livro $livro): bool {
        return in_array($livro, $this->livros);
    }

    public function buscarLivroPorTitulo(string $titulo): ?Livro {

        foreach ($this->livros as $livro) {

            if (str_contains(strtolower($livro->getTitulo()), strtolower($titulo))) {
                return $livro;
            }
        }
        return null;
    }

    public function listarLivrosDisponiveis() {

//        $livrosDisponiveis = [];
//
//        foreach ($this->livros as $livroAtual) {
//            $livrosDisponiveis[] = $livroAtual;
//        }
//        return $livrosDisponiveis;

        return array_filter($this->livros, function ($livroAtual) {
            return $livroAtual->disponivel();
        });
    }
}