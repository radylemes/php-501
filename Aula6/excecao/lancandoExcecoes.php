<?php

class Comer
{
    public function __construct(bool $vegano)
    {
        $this->vegano = $vegano;
    }

    public function churraco()
    {
        if($this->vegano){
            //echo "Não como carne, vim para fazer uma media";
            throw new Exception('Eu nunca iria em um churrasco');
        }else{
            echo "Estou comendo todas as carnes possiveis";
        }
        
    }

}

$vegano = new Comer(true);
try{
    $vegano->churraco();
}catch(Exception $e){
    echo "Vegano não compareceu no churrasco";
    echo "<br>";
    //echo $e;
    //die('deu certo não');
}finally{
    echo "Todos se divertiram";
}