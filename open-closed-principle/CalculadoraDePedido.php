<?php

class CalculadoraDePedido
{
    private $tabela;
    private $entrega;

    public function __construct(TabelaDePreco $tabela, ServicoDeEntrega $entrega)
    {
        $this->tabela = $tabela;
        $this->entrega = $entrega;
    }

    public function calcula(Pedido $pedido)
    {
        $desconto = $this->tabela->descontoPara($pedido->getTotal());
        $frete = $this->entrega->para($pedido->getCidade());

        return $pedido->getTotal() - $desconto - $frete;
    }
}