<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis referênciadas</title>
</head>
<body>

<?php 
    //Sem refernciar
    $a = 3;
    $b = $a;
    $b += 5;
    echo " <br/> A variáve a vale $a ";
    echo " <br/> A variável b vale $b ";

    //refernciando toda vez que mudar a variável b1 o valor de a1 será atualizado:
    $a1 = 3;
    $b1 = &$a1;
    $b1 += 5;
    echo " <br/> A variável a1 vale $a1 ";
    echo " <br/> A variável b1 vale $b1 ";


    //Variáveis de variáveis:

    $site = "cursoemvideo";
    $$site = "cursoPHP";

    echo "<br/>$site";
    echo "<br/>$cursoemvideo";


    $x = "abc";
    $$x = "def";

    echo "<br/> O conteúdo da variável x é $x";
    echo "<br/> A variável abc criada recebeu o valor $abc";




?>
    
</body>
</html>