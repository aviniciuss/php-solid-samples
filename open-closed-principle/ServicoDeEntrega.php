<?php

interface ServicoDeEntrega
{
    public function para(string $cidade) : float;
}