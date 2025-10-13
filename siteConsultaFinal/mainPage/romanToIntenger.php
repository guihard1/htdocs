<?php
// Transformando Romano para inteiro

class Solution {
    public $numRom = "I, V, X, L, C, D, M";
    public $s = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
        ];

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $s = $this->s;
        $numRom = $this->numRom;
        $romanToInt = str_replace(array_keys($s), array_values($s), $numRom);
        $romanToIntres = $romanToInt[];
        return $romanToIntres;
    }
}