<?php
declare(strict_types=1);

require "cidades.php";
require "Pedido.php";
require "ItemPedido.php";
require "TabelaDePreco.php";
require "ServicoDeEntrega.php";
require "CalculadoraDePedido.php";
require "TabelaDePrecoPadrao.php";
require "Frete.php";

$pedido = new Pedido(1525588, CIDADES[0]);
$pedido->adicionaItem(new ItemPedido("Prod 01", 150.0));
$pedido->adicionaItem(new ItemPedido("Prod 02", 45.0));

$calculadora = new CalculadoraDePedido(new TabelaDePrecoPadrao(), new Frete());
echo $calculadora->calcula($pedido);

echo "<pre>";
print_r($pedido);