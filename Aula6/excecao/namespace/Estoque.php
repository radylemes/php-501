<?php

//Criar uma classe que possua um método chamado getItens
//Que retorna uma string falando "Retornando itens pela classe __CLASS__"

namespace Estoque;
class Estoque
{

    function getItens(){

        return "Retornando itens pela classe " . __CLASS__;
    }
}

