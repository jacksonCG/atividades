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
    $cpf = $_REQUEST["cpf"];
    $telefone = $_REQUEST["telefone"];
    
    
    $aceito = false;
    if(isset($_REQUEST["aceito"])){
        $aceito = true;
    }
    
    //validacao
    $campos = true;
    
    //CPF
    $cpf = trim($cpf);
    if(strlen($cpf)!=14 and strlen($cpf) !=11){
        $cpf = trim($cpf);
        echo"Tamanho invalido para <b>CPF</b> <br/>";
        $campos = false;
    }
    
    //TELEFONE
    $telefone = trim($telefone);
    if(strlen($telefone)!=8){
        echo"Tamanho invalido para <b>TELEFONE</b> <br/>";
        $campos = false;
    }
    else if(!ctype_digit($telefone)){
        echo"Campo Telefone somente com <b>NUMERO</b> <br/>";
        $campos = false;
    }
    
    //OBSERVAÇÃO
    $observacoes = trim($observacoes);
    if(empty($observacoes)){
        echo"Por Favor,preencha o campo <b>OBSERVAÇÃO</b> <br/>";
        $campos = false;
    }
    else if(!ctype_alnum($observacoes)){
        echo"Campo observacao somente com <b>LETRAS & NUMEROS </b> <br/>";
        $campos = false;
    }
    
    //IDADE
    $idade = trim($idade);
    if(empty($idade)){
        echo"Por Favor,preencha o campo <b>IDADE</b> <br/>";
        $campos = false; 
    }
    
    //NOME
    $nome = trim($nome);
    if(empty($nome)){
        echo"Por Favor, preencha o campo <b>NOME</b> <br/>";
        $campos = false;
    }
    else if(!ctype_alpha($nome)){
        echo"Campo Nome somente com <b>LETRAS</b> <br/>";
        $campos = false;
    }
    
    //ESTADO
    if($estado == -1){
        echo"Por Favor selecione um <b>ESTADO</b>";
        $campos = false;
    }
    
    //SEXO
    if(!isset($_REQUEST["sexo"])){
        echo"Por Favor preencha o <b>SEXO</b>";
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
                         ,"estado"=>$estado
                         ,"cpf"=>$cpf
                         ,"telefone"=>$telefone);
        
        array_push($_SESSION["cadastros"],$pessoa);
        
        echo"Cadastro efetuado com SUCESSO !!!";
    }
    else{
        echo"<br/>";
        echo"<input type='button' onclick='history.go(-1)' value='voltar' />";
    }
    
    
    
    ?>
