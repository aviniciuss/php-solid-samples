<?php
declare(strict_types=1);

require "Cliente.php";
require "CarrinhoDeCompras.php";
require "CarrinhoItem.php";
require "RegraDeCalculo.php";
require "DezPorCento.php";
require "VintePorCento.php";
require "CalculaPedidoComDesconto.php";

$cliente = new Cliente("Anderson Vinicius");
$carrinho = new CarrinhoDeCompras($cliente);
$carrinho->addItem(new CarrinhoItem("Produto 01", 180.0));
$carrinho->addItem(new CarrinhoItem("Produto 02", 50.0));
$calcula = new CalculaPedidoComDesconto();

echo $calcula->calcula($carrinho);


echo "<pre>";
print_r($carrinho);