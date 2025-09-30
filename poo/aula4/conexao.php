<?php

class Conexao
{
    private $conexao;
    public function __construct() {
        //  Conectar-se ao banco de dados;

        $this->conexao = 'Conectado com o banco de dados';
        echo 'Conexão com o banco de dados criada<br>';
    }

    public function __destruction(){
        $this->conexao = '';
        echo 'Conexão encerrada com o banco de dados <br>';
    }

    public function consulta(){
        echo 'Realizada consulta no banco de dados<br>';
    }
}

$conexao = new Conexao();
$conexao->consulta();

unset($conexao);
echo 'Encerrando script....';