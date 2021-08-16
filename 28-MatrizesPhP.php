<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes em PHP</title>
</head>
<body>
    <pre>
    <?php
    
    $n = array(array(2,3),array(5,4),array(6,9));
    print_r($n);

    $n[0][1] = $n[2][0];
    print_r($n);

    ?>
    </pre>
    
</body>
</html>