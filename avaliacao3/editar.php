<?php
    require_once("menu.php");

    session_start();
    
    $id = $_REQUEST["id"];
    $novoNome = $_REQUEST["nome"];
    $sexo = $_REQUEST["sexo"];
    $idade = $_REQUEST["idade"];
    $estado = $_REQUEST["estado"];
    $cpf = $_REQUEST["cpf"];
    $telefone = $_REQUEST["telefone"];
    
    $aceito = false;
    if(isset($_REQUEST["aceito"])){
        $aceito = true;
    }

    if(!isset($_SESSION["cadastros"])){
        echo "Não existem cadastro para editar";
        
    }
    else{
        $cadastros =& $_SESSION["cadastros"];
        
        $pessoa = array("nome"=> $novoNome
                         , "sexo" => $sexo
                         ,"idade"=>$idade
                         ,"estado"=>$estado
                         ,"aceito"=>$aceito
                         ,"cpf"=>$cpf
                         ,"telefone"=>$telefone);
        
        $cadastros[$id] = $pessoa;
    }
    
    echo "Edição efetuado com sucesso !!!";
    
    
    
    ?>
