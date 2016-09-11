<?php


class ManipuladorDeSaldo
{
    private $saldo;

    public function __construct()
    {
        $this->saldo = 0.0;
    }

    public function saca(float $valor) : float
    {
        if($valor > 0 && $valor <= $this->saldo) {
            return $this->saldo -= $valor;
        }
        throw new \Exception("Valor indisponível");
    }

    public function deposita(float $valor)
    {
        if($valor <= 0) throw new \Exception("Valor inválido");
        $this->saldo += $valor;
    }

    public function rende()
    {
        $this->saldo *= 1.1;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }
}