<?php
abstract class Animal {
	private $color;
	private $cantidadPatas;
	private $sonido;
	private $cola;
	
	public abstract function caminar();
	public abstract function hacerSonido();

	public function getColor(){
		return $this->color;
	}
	public function setColor($color){
		$this->color = $color;
	}
	public function getCantidadPatas(){
		return $this->cantidadPatas;
	}
	public function setCantidadPatas($cantidadPatas){
		$this->cantidadPatas=$cantidadPatas;
	}
	public function getSonido(){
		return $this->sonido;
	}
	public function setSonido($sonido){
		$this->sonido=$sonido;
	}
	public function hasCola(){
		return $this->cola;
	}
	public function setCola($cola){
		$this->cola = $cola;
	}
}
?>