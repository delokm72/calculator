<?php

class Calculator implements CalculatorMaket
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtraction($a, $b)
    {
        return $a - $b;
    }

    public function multiple($a, $b)
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {
        if ($b != 0)
        {
            return $a / $b;
        }
        else echo "WTF?!";
    }
}
