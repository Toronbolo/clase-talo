<?php
include_once 'Punto.php';
class Triangulo {
	private $punto;
	private $punto2;
	private $punto3;

	public function __construct(Punto $a, Punto $b, Punto $c){
		$this->punto = $a;
		$this->punto2 = $b;
		$this->punto3 = $c;
	}

	public function getPuntos(){
		return array($this->punto,$this->punto2,$this->punto3);
	}
}