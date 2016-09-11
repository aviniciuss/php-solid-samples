<?php

class CarrinhoDeCompras
{
    private $cliente;
    private $itens;
    private $totalItens;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function getTotalItens(): float
    {
        return $this->totalItens;
    }

    public function addItem(CarrinhoItem $item)
    {
        $this->itens[] = $item;
        $this->somaItens();
    }

    public function getItems(): array
    {
        return $this->itens;
    }

    public function calcula(RegraDeCalculo $regra)
    {
        return $this->totalItens -= $regra->calcula($this);
    }

    private function somaItens()
    {
        $this->totalItens = 0.0;
        foreach ($this->getItems() as $item) {
            $this->totalItens += $item->getValor();
        }
    }
}