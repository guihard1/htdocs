<?php

#[AllowDynamicProperties]
class conta
{
    //Não é possivel depositar mais de 100 reais
    //Não é possivel sacar mais do que o valor do saldo


    //Atributos
    private int $saldo;

    //Métodos
    public function __construct(int $saldo, bool $chequeEspecial = false)
    {
        $this->saldo = $saldo;
        $this->chequeEspecial = $chequeEspecial;
    }

    public function sacar(int $valor)
    {
        if ($valor > $this->saldo && $this->chequeEspecial == false) {
            echo 'VOCÊ NÃO TEM SALDO SUFICIENTE. <br>';
            return false;
        }

        if($valor > $this->saldo + 100 && $this->chequeEspecial = true) {
            echo 'Você não pode sacar mais do que o valor do saldo + cheque especial (100) <br>';
            return false;
        }

        echo 'Você sacou: ' . $valor . '<br>';
        $this->saldo -= $valor;
    }

    public function depositar(int $valor)
    {
        if($valor > 100) {
            echo 'Você não pode depositar mais de 100 reais. <br>';
            return false;
        }


        echo 'Você depositou: ' .$valor . '<br>';
        $this->saldo += $valor;
    }

    public function verSaldo()
    {
        return $this->saldo;
    }
}

//    public function result()
//    {
//        if ($this->saldo > 100) {
//            return 'Você ultrapassa o valor permitido de depósito diário (R$100,00)';
//        } elseif ($this->saldo <= 0) {
//            return 'Não há saldo disponivel para você.';
//        } else {
//            return 'Você depositou R$ ' . $this->saldo .',00';
//        }
//    }
//}

$conta1 = new conta(500, false);
echo 'Saldo Inicial: ' . $conta1->verSaldo() . '<br>';
$conta1->depositar(111);
$conta1->sacar(600);
echo 'Saldo Atual: ' . $conta1->verSaldo() . '<br>';


echo '<hr>';


$conta2 = new conta(500, true);
echo 'Saldo Inicial: ' . $conta2->verSaldo() . '<br>';
$conta2->depositar(111);
$conta2->sacar(700);
echo 'Saldo Atual: ' . $conta2->verSaldo() . '<br>';