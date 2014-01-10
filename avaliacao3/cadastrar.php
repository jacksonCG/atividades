<?php
    require_once("menu.php");

    session_start();
    
    $nome = $_REQUEST["nome"];
    $cor = $_REQUEST["cor"];
    $prazo = $_REQUEST["prazo"];
    $detalhes = $_REQUEST["detalhes"];
       
    
    $aceito = false;
    if(isset($_REQUEST["aceito"])){
        $aceito = true;
    }

    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array();
        
    }
    
    $produtos = array("nome" => $nome,"detalhes"=>$detalhes, "cor" => $cor,"aceito"=>$aceito,"prazo"=>$prazo);
    
    array_push($_SESSION["cadastros"],$produtos);
    
    echo"Cadastro efetuado com sucesso !!!";
    
    
    
    ?>
