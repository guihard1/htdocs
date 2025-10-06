<?php

class animal
{
    public $respirar;
    public $mover;

    public function respirar()
    {
        echo '*som de respiração* <br>';
    }

    public function mover()
    {
        echo 'Movendo...<br>';
    }
}

class mamifero extends animal
{
    public $amamentar;

    function __construct($respirar, $mover)
    {
        $this->respirar = $respirar;
        $this->mover = $mover;
    }

    public function amamentar()
    {
        echo 'Amamentando o filhote...';
    }
}

class aves extends animal
{
    public $botarOvos;
    public $voar;

    function __construct($respirar, $mover, $botarOvos, $voar)
    {
        $this->respirar = $respirar;
        $this->mover = $mover;
        $this->botarOvos = $botarOvos;
        $this->voar = $voar;
    }

    public function botandoOvos()
    {
        echo 'Botando ovos no ninho';
    }
}

class cachorro extends mamifero
{
    public $abanarRabo;
    public $latir;

    function __construct($respirar, $mover, $abanarRabo, $latir)
    {
        $this->respirar = $respirar;
        $this->mover = $mover;
        $this->abanarRabo = $abanarRabo;
        $this->latir = $latir;
    }

    public function latindo()
    {
        echo 'O cachorro está latindo: '. $this->latir;
    }

    public function carinho()
    {
        echo 'Você fez carinho no cachorro e agora ele está abanando o rabo.';
    }
}

class gato extends mamifero
{
    public $abanarRabo;
    public $miar;

    function __constructor($respirar, $mover, $abanarRabo, $miar): void
    {
        $this->respirar = $respirar;
        $this->mover = $mover;
        $this->abanarRabo = $abanarRabo;
        $this->miar = $miar;
    }

    public function miando()
    {
        echo 'Você brincou com o gato e ele gostou de você: <br>'. $this->miar;
    }

    public function abanarRabo()
    {
        echo 'O gatinho está abanando o rabo para você. <br>';
    }
}

echo 'Gato: <br>';
$gato = new gato('Ele respira profundamente <br>','Ele anda na sua direção.<br>');
$gato->respirar();
$gato->mover();
$gato->miando();
$gato->abanarRabo();