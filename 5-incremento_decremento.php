<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento e Decremento</title>
</head>
<body>
    <?php
    /*
    
    // Comentário
    #  Comentários

    */

        
    $atual = $_GET["aa"];
    echo "O ano atual é $atual";
    echo "<br/> O ano anterior e ".--$atual;
    
    ?>
</body>
</html>