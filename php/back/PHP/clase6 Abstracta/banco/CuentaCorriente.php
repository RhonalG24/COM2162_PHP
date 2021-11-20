<?php
class CuentaCorriente extends Cuenta{
    public float $descubiertoPermitido = 0:

    public function extraer(float $monto): bool
    {
        return ($monto <= ($this->informarSaldo() + $this->descubiertoPermitido)) ? 
        $this->setSaldo(saldo: $this->getSaldo()-$monto) : false;  
    }
}