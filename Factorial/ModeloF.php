<?php
	//Realizar el método lo la clase para hacer las operaciones de conversión

	class factorial{
		//Declarar variables
		public $num, $res, $imp;
		//Generar constructores
		//Recibr valores e inicializarlos
		public function SetValor($num){
			$this->num=$num;
			$this->res=1;
			$this->imp=$num;
		}
		//operación aritmetica
		public function Calcular(){
			while($this->num>0){
				$this->res=$this->res*$this->num;
				$this->num--;
			}
		}
		//Devolver los daros
		public function imprimir(){
			return $this->res;
		}
		public function imprimirImp(){
			return $this->imp;
		}
	}
?>