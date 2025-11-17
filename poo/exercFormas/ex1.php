<?php

abstract class Forma {

    abstract public function calcularArea();
}

class Quadrado extends Forma {

    public $lado;

    public function __construct($lado){
        $this->lado = $lado;
    }

    public function calcularArea(){
        return $this->lado * $this->lado;
    }
}

class Retangulo extends Forma {

    public $base;
    public $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        return $this->base * $this->altura;
    }
}

class Triangulo extends Forma {

    public $base;
    public $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        return $this->base * $this->altura / 2;
}
}


$quadrado = new Quadrado(10);
echo 'A área do quadrado é: '. $quadrado->calcularArea() . '<br>';

$retangulo = new Retangulo(10, 2);
echo 'A área do retângulo é: ' . $retangulo->calcularArea() . '<br>';

$triangulo = new Triangulo(10, 2);
echo 'A área do triangulo é: ' . $triangulo->calcularArea() . '<br>';