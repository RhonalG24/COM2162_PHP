<?php

class CajaAhorro extends Cuenta{


    private static float $INTERES = 1.025; 

    public function extraer(float $monto):bool{
        return ($monto <= $this->informarSaldo()) 
        ? $this->setSaldo(saldo: $this->getSaldo() - $monto) : false;
    }

    public function cobrarIntereses(): void{
        $this->setSaldo($this->getSaldo() * CajaAhorro::$INTERES);
    }
}