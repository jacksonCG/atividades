<?php
$chocolatesBrancos = 0;
$chocalatesEscuros = 0;
$promocaoB = 0;
$promocaoE = 0;
$contagem = 0;

$chocolatesBrancos = $_POST["chocolatesBrancos"];
$chocolatesEscuros = $_POST["chocolatesEscuros"];


$contagem = 3;
while ($contagem <= $chocolatesEscuros){
	$promocaoB = $promocaoB + 1;
	$contagem = $contagem + 3;
}

$contagem = 2;
while ($contagem <= $chocolatesBrancos){
	$promocaoE = $promocaoE + 1;
	$contagem = $contagem + 2;
}

$contagem = 5;
while ($contagem <= ($chocolatesBrancos + $chocolatesEscuros)){
	$promocaoB = $promocaoB + 1;
	$contagem = $contagem + 5;
}

echo "CHOCOLATES BRANCO É:" . ($promocaoB + $chocolatesBrancos) . "<br/>";
echo "CHOCOLATES ESCUROS É:" . ($promocaoE + $chocolatesEscuros) . "<br/>";




?>  



