<?php
include_once("Mascota.php");
include_once("Perro.php");
include_once("Gato.php");
include_once("Duenio.php");

$duenio1 = new Duenio(nombre : "Juan", dni : 32165487);

$masc1 = new Perro(nombre: "Joy", edad: 2, raza: "NA", $duenio1);
$masc2 = new Gato(nombre: "Lu", edad: 3, raza: "NA", $duenio1);
$masc1->darTratamiento();
$masc2->darTratamiento();
