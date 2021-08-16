<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop While PHP</title>
</head>
<body>
    <div>   

        <form action="17-loopWhilePhp.php" method="GET">
            <?php

            $c=1;
            while($c<=5){
        echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br>"; 
            $c++;                 
            }        
            
            
            ?>
                    <input type="submit" value="Enviar" />            

    </form>
</div>
         



<!--/*
    $c = 1;
    while($c <10){
        echo "O valor de $c <br/>" ;
        $c++;
    }
    $d=10;
    while($d>=1){
        echo "O valor de $d<br/>";
        $d-=2;
    }
    */-->
    
    <a href="17-loopWhilePhp.html">Voltar </a>
</body>
</html>


