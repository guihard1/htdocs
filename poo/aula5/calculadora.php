<?php

class calculadora
{
    //invés de ser apenas public function, ela passa a ser estática
    //e não pode ser mudada.
    private const PI = 3.14;
    public const version = '1.0.0';
    public static function areaCirculo(float $raio)
    {
        // Area = PI * raio * raio
        // PI = 3.14;
        //$this não existe para const, elas são tratadas como métodos estáticos utilizando o (self::variavelAqui)
        return self::PI * $raio * $raio;

        // This - se refere a instancia da classe (Objeto);
        // Self -- se refere a classe de si (Calculadora);
    }
}


$area = Calculadora::areaCirculo(10);
echo calculadora::version;