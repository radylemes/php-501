<?php

//Criar uma classe carro
// Essa classe tem um método construtor para
// Especificar a marca do carro

// possui 3 atributos
// Marca, Cor, Ano

// possui 2 metodos internos
// Acelerar e freiar

// usar 1 trait de nome Funcionalidades do carro
// que possui os metodos:
// buzinar, Desligar

trait FuncionalidadesDoCarro
{
    public function Buzinar()
    {
        return "bi, bi";
    }
    public function Desligar()
    {
        return "Desliga o carro";
    }
}


class Carro
{
    use FuncionalidadesDoCarro;

    public function __construct(
                        $marca,
                        $cor,
                        $ano
    ){
        $this->marca = $marca;
        $this->cor   = $cor;
        $this->ano   = $ano;
    }
    public function Acelerar()
    {
        return "vrum, vrum";
    }
    public function Freiar()
    {
        return "Para o carro";
    }

}


