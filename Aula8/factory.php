<?php

class SmartPhone
{
    public function ligar()
    {
        echo "Ligou pra mim.";
    }
}

class SmartWatch
{
    public function verHora()
    {
        echo "Agora são 22:00";
    }
}

class Pc
{
    public function ligar()
    {
    
    }

}

class Xiaomi
{
    public static function criar(string $produto)
    {
        $classe = ucfirst($produto);
        return new $classe;
    }
}

$smartphone = Xiaomi::criar('SmartPhone');
$smartwatch = Xiaomi::criar('SmartWatch');
$smartphone->ligar();
$smartwatch->verHora();