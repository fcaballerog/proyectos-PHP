<?php

	class Persona{
		//propiedades
		private $nif;
		private $nombre;
		private $fecha;
		private $sexo;

		/*function __construct(){
			$this->nif = "12345678Y";
			$this->nombre = "anonimo";
			$this->fecha = "20170928";
			$this->sexo = "M";
		}*/

		function __construct($nif="", $nombre="", $fecha="", $sexo=""){
			$this->nif = $nif;
			$this->nombre = $nombre;
			$this->fecha = $fecha;
			$this->sexo = $sexo;
		}


		public function getNif(){
			return $this->nif; 
		}

		public function getNombre(){
			return $this->nombre; 
		}

		public function getFecha(){
			return $this->fecha; 
		}

		public function getSexo(){
			return $this->sexo; 
		}
	}

	$persona1 = new Persona();
	$persona2 = new Persona("45672139R", "Manuel", "19871124", "M");
	$persona3 = new Persona("", "", "19871124", "M");

	// echo (gettype($persona2));

	// var_dump($persona3);

	echo ($persona2->getNombre());


?>