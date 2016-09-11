<?php

class Pedido
{
    private $numero;
    private $cidade;
    private $total = 0.0;
    private $items = [];

    public function __construct(int $numero, string $cidade)
    {
        $this->numero = $numero;
        $this->cidade = $cidade;
    }

    public function adicionaItem(ItemPedido $item)
    {
        $this->items[] = $item;
        $this->calcula();
    }

    public function buscaItens()
    {
        return $this->items;
    }

    private function calcula()
    {
        $this->total = 0.0;
        foreach($this->buscaItens() as $item) {
            $this->total += $item->getValor();
        }
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }
}