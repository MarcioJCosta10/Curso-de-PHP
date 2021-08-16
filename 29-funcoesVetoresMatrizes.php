<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Vetores e Matrizes em PHP</title>
    
</head>
<body>
    <pre>
    <?php 
    
    // Exibindo o vetor print_r()
        echo "Exibindo o vetor com print_r()<br/>";
        $v = array("A","J","M","X","K");
       print_r($v); 
    
       echo "</br>" ;
    // Mostrar a quantidade de elementos do vetor
    
    echo "Mostrar a quantidade de elementos do vetor com count()<br/>";
    $tot =  count($v);
    echo "o vetor tem $tot elementos<br/>";
       
       echo "</br>" ;
    // Exibir o vetor com var_dump() mostra o tipo dos elementos
        echo "Exibir o vetor com var_dump() onde mostra o tipo dos elementos<br/>";
        var_dump($v);

    // Colocar elementos no veltor
    echo "Colocar elementos no veltor<br/> letras[]=H <br/>";
    $letras = array("A","B", "C", "D", "E", "F", "G");
    print_r($letras);
    $letras[]="H";    
    print_r($letras);

    echo "<br/>";
    //array_push() - Colocar elemento no final
    echo "array_push() - Colocar elemento no final<br/>";
    array_push($letras,"I");
    print_r($letras);

    
    echo "<br/>";

    //array_pop - Eliminar o último elemento do vetor
    echo "array_pop() - Eliminar o último elemento do vetor<br/>";
    array_pop($letras);
    print_r($letras);
    
    echo "<br/>";

    //  Colocar elemento no início do vetor
    echo "array_unshift() Colocar elemento no início do vetor<br/>";
    array_unshift($letras,"Z");
    print_r($letras);
    
    echo "<br/>";
    //  Remover elemento no início do vetor
    echo "array_shift() Remover o elemento no início do vetor<br/>";
    array_shift($letras);
    print_r($letras);

    //Ordenar vetores - sort()
    $numeros = array(2,4,5,6);
    echo "sort() - Ordenar vetores<br/>";
    sort($numeros);
    

    //Ordenar de forma reversa rsort()
    echo "rsort() - Ordenar vetores ao contrario <br/>";
    rsort($numeros);


    //Ordenação associativa asort()
    echo "asort() Ordenação associativa ordena os elementos e muda os indices acompanhando os valores<br>";
    asort($numeros);
    
    //Ordenação reversa associativa arsort()
    echo "arsort() Ordenação reversa associativa ordena os elementos de forma reversa e muda os indices acompanhando os valores<br>";
    arsort($numeros);

    // Ordenação por ídices ksort()
    $val = array(2=>"A", 5=>"J", 0=>"M", 3=>"X",4=>"K");
    echo "ksort() Ordenação por ídices os valores ficaram desordenadas<br/>";
    $novoVal = ksort($val);
    
    // Ordenação por ídices krsort()
    $val = array(2=>"A", 5=>"J", 0=>"M", 3=>"X",4=>"K");
    echo "krsort() Ordenação por ídices de forma reversa os valores ficaram desordenados<br/>";
    $novoVal = krsort($val);
    
    
















    ?>
</body>
</html>