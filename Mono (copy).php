<?php
	include_once 'Animal.php';
	class Mono extends Animal {
		public function __construct() {
			parent::setColor('Brown');
			parent::setCantidadPatas(4);
			parent::setSonido('mojojojo');
			parent::setCola(true);
		}
		public function caminar(){
			echo"I am a beatiful butterfly";
		}
		public function hacerSonido(){
			echo $this->getSonido();
		}
	}
	
?>