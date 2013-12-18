<?php
date_default_timezone_set("Brazil/East");
$dataAtual = getdate();

$dia = $dataAtual["mday"];
$mes = $dataAtual ["mon"];
$ano = $dataAtual ["year"];

$hora =  $dataAtual["hours"] -1;
$minutos = $dataAtual ["minutes"];

$diaSemana = $dataAtual["wday"];

switch ($diaSemana){
case 0:
	echo "Domingo";
	echo "<br/>";
		break;
case 1:
	echo "Segunda";
	echo "<br/>";
		break;
case 2:
	echo "Terça";
	echo "<br/>";
		break;
case 3:
	echo "Quarta";
	echo "<br/>";
		break;
case 4:
	echo "Quinta";
	echo "<br/>";
		break;
case 5:
	echo "Sexta";
	echo "<br/>";
		break;
case 6:
	echo "Sábado";
	echo "<br/>";
		break;

}

	echo $dia/$mes/$ano" . "<br>" . "0$horas:$minutos";




?>  
