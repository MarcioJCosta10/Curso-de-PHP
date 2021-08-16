<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>
    <?php
        /*
            Maior $a > $b;
            Menor $a < $b ;
            Maior ou igual $a >= $b;
            Menor ou igual $a <= $b;
            Diferente $a <> $b $a != $b
            Igual $a == $b
            Idêntico $a === $b -- Testa se são dos mesmos tipo e iguais  
            
            
            Operador Ternário expressão ? verdadeiro: falso  $a > $ b ? $a : $b;
            Ex: $maior = $a > $b ? $a : $b;   
                $r = $a > $b ? $a + $b : $a - $b;
                $sit = $m > 7 ? "recuperação" : "aprovado";
                    
        */

        $n1= $_GET["a"];
        $n2= $_GET["a"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2 <br/>";
        $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
        echo " O resultado será $r<br/>";


        $a = 3;
        $b = "3";
        $r2 = ($a==$b) ? "SIM" : "NÃO <br/>";
        $r3 =  ($a === $b) ? "SIM": "NÃO <br/>";
        echo "O resultado2 é $r2<br/>";
        echo " As variáveis a e b são identicas? $r3";






    ?>
</body>
</html>