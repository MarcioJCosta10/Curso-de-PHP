<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While em PHP</title>
</head>
<body>

<?php
        /*
        $c = 1;
        do{
            echo " $c<br/>";
            $c++;
        }while( $c<=10);

        $d=10;
        do{
            echo " $d<br/>";
            $d--;
        }while( $d>=0);
        */

        $v = isset($_GET["val"])? $_GET["val"] : 1;
        echo "<h1>Calculando o Fatorial de $v</h1>";
        $c = $v;
        $fat = 1;
        do{
            $fat = $fat* $c;
            $c--;
        }while($c>=1);
        echo "<h2> O fatorial de  $v! = $fat</h2>";
        


?>

    <p><a href="19-doWhile.html"> Voltar</a></p>
</body>
</html>