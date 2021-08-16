<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação do Aluno Operador Ternário</title>
</head>
<body>
    <?php 
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $nome = $_GET["nome"];
        $m = ($n1 + $n2) / 2;
        echo " A média entre $n1 e $n2 é $m<br/>";
        $situacao = ($m >=6)? "APROVADO" : "REPROVADO <br/>";
        echo "O aluno $nome está: $situacao <br/>";
        echo "O aluno $nome está ".(($m>=6) ? "APROVADO <br/> ": "REPROVADO <br/>"); // Posso resumir e economizar no uso de variáveis passando direto no echo
                                                                         // No operador unário a toda expressão precisa estar entre parenteses
        /* Testando intervalos
        Operadores lógicos
        & ou && and e
        || ou 
        xor ou exclusivo
        não !
        */
        echo "O aluno $nome está ". (($m>0 & $m <5) ? "RECUPERAÇÃO": "APROVADO <br/>");
        
        


    
    ?>
</body>
</html>