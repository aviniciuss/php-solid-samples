<?php
declare(strict_types=1);

require "ManipuladorDeSaldo.php";
require "ContaEstudante.php";
require "ContaComum.php";

$c1 = new ContaComum();
$c1->deposita(100.0);
$c1->rende();
echo $c1->getSaldo();

echo "<br>";

$c1 = new ContaEstudante();
$c1->deposita(100.0);
echo $c1->getSaldo();
