<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obter Dados Formulario PHP</title>
</head>
<body>
    
    <?php
    //isset quer dizer se foi configurado 
    $nome= isset( $_GET["nome"]) ? $_GET["nome"] : "[Não informado]";

    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0 ;

    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";

    $idade = date("Y")- $ano;

    echo "$nome é $sexo e tem $idade anos de idade.<br/>";

    ?>
    <a href="11-obter_valor_formulario2.html">Voltar</a>;
</body>
</html>