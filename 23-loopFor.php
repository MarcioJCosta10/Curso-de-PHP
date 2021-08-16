<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop For PHP</title>
</head>
<body>
    
<?php
    /*
    // Procedimento ou função que não retorna valor
    function soma($a, $b){
        $s = $a + $b;
        echo "<p>A soma vale $s</p>";
    }
    soma(3,4);
    soma(8,2);
    $x=9;
    $y=15;
    soma($x,$y);

    // Função com retorno
    */

    function soma ( $a, $b){
        $s = $a + $b;
        return $s; // Posso retornar diretamente $a + $b
    }
    $x = 3;
    $y = 4;
    $r = soma(5,7);
    echo "A soma entre $x e $y é igua a $r<br/>";   
    
    
    //Parâmetros variáveis ou multiplo parametros

    function soma2(){
        $p = func_get_args(); // vai criar um vetor de argumentos
        $t = func_num_args();// vai retornar o numero de argumentos que foram passados
        $s= 0;

        for ( $i = 0; $i < $t; $i++ ){        
            $s = $s + $p[$i];
        }

        return $s;
    }
    $resultado = soma2(3,5,5,9,10); // cada vez que adiciono um valor ele será adicionado a minha função
    echo "A soma dos valores é $resultado";

?>
</body>
</html>