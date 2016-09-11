<?php


class DezPorCento implements RegraDeCalculo
{
    public function calcula(CarrinhoDeCompras $carrinho)
    {
        return $carrinho->getTotalItens() * 0.10;
    }
}