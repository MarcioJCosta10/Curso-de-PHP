<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis em PHP</title>
    <style>
        h2{
            color:#80a2ff;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>
<h1>Testando Variáveis</h1>
<?php 
    /*  
        As variáveis são case sensitive
        
        $idade=3;
        $sal=1825.4;
        $nome="Marciano";
        $casado=false;

        // Em PHP não exite a declaração de tipo da variável, o PHP faz a atribuição por coerção;
        // Podemos fazer a conversão de tipo forçada
        Inteiro (int), (integer) --> typecast
        Real    (real), (float), (double) --> typecast
        Caractere (string) --> typecast
        Lógioco (??) --> typecast
    */    
    $n=4;
    $n1=5;
    $no = (string)"Marciano";
    echo $no, (int)$n+$n1;
    $n1=4.5;
    echo $no, (int)$n+$n1;


    //Como realizar concatenação
    $nome2= "Marciano Costa";
    $idade=37;
    //Assim:
    //echo $nome2." tem ".$idade." anos."  
    
    //ou assim
    echo "$nome2 tem $idade anos" // sempre em aspas duplas

?>
    
</body>
</html>