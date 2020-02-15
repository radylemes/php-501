<?php

trait Operacoes
{
    public function somar($n1, $n2): float
    {
        return $n1 + $n2;
    }
    public function subtrair($n1, $n2): float
    {
        return $n1 - $n2;
    }
    public function multiplicar($n1, $n2): float
    {
        return $n1 * $n2;
    }
    public function dividir($n1, $n2): float
    {
        return $n1 / $n2;
    }
}

trait OperacaoesComplexas
{
    public function somar(array $numeros): float
    {
        return array_sum($numeros);
    }
    public function elevar($num, $expo): float
    {
        return pow($num, $expo);
    }
    public function raizQuadrada($num): float
    {
        return sqrt($num);
    }
}

trait Formatar
{
    public function quebraLinha($numeroDeLinhas = 1)
    {
        for ($i = 1; $i <= $numeroDeLinhas; $i++) {
            echo "<br>";
        }
    }
}
