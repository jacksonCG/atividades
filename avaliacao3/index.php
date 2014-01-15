<style>
    .m{
        color:blue;
    }
    .f{
        color:red;
    }
</style>
<?php
    require_once("menu.php");

    session_start();

    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        echo"<dl>";
        
        foreach($cadastros as $pessoas){
            if($pessoas != null){
                
                $sexo = $pessoas["sexo"];
                $idade=$pessoas["idade"];
                $aceito=$pessoas["aceito"];
                $estado = $pessoas["estado"];
                //titulo da descrição
                echo "<dt class='$sexo'>" . $pessoas["nome"]. "</dt>";
                //detalhes da descrição
                echo "<dd>Sexo: " . $sexo . "</dd>";
                echo "<dd>Idade:" . $idade . "</dd>";
                echo "<dd>Estado:" . $estado . "</dd>";
                
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
        echo "Não existem pessoas cadastradas";
    }
?>
