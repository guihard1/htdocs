<?php

class calculadora
{
    //invés de ser apenas public function, ela passa a ser estática
    //e não pode ser mudada.
    public static function areaCirculo(float $raio)
    {
        // Area = PI * raio * raio
        // PI = 3.14;
        return 3.14 * $raio * $raio;
    }
}


$area = Calculadora::areaCirculo(10);
echo $area;