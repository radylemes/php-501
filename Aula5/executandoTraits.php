<?php

require 'funcionalidades.php';

class Calculadora
{
    use OperacaoesComplexas, Operacoes, Formatar {
        Operacoes::somar insteadof OperacaoesComplexas;
        OperacaoesComplexas::somar as somarLista;
    }
}

class CalculadoraSimples
{
    use Operacoes;
}

class CalculadoraComplexa
{
    use OperacaoesComplexas;
}


$calculo = new Calculadora;

echo "A soma de 2 com 3 {$calculo->somar(2, 3)}";
echo $calculo->quebraLinha();
echo "A subtração de 2 com 3 {$calculo->subtrair(2, 3)}";
echo $calculo->quebraLinha();
echo "A multiplicação de 2 com 3 {$calculo->multiplicar(2, 3)}";
echo $calculo->quebraLinha();
echo "A dividir de 2 com 3 {$calculo->dividir(2, 3)}";
echo $calculo->quebraLinha();

echo "A soma da lista é {$calculo->somarLista([2, 2, 4])}";
echo $calculo->quebraLinha();
echo $calculo->quebraLinha();
echo $calculo->quebraLinha();

$calculo2 = new CalculadoraComplexa;
echo "2 elevado a 3 {$calculo2->elevar(2, 3)}";
echo $calculo->quebraLinha();

echo "raiz quadrade 4 {$calculo2->raizQuadrada(4)}";
echo $calculo->quebraLinha();
