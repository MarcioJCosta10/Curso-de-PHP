<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções em Strings PHP</title>
</head>
<body>
    <?php
    // Em PHP tudo entre aspas é uma string

     //25 Funções:
     //1- printf();

     $prod = "leite";
     $preco=3.50;   
     printf("O %s está custando %.2f<br/>", $prod, $preco);

     /*
     %d positivo ou negativo 
     %u apenas positivos
     %f valor real
     %s strings
     */
    
     //2-print_r(); -- Exibe dados de um array

    $x[0]=4;
    $x[1]=3;
    $x[2]=8;
    echo "print_r<br>";
    print_r($x);
    echo "<br/>";

    echo "var_dump<br>";
    var_dump($x);
    echo "<br/>";
    echo "var_export<br>";

    var_export($x);
    echo "<br/>";

    echo "print_r<br>";
    $v2= array(2,3,4,5,6,7,8);
    print_r($v2);

    //3- Função wordwrap -- quebra o texto por caractere dentro do código fonte
    
    echo "wordwrap<br/>";
    $txt = "Este é um exemplo de uma variálve gigante";
    $res = wordwrap($txt, 5, "<br>\n",false); // false quebra por palavra se tiver menos de 5 letras
    echo "$res";

    //4 - strlen() -- Calcula ocomprimento da string
    echo "<br>";
    echo strlen($txt);
    echo "<br>";

    //5 trim() -- Remove os espaços do inicio e final da string 
    //6 ltrim() -- Remove os espaços do inicio 
    //7 rtrim() -- Remove os espaços do final    
    $nome = "   Jose da Siva   ";
    echo "O nome com os espaços";
    echo strlen($nome);

    echo "<br>";
    
    echo "O nome sem os espaços";
    $novo = trim($nome);
    echo strlen($novo);
    echo "<br>";
    echo "<br>";

    //8 - str_word_count() -- Entrega (conta) a quantidade de palavras em uma string
    $frase = "Eu vou estudar PHP agora";
    echo "Conta as plavras da string<br>";
    $cont0 = str_word_count($frase,0); // 0 conta as palavras 
    print($cont0);
    echo "<br>";
    
    echo "Gera um vetor com as palavras da string<br>";
    $cont1 = str_word_count($frase,1); //1 gera um vetor com as palavras
    print_r($cont1);

    echo "Gera outro tipo de vetor com as palavras da string<br>";
    $cont2 = str_word_count($frase,2); //1 gera um vetor com o indice do inicio
    print_r($cont2);

    echo "<br>";

    //9 - Função explode() -- Faz a separação da string, cria um vetor e usa um cractere para expodir e determinar a separação.

    $site = "Curso em vídeo";
    $vetor = explode(" ",$site);
    echo "<br>";
    echo " Cria um vetor e determinamos onde irá explodir explode() <br>";
    print_r($vetor);
    echo "<br>";
    echo "<br>";

    // 10 - str_split() --Pega cada letra e coloca em um indice
    $nomeInteiro = "Maria";
    echo "str_split() pega cada letra e coloca em um indice <br/>";
    $v = str_split($nomeInteiro);
    print_r($v);

    echo "<br>";
    echo "<br>";
    
    // 11- implode() -- Concatenar varios indices de um vetor com espaços ou caracteres especiais
    // join() - é igual
    echo"implode() -- Concatenar varios indices de um vetor com espaços ou caracteres especiais<br>";
    $vetorx[0]="Curso";
    $vetorx[1]="em";
    $vetorx[2]="Video";
    $texto = implode("#",$vetor);
    print($texto);

    echo "<br>";
    echo "<br>";

    //12 chr() -- converte o caracter de acordo com a numeração ASCII<br>
    echo "chr() converte o caracter de acordo com a numeração ASCII<br/>";
    $letra = chr(67);
    $letraMinuscula = chr(99);
    echo "A letra de código 67 é $letra<br>";
    echo "A letra de código 98 é $letraMinuscula minusculo<br/>";

    
    echo "<br>";
    echo "<br>";

    //13 - odr() -- É o contrario da chr()
    echo "ord() converte o caracter de acordo com a numeração ASCII<br/>";
    $letra2 = "C";
    $cod = ord($letra2);
    echo "$cod<br/>";

    echo "<br>";

    //14 - strtolower --Coverte para minúsculo    
    //15 - strtoupper() -- Converte para maiúsculo
    $nome3 = "Marciano Costa";
    $result = strtolower($nome3);
    $result2 = strtoupper($nome3);
    echo "Seu nome em minúsculo é $result<br/>";
    echo "Seu nome em maiúsculo é $result2<br/>";
    
    echo "<br>";
    echo "<br>";

    //16- ucfirst() -- coloca a primeira letra para maiúsculo
    //17 - ucwords()    
    $nome4 = "marciano jose";
    echo "ucfirst() coloca a primeira letra para maiúsculo<br/>";
    printf("Seu nome é ".ucfirst($nome4));
    echo "<br>";
    echo "<br>";
    echo "ucwords() coloca a primeira letra de cada palavra para maiúsculo<br/>";
    printf(ucwords($nome4));
    
    echo "<br>";


    //18-strrev() -- Coloca uma string de trás para frente
    
    echo "<br>";
    echo "strrev() Mostra a string de trás para frente<br/>";
    print(strrev($nome4));
    
    echo "<br>";
    echo "<br>";

    // 19-strpos()
    echo "strpos() mostra a posição onde a string foi encontrada<br>";
    $frase4 = "Estou aprendendo PHP no Curso em Vídeo de PHP<br>";
    $pos = strpos($frase4, "PHP");
    echo "$frase4";
    echo " A posição da string PHP é $pos";
    
    echo "<br>";
    echo "<br>";

    //20-stripos() -- mostra a posição onde a string foi encontrada e ignora a caixa
    echo "stripos() mostra a posição onde a string foi encontrada e ignora a caixa<br>";
    $pos2= stripos($frase4,"php");
    echo " A posição da string php é $pos2";
    
    echo "<br>";
    echo "<br>";

    //21 - substr_count() -- Informa quantas vezes a string apareceu na frase
    echo "substr_count() Informa quantas vezes a string apareceu na frase<br>";
    $count2= substr_count($frase4,"PHP");
    echo "$count2<br/>";
    
    echo "<br>";
    echo "<br>";

   //22- substr();
   echo "substr() é um fatiamento da string começa em 0 até a 5 letra <br>";
   $substring = substr($frase4,0,5);
   $substring2 = substr($frase4,7);
   echo $substring;   
   echo "<br>";
   echo $substring2;

   
   echo "<br>";
   echo "<br>";

   
   //23-str_pad(); -- Faz um strig caber em uma determinda quantidade de caracteres
    $nome5 = "Marcio";
    $coube = str_pad($nome5, 30,"-",STR_PAD_BOTH);//aqui tem as variações esquerda direita e entre
    echo "str_pad() faz uma string caber em determinado espaço<br>";
    echo "$coube <br>";
    $tamanho = strlen($coube);
    echo "Agora a string tem $tamanho caracteres";

    //24 - str_repeat
    $txt2 = "PHP";
    echo "str_repeat() repete a string <br/  >";
    $textoRepetido = str_repeat($txt2,5);
    echo "$textoRepetido";
   
   echo "<br>";
   echo "<br>";

   //25 - str_replace() -- Substituição em string
   //26 - str_ireplace() ignara maiúsculas e minúsculas 
   echo "str_replace() substitui string na frase<br>";
   $frase5 = "Gosto de estudar Matemática.";
   echo "Frase antes $frase5<br/>";
    $novaFrase5= str_replace("Matemática","PHP",$frase5);
    echo "Frase depois $novaFrase5";















    ?>
    
</body>
</html>