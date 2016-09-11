<?php


class CalculaPedidoComDesconto
{
    public function calcula(CarrinhoDeCompras $carrinho)
    {
        if($carrinho->getTotalItens() > 400) {
            return $carrinho->calcula(new VintePorCento());
        } else if($carrinho->getTotalItens() > 200) {
            return $carrinho->calcula(new DezPorCento());
        }
        return $carrinho->getTotalItens();
    }
}