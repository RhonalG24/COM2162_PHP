<?php

abstract class Cuenta{
    private float $saldo = 0;

    public function depositar(float $monto) : float{
        $this->saldo += $monto;
        return $this->informarSaldo();
    }

    public function informarSaldo() : float{
        return $this->saldo;
    }

    public abstract function extraer(float $monto) : bool;

    protected function setSaldo(float $saldo) : bool{
        $this->saldo = $saldo;
        return true;
    }
}