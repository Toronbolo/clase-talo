<?php
	include_once 'Animal.php';
	class Perro extends Animal {
		public function __construct() {
			parent::setColor('Brown');
			parent::setCantidadPatas(4);
			parent::setSonido('Miau');
			parent::setCola(true);
		}
		public function caminar(){
			echo"I am a beatiful Cat";
		}
		public function hacerSonido(){
			echo $this->getSonido();
		}
	}
	
?>