<?php
    require_once("menu.php");

    session_start();
    
    $id = $_REQUEST["id"];
    $novoNome = $_REQUEST["nome"];
    $cor = $_REQUEST["cor"];
    $detalhes = $_REQUEST["detalhes"];
    $aceito = $_REQUEST["aceito"];
    
    
    
    $prazo = $_REQUEST["prazo"];

    if(!isset($_SESSION["cadastros"])){
        echo "Não existem cadastro para editar";
        
    }
    else{
        $cadastros =& $_SESSION["cadastros"];
        
        $produtos = array("aceito"=>$aceito,"nome"=> $novoNome,"detalhes"=>$detalhes, "cor" => $cor,"prazo"=>$prazo);
        
        $cadastros[$id] = $produtos;
    }
    
    echo "Edição efetuado com sucesso !!!";
    
    
    
    ?>
