<?php 

class MinhaExcecao extends Exception
{
    public function __construct($message, $code=0 , Exception $previous =null)
    {
        parent::__construct($message,$code,$previous);
    }
    public function __toString()
    {
        return __CLASS__. ": [{$this->code}]: {$this->message}\n";
    }

    public function customFunction()
    {
        echo "Uma função especifica desse tipo de exceção\n";
    }
}