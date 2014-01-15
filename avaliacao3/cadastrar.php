<?php
    require_once("menu.php");
    session_start();
    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array();
        
    }
    
    $nome = $_REQUEST["nome"];
    $observacoes = $_REQUEST["observacoes"];
    $idade = $_REQUEST["idade"];
    $estado = $_REQUEST["estado"];
    $aceito = false;
    if(isset($_REQUEST["aceito"])){
        $aceito = true;
    }
    
    //validacao
    $campos = true;
    
    $observacoes = $_REQUEST["observacoes"];
    $observacoes = trim($observacoes);
    if(empty($observacoes)){
        $observacoes = trim($observacoes);
        echo"Por Favor,preencha o campo observacao <br/>";
        $campos = false;
    }
    
    if(empty($idade)){
        echo"Por Favor,preencha o campo idade <br/>";
        $campos = false; 
    }
    $nome = $_REQUEST["nome"];
    $nome = trim($nome);
    if(empty($nome)){
        echo"Por Favor, preencha o campo nome <br/>";
        $campos = false;
    }
    
    if($estado == -1){
        echo"Por Favor selecione um estado";
        $campos = false;
    }
    
    if(!isset($_REQUEST["sexo"])){
        echo"Por Favor preencha o sexo";
        $campos = false;
    }
    else{
        $sexo = $_REQUEST["sexo"];
    }
    

    //cadastro
    if($campos){
        $pessoa = array("nome" => $nome
                         ,"sexo" => $sexo
                         ,"idade" => $idade
                         ,"aceito"=>$aceito
                         ,"estado"=>$estado);
        
        array_push($_SESSION["cadastros"],$pessoa);
        
        echo"Cadastro efetuado com sucesso !!!";
    }
    else{
        echo"<br/>";
        echo"<input type='button' onclick='history.go(-1)' value='voltar' />";
    }
    
    
    
    ?>
