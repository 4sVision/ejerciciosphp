<?php
	//solicitar el archivo donde se encuntra el modelo 
	require_once 'ModeloConversor.php';

	//trae todos los datos del formulario
	extract($_GET);
	
	//crear un objeto
	//intanciación
	$objFact = new factorial();

	$objFact->SetValor($num);
	$objFact->Calcular();

	$res=$objFact->imprimir();
	$imp=$objFact->imprimirImp();

	require_once 'VistaConversor.php';
?>