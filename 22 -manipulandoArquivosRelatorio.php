<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando Arquivos em PHP</title>
</head>
<body>
    
    <h1>Realtório de Preços de Combustível</h1>
    <?php
    $arquivo = fopen('log.txt','r');
    if ($arquivo){
        //Imprime linha por linha até detectar o final
        while (!feof($arquivo)){
            echo fgets($arquivo). '<br/>';

        }
        fclose($arquivo);
    }
    
    ?>
</body>
</html>