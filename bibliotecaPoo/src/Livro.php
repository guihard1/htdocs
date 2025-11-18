<?php

namespace Lgsilva\BibliotecaPoo;

class Livro {

    private string $title;
    private string $author;
    private bool $isAllowed = false;

    public function __construct(string $author, string $title) {

        $this->autor = $author;
        $this->titulo = $title;

    }

     public function marcarComoEmprestado(){
        $this->isAllowed = false;
     }

     public function marcarComoDisponivel(){
        $this->isAllowed = true;
     }
}