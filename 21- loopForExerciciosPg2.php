<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop For com PHP Exercício</title>
</head>
<body>
    
    <div>
        <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;

        for( $c = 1; $c <= 10; $c++ ){
            $r = $n * $c;
            echo " $n  x  $c  =  $r <br/>";
        }
        
        ?>
        <br/><a href="javascript:history.go(-1)"> Votar</a>

    </div>
</body>
</html>