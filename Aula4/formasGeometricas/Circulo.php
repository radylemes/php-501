<?php

class Circulo implements Forma
{
    /**
     * Esta Classe Tem como Funcionalidade clacular atributos 
     * de um circulo
     */
    public function __construct(float $raio)
    {
        $this->raio = $raio;
    }
    public function getArea(): float
    {
        /**
         * Este metodo calcula a area do circulo
         */
        return pow($this->raio, 2)* self::PI;
    }
}