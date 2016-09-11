<?php

class TabelaDePrecoPadrao implements TabelaDePreco
{

    function descontoPara(float $valor) : float
    {
        if($valor > 100) return $valor * 0.02;
        if($valor > 200) return $valor * 0.05;
        return $valor;
    }
}