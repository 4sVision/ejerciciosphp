<?php
	//solicitar el archivo donde se encuntra el modelo 
	require_once 'ModeloCalculadora.php';

	//trae todos los datos del formulario
	extract($_GET);
	
	//crear un objeto
	//intanciación
	$objCal = new calculadora();

	$objCal->SetValor($num1,$num2);
	$objCal->Operaciones();

	$res=$objCal->imprimir();
	$imp1=$objCal->imprimirImp();
	$imp2=$objCal->imprimirImp2();
	$sig=$objCal->imprimirImp3();

	require_once 'VistaCalculadora.php';
?>