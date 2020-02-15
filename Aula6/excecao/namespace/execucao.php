<?php

include 'Estoque.php';

include 'Produtos.php';

use Produtos\Estoque as EstoqueProd;
use Estoque\Estoque;

$obj = new Produtos\Estoque();
echo $obj->getItens();