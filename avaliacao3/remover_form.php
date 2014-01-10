<html>
    <head>
        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>    
        <form action="remover.php" method="post">
            <label>Digite o código do Produto para remover</label>
            <br/>
            <input type="text" name="id" />
            <input type="submit" value="Remover" />
        </form>
    </body>
        
</html>


<?php
    session_start();
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $produtos){
            if($produtos != null){ 
            echo"[$id] => " . $produtos["nome"] . "<br/>";
            }
        }
        
        
    }
    
    else{
        echo "Não existem pessoas cadastradas";
    }
?>

