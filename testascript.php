<?php
	require('Garantia.class.php');
	
	$obj = new Garantia();
	//$obj->teste();
	//$obj->tempoGarantia('2017-01-23' , '2019-12-17');
	//$obj->calcAno2(2); //Quantidade de anos de garantia
	$obj->calcMes(7); //Quantidade de meses da garantia
	echo $obj->retornaData();
?>