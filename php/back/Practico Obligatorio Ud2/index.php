<?php
require_once("Usuario.php");

$usuario1 = new Usuario;

$usuario1->setNombre("Rhonal");
$usuario1->setApellido("Gonzalez");
$usuario1->setEdad(26);
$usuario1->setHobbie("Programar, musica.");
$usuario1->setEditorCodigo("VSCode");
$usuario1->setSistemaOp("Linux");

echo("Mi nombre es ". $usuario1->getNombre() . " " . $usuario1->getApellido() . "<br>");
echo("Tengo ". $usuario1->getEdad() . " años. <br>");

echo("Mis hobbies son: ". $usuario1->getHobbie() . "<br>");

echo("Mi editor de codigo favorito es ". $usuario1->getEditorCodigo() . " por ahora. <br>");

echo("El SO que utilizo actualmente es ". $usuario1->getSistemaOp() );

// echo('<pre>');
// var_dump($usuario1);
// echo('</pre>');
