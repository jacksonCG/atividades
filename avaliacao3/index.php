<style>
    .Vermelho{
        color:red;
    }
    .Azul{
        color:blue;
    }
    .Verde{
        color:green;
    }
</style>
<?php
    require_once("menu.php");

    session_start();

    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        echo"<dl>";
        
        foreach($cadastros as $produtos){
            if($produtos != null){
                
                $cor = $produtos["cor"];
                $aceito=$produtos["aceito"];
                $prazo = $produtos["prazo"];
                $detalhes = $produtos["detalhes"];
                //titulo da descrição
                echo "<dt class='$cor'>" . $produtos["nome"]. "</dt>";
                //detalhes da descrição
                echo "<dd>Cor: " . $cor . "</dd>";
               
                echo "<dd>Prazo:" . $prazo . "</dd>";
                
                echo "<dd>Detalhes:" . $detalhes . "</dd>";
                
                echo"<dd>Aceito o contrato*:";
                if($aceito){
                    echo"sim";
                }
                else{
                    echo"Não";
                }
                echo"</dd>";
            }
            
        }
        echo"</dl>";
        
    }    
    else{
        echo "Não existem produtos cadastradas";
    }
?>
