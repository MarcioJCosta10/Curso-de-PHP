<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores em PHP</title>
</head>
<body>
    
    <pre><table border="1"><tr>
    <?php
        //Vetores em PHP são coleções dinâmicas
        $n=array(3,5,8,3);
        $n[]=7;
        print_r($n);    

        echo"<br/>";
        //range()
        echo "Array com range()<br>";
        $c=range(5,20,2 ); // Cria um vetor de 5 até 20 contando de 5 em 5;
        print_r($c);

        echo"<br/>";    

        // Vetores com índices  personalizadas
        echo "Array com índices personalizados<br>";
        $v2 = array(1 => "A",3 => "B", 6 => "C", 8 =>"D");
        $v2[]="E";// Posso adicionar elementos, ele vai criar um índice com base no último índice
        print_r($v2);

        //unset() --Desalocar uma posição do vetor
        echo "Array após unset() do índice 9 <br/>";
        unset($v2[9]);
        print_r($v2);

        //Chaves Associativas
        echo "Array com chaves Associativas, em PHP os tipos de dados são dinâmicos<br>";
        $cad = array("nome"=>"Ana",
                      "Idade"=>23,
                      "Peso" =>78.5
                    );
        $cad["fuma"]=true;// Posso incluir elementos com outro tipo de dado
        print_r($cad);

        //Usando o foreach Associativo
        echo "foreach() com chaves Associativas<br>";         
        foreach($cad as $campo => $valor1){ // A sintaxe é para cada elemento de cad tratado como $campo associado a $valor1
            echo "O campo $campo é $valor1 <br>";
        }
        echo "<br>";




        //foreach()
        echo"Array com foreach()<br/>";
        foreach( $c as $valor){ // a sintaxe é: para cada elemento do vertor $c tratado como $valor mostre $valor
            echo "<td>$valor</td> ";
            
        }
        
        
        
    ?>
    </table>
    </pre>

</body>
</html>
