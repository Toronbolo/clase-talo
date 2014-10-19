<?php 
class Punto {
	private $x = '';
	private $y = '';
	public function __construct($x, $y) {
		$this->setX($x);
		$this->setY($y);
		
	}
	public function setX($x) {
		if($x <= 10 && $x >= -10) {
			$this->x = $x;
		} else {
			throw new Exception("Valor Invalido en x", 1);			
		}		
	}
	public function getX(){
		return $this->x;
	}
	public function setY($y) {
		if($y <= 10 && $y >= -10) {
			$this->y = $y;
		} else {
			throw new Exception("Valor Invalido en y", 1);
		}
	}
	public function getY(){
		return $this->y;
	}
}