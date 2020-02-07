<?php

interface Carro
{
    public function acelerar();
    public function freiar();
    public function re();
    public function buzinar();

    const RODAS = 4;

}


class Fusca implements Carro
{

    //const RODAS = 3 //não pode ser modificada precisa seguir os padrões da interface
    public function acelerar()
    {
        return "Trec Trec";
    }
    public function freiar()
    {
        return "Barulhos de carro desmontando";
    }
    public function re()
    {
        return "Barulhos de carro prestes a explodir";
    }
    public function buzinar()
    {
        return "Barulho menor que do proprio motor";
    }
    public function abrirPortas()
    {
        return "Barulho de porta abrindo";
    }
}
$fusca = new Fusca();
echo $fusca->acelerar();