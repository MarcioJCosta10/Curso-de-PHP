<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop For com PHP</title>
</head>
<body>
    <?php 
    
    for ( $i = 1; $i <= 10; $i++ ){
        echo "O valor de i é $i<br/>";
        
    }
    echo"<br/>";

    for ( $i = 10; $i >= 1; $i-- ){
        echo "Agora o valor de i é $i<br/>";
    }
    echo"<br/>";

    for ( $i = 0; $i <= 50 ; $i += 5 ){
        echo "Agora o valor de i de 5 em 5 $i<br/>";
    }
    echo"<br/>";
    for ( $i = 20; $i >= 0; $i -= 2 ){
        print "Agora de regressiva de e em 2 $i<br/>"; // Podemos usar o print como comando de saida

    }



    ?>
</body>
</html>