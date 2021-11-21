<?php
//instanciar un objeto de tipo Cliente
require_once("Cliente.php");

$cliente1 = new Cliente(
    nombre: "Alejandro",
    dni: 1234568,
    telefono: 11456321
);

$cliente2 = new Cliente(
    nombre: "Sofia",
    dni: 51463325,
    telefono: 11852369
);

$cliente2->setNroSocio(nroSocio: 2);
echo ($cliente2->getNroSocio());
