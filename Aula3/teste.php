<?php

require_once "autoload.php";
echo "<pre>";

// // testando a classe pessoa
// $pessoa = new Pessoa("Daniel","Silva","M","2000-05-22","Brasileiro");
// $pessoa2 = new Pessoa("Luana","Batista","F","1985-09-01");
// var_dump($pessoa);
// var_dump($pessoa2);
// //ver os metodos da classe
// var_dump(get_class_methods("Pessoa"));
// echo $pessoa->apresentar();

// Testando a classe Cliente

$cliente = new Cliente("Douglas","Pereira","M","1989-01-01");
var_dump($cliente);
var_dump(get_class_methods("Cliente"));
// Acessando metodo do cliente
$cliente->comprar();
echo "<br>";
// Acessando metodo herdado
echo $cliente->apresentar();


// testando a classe funcionario

$funcionario = new Funcionario("Nome", "Sobrenome", "M", "1992-09-01",123);











