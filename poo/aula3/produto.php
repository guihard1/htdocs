<?php

// ENCAPSULAMENTO
// GETTERS E SETTERS

class Produto
{
    //Atributos

    private string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getPreco(): float
    {
        //GET = LEITURA
        if (is_float($this->preco)){
            return $this->preco;
        } else {
            return 0.00;
        }
        return $this->preco;
    }

    public function setPreco(float $preco)
    {
        // SET - ESCRITA
        $this->preco = $preco;
    }
}

$produto1 = new Produto('Cadeira', 500.00);