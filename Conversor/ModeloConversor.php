<?php
	//Realizar el método lo la clase para hacer las operaciones de conversión

	class factorial{
		//Declarar variables
		public $num, $res, $imp;
		//Generar constructores
		//Recibr valores e inicializarlos
		public function SetValor($num){
			$this->num=$num;
			$this->res=0;
			$this->de=$_GET['de'];
			$this->a=$_GET['a'];
			$this->imp=$num;
		}
		//operación aritmetica
		public function Calcular(){
			switch ($this->de) {
				case 'Celsius':
					switch ($this->a) {
						case 'Fahrenheit':
							$this->res=round(($this->num*(9/5))+32,2);
							break;
						case 'Kelvin':
							$this->res=round($this->num+273.15,2);
							break;
						default:
							$this->res=$this->num;
							break;
					}
					break;
				case 'Fahrenheit':
					switch ($this->a) {
						case 'Celsius':
							$this->res=round(($this->num-32)*(5/9),2);
							break;
						case 'Kelvin':
							$this->res=round(($this->num-32)*(5/9)+273.15,2); 
							break;
						default:
							$this->res=$this->num;
							break;
					}
					break;
				case 'Kelvin':
					switch ($this->a) {
						case 'Celsius':
							$this->res=round($this->num-273.15,2);
							break;
						case 'Fahrenheit':
							$this->res=round(($this->num-273.15)*(9/5)+32,2);
							break;
						default:
							$this->res=$this->num;
							break;
					}
					break;
				default:
					$this->res='Selecciones una opción.';
					break;
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