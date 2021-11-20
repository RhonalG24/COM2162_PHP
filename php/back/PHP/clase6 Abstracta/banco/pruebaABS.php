<?php
include("Cuenta.php");
include("CajaAhorro.php");
include("CuentaCorriente.php");

//No puedo instanciar una clase abstracta
// $cuenta = new Cuenta();

$cajaAhorro = new CajaAhorro();
$cuentaC = new CuentaCorriente();

$cajaAhorro->depositar(monto : 10000);
$cajaAhorro->extraer(monto: 5000);

$cuentaC->depositar(monto: 20000);
$cuentaC->extraer((monto: 8000));

echo('<pre>'); //para dar formato al var_dump
var_dump($cajaAhorro);
var_dump($cuentaC);
echo('<pre>');