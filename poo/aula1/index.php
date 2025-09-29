<?php

//Toda classe precisa ser instanciada, tornando o que é abstrato em um objeto utilizando "new"
class carro {
    //Atributos (Você pode declarar aqui, fiz assim inicialmente, porém depois do php 8.0
    //pode setar direto no construct.
//    public string $cor;
//    public int $ano;
//    public string $modelo;

    //Métodos

    public function __construct (public string $cor, public int $ano, public string $modelo, public int $velocidade){
        $this->cor = $cor;
        $this->ano = $ano;
        $this->modelo = $modelo;
        echo 'construindo o carro '. $this->modelo .'...<br>';

    }
    public function acelerar() {
        echo 'Acelerando ...';
    }

    public function frear() {
        echo 'Freando...';
    }
}

$carro = new carro('Azul', 2022, 'Volkswagen', 76);
$carro2 = new carro('Preto', 2025, 'Fiat', 76);

//$carro->cor = "Azul";
//$carro->ano = 2025;
//$carro->modelo = "Honda";
//
//$carro2 = new carro();
//$carro2->cor = "Verde";
//$carro2->ano = 2025;
//$carro2->modelo = "Toyota";
//
//echo 'Carro2: <br>';
//$carro2->acelerar();
//$carro2->frear();
//
//echo '<br>Carro1: <br>';
//$carro->acelerar();