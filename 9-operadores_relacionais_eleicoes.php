<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleições</title>
</head>
<body>
    <?php
    $ano = $_GET["an"];
    $idade = 2021 - $ano;
    $nome = $_GET["nome"];
    echo "Quem nasceu em $ano tem $idade de anos<br/>";
    $tipo = ($idade >=18 && $idade<= 64)? "OBRIGATÓRIO": "NÃO OBRIGATÓRIO";
    echo "O $nome tem $idade anos e seu voto é $tipo";


    
    ?>
</body>
</html>