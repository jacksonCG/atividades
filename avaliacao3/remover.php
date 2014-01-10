<?php
    require_once("menu.php");

    session_start();
    
    $id = $_REQUEST["id"];

    if(!isset($_SESSION["cadastros"])){
        echo "Não existem cadatro para remover";
        
    }
    else{
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = null;
    }
    
    echo"Remoção efetuado com sucesso !!!";
    
    
    
    ?>
