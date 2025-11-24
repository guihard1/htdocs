<?php

namespace Lgsilva\BibliotecaPoo;

class Livro {

    public function __construct(private string $author, private string $title, private bool $isAllowed = true) {}

    public function getTitulo() {
        return $this->title;
    }

    public function getAutor() {
        return $this->author;
    }


    public function disponivel(): bool
    {
       return $this->isAllowed;
    }

    public function emprestado(): bool
    {
        $this->isAllowed = false;
        return $this->isAllowed;
    }
}