<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop for Parte 3</title>
</head>
<body>
    <?php
    //Inclusão de funções externa por include - Não é bloqueante
    require "25-loopFor3FuncoesExternas.php";
    echo "<h1> Testando novas funções </h1>";
    ola();
         
    mostraValor(4);
    echo "<h2>Finalizando o programa</h2>";

    //Inclusão de funções externas por require - É bloqueante pois o arquivo é requerido

    // Ainda temos duas variações do inlcude e do require
    //include_once  --  Once  Quer dizer se eu já carreguei o arquivo da função não preciso carregar mais  
    
    //require_once --  Once  Quer dizer se eu já carreguei o arquivo da função não preciso carregar mais  
    // Once é carregar apenas uma vez
    
    ?>
</body>
</html>