<?php

class Quadrado implements Forma
{
    /**
     * Esta Classe Tem como Funcionalidade clacular atributos 
     * de um Quadrado
     */
    public function __construct(float $lado)
    {
        $this->lado = $lado;
    }
    public function getArea(): float
    {
        /**
         * Este metodo calcula a area do Quadrado
         */
        return pow($this->lado, 2);
    }
}