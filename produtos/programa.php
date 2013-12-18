<?php
$produto = 0;

$produto = $_POST["produto"];
switch ($produto){
	case 1:
		echo "Caneta -> 1,20";
		break;
	case 2:
		echo "lapes -> 0,80";
		break;
	case 3:
		echo "caderno -> 4,50";
		break;
	default:
		echo "produto não cadastrado";
}

?>
