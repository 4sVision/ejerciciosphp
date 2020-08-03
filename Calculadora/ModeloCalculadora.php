<?php
	//Realizar el método lo la clase para hacer las operaciones de conversión

	class calculadora{
		//Declarar variables
		public $num1, $num2, $res, $imp1, $imp2;
		//Generar constructores
		//Recibr valores e inicializarlos
		public function SetValor($num1, $num2){
			$this->num1=$num1;
			$this->num2=$num2;
			$this->res=0;
			$this->sig='';
			$this->imp1=$num1;
			$this->imp2=$num2;
		}
		//operación aritmetica
		public function Operaciones(){
			if(isset($_GET['sumas'])){
				$this->res=$this->num1+$this->num2;
				$this->sig='+';
			}else{
				if(isset($_GET['restas'])){
					$this->res=$this->num1-$this->num2;
					$this->sig='-';
				}
				else{
					if(isset($_GET['multiplicars'])){
						$this->res=$this->num1*$this->num2;
						$this->sig='*';
					}
					else{
						if(isset($_GET['dividirs'])){
							if($this->num2!=0){
								$this->res=$this->num1/$this->num2;
								$this->sig='/';
							}else{
								$this->res='No se puede realizar división sobre 0.';
								$this->sig='/';
							}
						}
					}
					
				}
				
			}
			
		}
		//Devolver los daros
		public function imprimir(){
			return $this->res;
		}
		public function imprimirImp(){
			return $this->imp1;
		}
		public function imprimirImp2(){
			return $this->imp2;
		}
		public function imprimirImp3(){
			return $this->sig;
		}
	}
?>