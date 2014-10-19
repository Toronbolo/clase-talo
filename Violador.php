<?php
include_once 'Animal.php';
class Violador {
	private $animal;
	public function __construct(Animal $animal){
		$this->animal = $animal;
	}

	public function violar() {

		$this->animal->caminar();
		echo "<br>";
		$this->animal->hacerSonido();
	}
	public function setAnimal($animal) {
		$this->animal = $animal;
	}
	public function getAnimal() {
		return $animal;
	}
}