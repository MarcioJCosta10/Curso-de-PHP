<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>

<?php
        //Operadores aritméticos
        /*
        + Adição
        - Subtração
        / Divisão
        * Multiplicação
        % Módulo

        // Ordem de precedencia
        Parêntes ()

        Multiplicação 
        Divisão    * / %
        Módulo
        
        Adição    + -
        Subtração       
        
        */
        
        //$n1=5;
          $n1 = $_GET["a"];

        //$n2=3;
          $n2 = $_GET["b"];

        echo "<h1> Valores recebidos: $n1 e $n2</h1>";
        $s= $n1+ $n2;
        $m = ($n1+ $n2) / 2;
        echo "A soma entre $n1 e $n2 vale $s";
        echo "<br/>A soma vale ".($n1 + $n2);
        echo "<br/> A subtração vale ".($n1 - $n2);    
        echo "<br/> Amultiplicação vale ".( $n1 * $n2);
        echo "<br/> A divisão vale ".($n1 / $n2);
        echo "<br/> O módulo vale ". ($n1 % $n2);
        echo "<br/> A média vale $m"


        // Como usar valores personalizados direto pela url
        //http://127.0.0.1:8080/olamundo/2-operadores_aritmeticos.php?a=5&b=8


?>      
    
</body>
</html>