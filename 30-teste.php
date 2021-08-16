<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <?php
    
    for ($i=0;$i<=10;$i++){
        if($i%3==0)
            continue;
            echo $i."-";
    }
    echo "fim";
    
    ?>
</body>
</html>