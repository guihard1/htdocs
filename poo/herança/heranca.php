<?php

class veiculo
{
    public $marca;
    public $modelo;

    public function mover()
    {
        echo 'Andando...<br>';
    }

    public function freiar()
    {
        echo 'Freando...<br>';
    }
}

//utilizando o extends nomeDaClass você puxa diretamente de outro lugar.
class carro extends veiculo
{
    public $numeroPortas;

    function __construct($marca, $modelo, $numeroPortas)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->numeroPortas = $numeroPortas;
    }

    public function abrirPortas(){
        echo 'Abrindo as ' . $this->numeroPortas . ' portas... <br>';
    }
}

class moto extends veiculo
{
    public $tipoGuidon;

    function __construct($marca, $modelo, $tipoGuidon)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipoGuidon = $tipoGuidon;
    }

    public function empinar(){
        echo 'Empinando a moto... <br>';
    }
}

echo 'Carro: <br>';
$carro = new Carro('Ford', 'Mustang', 4);
$carro->mover();
$carro->abrirPortas();
$carro->mover();
$carro->freiar();
echo '<hr>';


echo 'Moto: <br>';
$moto = new moto('Honda', 'CBR1000', 'Esportivo');
$moto->mover();
$moto->empinar();
$moto->mover();
$moto->freiar();