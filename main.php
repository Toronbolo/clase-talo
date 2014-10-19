<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'Animal.php';
include_once 'Punto.php';
include_once 'Triangulo.php';
include_once 'Mono.php';
include_once 'Perro.php';
include_once 'Violador.php';

$mono = new Mono();

$perro = new Perro();
$violador = new Violador($perro);
$violador->violar();


// $a = new Punto(10, 6);
// $b = new Punto(4, 7);
// $c = new Punto(1, -1);
// $tri = new Triangulo($a,$b,$c);
// print_r($tri->getPuntos());
// // $a->setX(88);

// echo 'Valor de X:'.$a->getX(). '<br>';
// echo 'Valor de Y:'.$a->getY();
?>