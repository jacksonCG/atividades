<?php

include("../lib/validaDatas.php");

$dataI = 0;
$dataF = 0;


$dataAtual = date("Y/m/d");

$dataI = $_POST["dataI"];
$dataF = $_POST["dataF"];

$vetor1 = explode("/", $dataI);
$vetor2 = explode("/", $dataF);
$data1 = validaData($vetor1[0],$vetor1[1],$vetor1[2]);
if(!$data1){
	echo " (erros na data Inicial) <br/> ";
}


$data2 = validaData($vetor2[0],$vetor2[1],$vetor2[2]);
if(!$data2){
	echo " (erros na data Final) <br/> ";
}


$dataI = str_replace("/", "-", $dataI);
$dataF = str_replace("/", "-", $dataF);

$dataAtual = strtotime($dataAtual);
$dataI = strtotime($dataI);
$dataF = strtotime($dataF);

if ($dataAtual >= $dataI and $dataAtual <= $dataF){
	echo"PERIODO DESEJADO PRA GASTAR ;) ";
}
else{
	echo"PERIODO SEM COMPRAS :( ";
}

?>  






