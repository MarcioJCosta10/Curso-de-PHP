<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php 
        //Operadores de atribuição
        /*
        = Atribuição 
        += Adição
        -= Subtração
        *= Multiplicação
        /= Divisão
        %= Módulo
        .= Concatenação
        $a++; Pré Incremento
        $a--; Pré Decremento
        ++$a;
        --$a;



        
        $a = 1;
        $b = 3;
        $c = $a + $b;
        $c = $c + 5;
        $c += 5;
        $b +=$a;
        $a++;
        */
          
        $preco = $_GET["p"];
        echo "O preço do produto é R$ $preco";
        //$preco = $preco + ($preco*10/100);
        $preco+= $preco*10/100;
        echo "<br/> O novo preço com 10% de aumento será R$ ".number_format($preco,2,",",".");
        $preco-= $preco*10/100;
        echo "<br/> O novo preço com 10% de desconto será R$  ".number_format($preco,2,",",".");
        

    
    ?>
</body>
</html>