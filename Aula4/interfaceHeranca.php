<?php

interface Humano
{
    const SAUDAVEL = true;
    public function comer();
}

interface Funcionario extends Humano
{
    public function atenderCliente();
}

interface Desemvolvedor extends Humano, Funcionario
{
    public function desenvolver();
}

class MultiTarefas implements Desemvolvedor
{
    const PACIENCIA = true;
    public function atenderCliente()
    {
        if (self::PACIENCIA == true) {
            return "Fazendo o melhor atendimento possivel";
        }else{
            return "Realizando o atendimento";
        }
    }
    public function desenvolver()
    {
        return "Escrevendo codigos....";
    }
    public function comer()
    {
        return "10 minutos de amoço";
    }
}

echo Humano::SAUDAVEL;
echo "<br>";
$dev = new MultiTarefas();
echo $dev->atenderCliente();
echo "<br>";
echo $dev->desenvolver();
echo "<br>";
echo $dev->comer();
echo "<br>";