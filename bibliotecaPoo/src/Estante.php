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
                echo 'Livro Atual: ' . $livroAtual->getTitulo();
                if ($livroAtual === $livro) {
                    echo '- Livro removido!';
                }
                echo '<br>';
                return $livroAtual !== $livro;
            }
        );
    }

    public function buscarLivroPorTitulo(string $titulo): ?Livro {

        foreach ($this->livros as $livro) {

            if (str_contains(strtolower($livro->getTitulo()), strtolower($titulo))) {
                return $livro;
            }
        }
        return null;
    }

    public function listarLivrosDisponiveis(): array {
        return [];
    }
}