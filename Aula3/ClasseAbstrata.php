<?php


abstract class Carro
{
    abstract protected function acelerar() : string;
    abstract protected function freiar() : string;
    abstract protected function abrirPortas() : string;

    public function buzinar(){
        echo "BI BI BI";
    }
}

Class Fusca extends Carro
{
    protected function acelerar(): string
    {
        return "Vrum Vrum";
    }
    protected function freiar(): string
    {
        return "Freiando";
    }
    protected function abrirPortas(): string
    {
        return "Abrindo";
    }

}

$carro = new fusca();
$carro->acelerar();