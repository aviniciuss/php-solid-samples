<?php

class Frete implements ServicoDeEntrega
{

    public function para(string $cidade) : float
    {
        if($cidade === CIDADES[0]) return 10.0;
        if($cidade === CIDADES[1]) return 15.0;
        if($cidade === CIDADES[2]) return 25.0;
        return 5.0;
    }
}